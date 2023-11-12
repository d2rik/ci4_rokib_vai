<div id="blogList" class="grid grid-cols-1 sm:grid-cols-3 gap-4">
    <?php foreach ($blog as $item) : ?>
        <!-- box -->
        <div class="">
            <div class=" rounded w-full overflow-hidden">
                <a class="" href="<?= base_url('blog/') . esc($item['slug']) ?>">
                    <img class=" w-full hover:scale-105 hover:cursor-pointer transition-all" src="<?= base_url() . src($item['thumbnail'], 'blog_image/thumbs') ?>" alt="" />
                </a>
            </div>
            <div class="mt-2">
                <div class="">
                    <span class=" p-0.5 border border-primary text-xs rounded-sm text-primary">
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
                    <a class="hover:text-primary" href="<?= base_url('blog/') . esc($item['slug'], 'url') ?>">
                        <h1 class="text-xl font-bold"><?= esc($item['title']) ?></h1>
                    </a>
                </div>
                <div>
                    <div>
                        <?= substr($item['blog'], 0, 80) ?> ...
                    </div>
                    <a href="<?= base_url('blog/') . esc($item['slug'], 'url') ?>" class="inline-flex items-center px-2 py-1 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <!--/box -->
    <?php endforeach ?>

</div>
<div class="text-center mt-4">
    <button id="showMore" class="p-2 bg-primary shadow-sm text-white hover:shadow-md hover:mt-[-2px] transition-all rounded">
        Show more
    </button>
</div>
<script>
    $(document).ready(function() {
        let limit = 1;
        let offset = 0;

        function more(limit, offset) {
            $.post('<?= base_url('/getData') ?>', {
                limit: limit,
                offset: offset
            }, function(data, status) {
                $("#blogList").append(data);
            })
        }

        function callData() {
            for (let i = 0; i < 5; i++) {
                offset += 1;
                more(limit, offset);
            }
        }
        callData();
        $('#showMore').click(function() {
            callData();
        });
    });
</script>