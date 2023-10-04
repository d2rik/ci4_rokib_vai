<div class="mb-12">
    <?php foreach ($research_interest as $item) : ?>
        <!-- box -->
        <div class="flex flex-col md:flex-row items-start gap-4 mb-4">
            <img class="w-full md:w-52" src="<?= base_url() . src($item['image'], 'research_interest/thumbs') ?>" alt="" />

            <div>
                <h1 class="text-lg font-bold"><?= $item['title'] ?></h1>
                <p><?= convertLinks(esc($item['description'])) ?></p>
            </div>

        </div>
        <!--/box -->
    <?php endforeach ?>
</div>