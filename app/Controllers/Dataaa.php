<?php

namespace App\Controllers;


class Dataaa extends BaseController
{
    public function getData()
    {
        $limit = $this->request->getPost('limit');
        $offset = $this->request->getPost('offset');
        $model = new \App\Models\Blog_model();
        $blog = $model->get_blog(false, $limit, $offset);
        if ($blog == NULL) {
            echo "<script>$('#showMore').hide();</script>";
        } else { ?>
            <?php foreach ($blog as $item) : ?>
                <!-- box -->
                <div class="text-center">
                    <a href="<?= base_url('blog/') . esc($item['slug']) ?>">
                        <img class="w-full rounded hover:scale-105 hover:cursor-pointer transition-all" src="<?= base_url('assets/image/blog_image/') . esc($item['thumbnail']) ?>" alt="" />
                    </a>
                    <div class="mt-2">
                        <div class="">
                            <span class="p-1 border border-sky-600 text-xs rounded-sm text-sky-600">
                                <?php
                                $dateString = esc($item['created_at']);
                                $dateTime = new \DateTime($dateString);

                                // Format the DateTime object to the desired format
                                $formattedDate = $dateTime->format('M d, Y');
                                echo $formattedDate;
                                ?>
                            </span>
                        </div>
                        <div class="mt-1">
                            <a href="<?= base_url('blog/') . esc($item['slug'], 'url') ?>" class="text-lg font-bold"><?= esc($item['title']) ?></a>
                        </div>
                        <div>
                            <p>
                                <?= esc(substr($item['blog'], 0, 80)) ?> ...

                                <a href="<?= base_url('blog/') . esc($item['slug']) ?>" class="text-sky-600">See more</a>
                            </p>
                        </div>
                    </div>
                </div>
                <!--/box -->
            <?php endforeach ?>
<?php
        }
    }
}
?>