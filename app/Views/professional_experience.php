<?php foreach ($professional_experience as $item) : ?>
    <!-- box -->
    <div>
        <span class="p-1 border border-sky-400 text-xs rounded-sm text-sky-400"><?= $item['year'] ?></span>
        <h2 class="text-xl font-bold mt-2">
            <?= $item['title'] ?>
        </h2>
        <h5 class="flex items-center text-sm text-slate-400">
            <span><?= $item['company'] ?></span><img src="./assets/image/<?= $item['company_logo'] ?>" alt="" />
        </h5>

        <h3 class="text-base">
            <span class="font-bold">Responsibilities:</span><?= $item['responsibilities'] ?><span></span>
        </h3>
    </div>
    <!--/box -->
<?php endforeach ?>