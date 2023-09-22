<div id="blogList" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4">
    <?php foreach ($blog as $item) : ?>
        <!-- box -->
        <div class="text-center">
            <div class=" rounded w-full overflow-hidden">
                <a class="" href="<?= base_url('blog/') . esc($item['slug']) ?>">
                    <img class=" hover:scale-105 hover:cursor-pointer transition-all" src="<?= base_url('assets/image/blog_image/') . esc($item['thumbnail']) ?>" alt="" />
                </a>
            </div>
            <div class="mt-2">
                <div class="">
                    <span class=" p-0.5 border border-sky-600 text-xs rounded-sm text-sky-600">
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
                    <a class="hover:text-sky-700" href="<?= base_url('blog/') . esc($item['slug'], 'url') ?>">
                        <h1 class="text-lg font-bold"><?= esc($item['title']) ?></h1>
                    </a>
                </div>
                <div>
                    <p>
                        <?= esc(substr($item['blog'], 0, 80)) ?> ...

                        <a href="<?= base_url('blog/') . esc($item['slug']) ?>" class="text-sky-600 hover:text-sky-700">See more</a>
                    </p>
                </div>
            </div>
        </div>
        <!--/box -->
    <?php endforeach ?>
</div>
<div class="text-center mt-4">
    <button id="showMore" class="p-2 bg-sky-600 shadow-sm text-white hover:shadow-md hover:mt-[-2px] transition-all rounded">
        Show more
    </button>
</div>
<script>
    $(document).ready(function() {
        let kk = 0;
        let ll = 1;

        function more(limit, offset) {
            $.post('<?= base_url('/getData') ?>', {
                limit: limit,
                offset: offset
            }, function(data, status) {
                $("#blogList").append(data);
            })
        }
        $('#showMore').click(function() {
            for (let i = 0; i < 6; i++) {
                kk += 1;
                more(ll, kk);
            }


        });
    });
</script>