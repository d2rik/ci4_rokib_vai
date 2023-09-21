<div class="flex-col flex md:flex-row gap-4">
    <div class="md:border-e border-b md:border-b-0 pb-6 md:pb-0 pe-4 flex-1">
        <h2 class="text-sky-600 text-lg font-bold mb-4">
            Educational Qualifications
        </h2>
        <?php foreach ($educational_qualifications as $item) : ?>
            <!-- box -->
            <div class="mt-6">
                <span class="p-1 border border-slate-400 text-xs rounded-sm text-slate-400"><?= $item['session'] ?></span>
                <h2 class="text-xl font-bold mt-2"><?= $item['degree'] ?></h2>
                <h5 class="text-sm text-sky-600"><?= $item['subject'] ?></h5>
                <h3 class="text-base">
                    <?= $item['academy'] ?>
                </h3>
            </div>
            <!--/box -->
        <?php endforeach ?>
    </div>
    <div class="last:pe-0 flex-1">
        <h2 class="text-sky-600 text-lg font-bold mb-4">
            Achievements & Excellence
        </h2>
        <?php foreach ($achievements_and_excellence as $item) : ?>
            <!-- box -->
            <div class="mt-6">
                <h2 class="text-lg font-bold mt-2">
                    <?= $item['title'] ?>
                </h2>
                <li class="text-sm">
                    <?= $item['description'] ?>
                </li>
            </div>
            <!--/box -->
        <?php endforeach ?>
    </div>
</div>