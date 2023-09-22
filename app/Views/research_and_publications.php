<div class="flex-col flex md:flex-row gap-4">
    <div class="md:border-e border-b md:border-b-0 pb-6 md:pb-0 pe-4 flex-1">
        <h2 class="text-primary text-lg font-bold mb-4">
            Conference Proceedings
        </h2>
        <?php foreach ($conference_publications as $item) : ?>
            <!-- box -->
            <div class="mt-6">
                <a href="<?= $item['link'] ?>" target="_blank" class="text-base font-bold mb-1">
                    <?= $item['title'] ?>
                </a>
                <div class="text-sm mb-1">
                    <span class="text-primary font-bold">Authors:</span>
                    <span><?= $item['authors'] ?></span>
                </div>
                <div class="text-sm">
                    <span class="text-primary font-bold">Conference:</span>
                    <span><?= $item['conference'] ?></span>
                </div>
            </div>
            <!--/box -->
        <?php endforeach ?>
    </div>
    <div class="last:pe-0 flex-1">
        <h2 class="text-primary text-lg font-bold mb-4">
            Journal Publications
        </h2>
        <?php foreach ($journal_publications as $item) : ?>
            <!-- box -->
            <div class="mt-6">
                <a href="<?= $item['link'] ?>" target="_blank" class="text-base font-bold mb-1">
                    <?= $item['title'] ?>
                </a>
                <div class="text-sm mb-1">
                    <span class="text-primary font-bold">Authors:</span>
                    <span><?= $item['authors'] ?></span>
                </div>
                <div class="text-sm">
                    <span class="text-primary font-bold">Journal:</span>
                    <span><?= $item['journal'] ?></span>
                </div>
            </div>
            <!--/box -->
        <?php endforeach ?>

    </div>
</div>