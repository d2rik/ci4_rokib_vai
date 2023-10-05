<div class="flex-col flex md:flex-row gap-4">
    <div class="md:border-e border-b md:border-b-0 pb-6 md:pb-0 pe-4 flex-1">
        <div class=" inline-flex py-1 px-4 gap-2 items-center mb-4 bg-primary">
        <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" height="1.25em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M96 96c0-35.3 28.7-64 64-64H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H80c-44.2 0-80-35.8-80-80V128c0-17.7 14.3-32 32-32s32 14.3 32 32V400c0 8.8 7.2 16 16 16s16-7.2 16-16V96zm64 24v80c0 13.3 10.7 24 24 24H296c13.3 0 24-10.7 24-24V120c0-13.3-10.7-24-24-24H184c-13.3 0-24 10.7-24 24zm208-8c0 8.8 7.2 16 16 16h48c8.8 0 16-7.2 16-16s-7.2-16-16-16H384c-8.8 0-16 7.2-16 16zm0 96c0 8.8 7.2 16 16 16h48c8.8 0 16-7.2 16-16s-7.2-16-16-16H384c-8.8 0-16 7.2-16 16zM160 304c0 8.8 7.2 16 16 16H432c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16zm0 96c0 8.8 7.2 16 16 16H432c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z"/></svg>
            <span class="text-white text-lg font-bold">
                CONFERENCE PROCEEDINGS
            </span>
        </div>
        <?php foreach ($conference_publications as $item) : ?>
            <!-- box -->
            <div>
                <a href="<?= $item['link'] ?>" target="_blank" class="text-base font-bold mb-1">
                    <?= $item['title'] ?>
                </a>
                <div class="text-sm mb-1">
                    <span class="text-primary font-bold">Authors:</span>
                    <span><?= convertLinks($item['authors']); ?></span>
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
        <div class=" inline-flex py-1 px-4 gap-2 items-center mb-4 bg-primary">
            <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" height="1.25em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <path d="M96 96c0-35.3 28.7-64 64-64H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H80c-44.2 0-80-35.8-80-80V128c0-17.7 14.3-32 32-32s32 14.3 32 32V400c0 8.8 7.2 16 16 16s16-7.2 16-16V96zm64 24v80c0 13.3 10.7 24 24 24H296c13.3 0 24-10.7 24-24V120c0-13.3-10.7-24-24-24H184c-13.3 0-24 10.7-24 24zm208-8c0 8.8 7.2 16 16 16h48c8.8 0 16-7.2 16-16s-7.2-16-16-16H384c-8.8 0-16 7.2-16 16zm0 96c0 8.8 7.2 16 16 16h48c8.8 0 16-7.2 16-16s-7.2-16-16-16H384c-8.8 0-16 7.2-16 16zM160 304c0 8.8 7.2 16 16 16H432c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16zm0 96c0 8.8 7.2 16 16 16H432c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z" />
            </svg>
            <span class="text-white text-lg font-bold">
                JOURNAL PUBLICATIONS
            </span>
        </div>
        <?php foreach ($journal_publications as $item) : ?>
            <!-- box -->
            <div>
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