<div class="flex-col flex md:flex-row gap-4">
    <div class="md:border-e border-b md:border-b-0 pb-6 md:pb-0 pe-4 flex-1">
        <div class=" inline-flex py-1 px-4 gap-2 items-center mb-4 bg-primary">
            <svg class=" fill-white" xmlns="http://www.w3.org/2000/svg" height="1.25em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <path d="M184 48H328c4.4 0 8 3.6 8 8V96H176V56c0-4.4 3.6-8 8-8zm-56 8V96H64C28.7 96 0 124.7 0 160v96H192 320 512V160c0-35.3-28.7-64-64-64H384V56c0-30.9-25.1-56-56-56H184c-30.9 0-56 25.1-56 56zM512 288H320v32c0 17.7-14.3 32-32 32H224c-17.7 0-32-14.3-32-32V288H0V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V288z" />
            </svg>
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
    <div class=" inline-flex py-1 px-4 gap-2 items-center mb-4 bg-primary">
            <svg class=" fill-white" xmlns="http://www.w3.org/2000/svg" height="1.25em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <path d="M184 48H328c4.4 0 8 3.6 8 8V96H176V56c0-4.4 3.6-8 8-8zm-56 8V96H64C28.7 96 0 124.7 0 160v96H192 320 512V160c0-35.3-28.7-64-64-64H384V56c0-30.9-25.1-56-56-56H184c-30.9 0-56 25.1-56 56zM512 288H320v32c0 17.7-14.3 32-32 32H224c-17.7 0-32-14.3-32-32V288H0V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V288z" />
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