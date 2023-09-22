<div class="flex-col flex md:flex-row gap-4">
    <div class="md:border-e border-b md:border-b-0 pb-6 md:pb-0 pe-4 flex-1">
        <h2 class="text-primary text-lg font-bold mb-4">
            Educational Qualifications
        </h2>
        <?php foreach ($educational_qualifications as $item) : ?>
            <!-- box -->
            <div class="mt-6">
                <span class="p-1 border border-slate-400 text-xs rounded-sm text-slate-400"><?= esc($item['session']) ?></span>
                <h2 class="text-xl font-bold mt-2"><?= esc($item['degree']) ?></h2>
                <h5 class="text-sm text-primary"><?= esc($item['subject']) ?></h5>
                <h3 class="text-base">
                    <?= esc($item['academy']) ?>
                </h3>
            </div>
            <!--/box -->
        <?php endforeach ?>
    </div>
    <div class="last:pe-0 flex-1">
        <h2 class="text-primary text-lg font-bold mb-4">
            Achievements & Excellence
        </h2>
        <?php foreach ($achievements_and_excellence as $item) : ?>
            <!-- box -->
            <div class="mt-6">
                <h2 class="text-lg font-bold mt-2">
                    <?= esc($item['title']) ?>
                </h2>
                <li class="text-sm">
                    <?= esc($item['description']) ?>
                </li>
            </div>
            <!--/box -->
        <?php endforeach ?>
    </div>
</div>