<div class="mb-12">
    <div class="md:border-e border-b md:border-b-0 pb-6 md:pb-0 pe-4 flex-1">
        <div class=" inline-flex py-1 px-4 gap-2 items-center bg-primary">
            <svg class=" fill-white" xmlns="http://www.w3.org/2000/svg" height="1.25em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <path d="M184 48H328c4.4 0 8 3.6 8 8V96H176V56c0-4.4 3.6-8 8-8zm-56 8V96H64C28.7 96 0 124.7 0 160v96H192 320 512V160c0-35.3-28.7-64-64-64H384V56c0-30.9-25.1-56-56-56H184c-30.9 0-56 25.1-56 56zM512 288H320v32c0 17.7-14.3 32-32 32H224c-17.7 0-32-14.3-32-32V288H0V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V288z" />
            </svg>
            <span class="text-white text-lg font-bold">
                PROFESSIONAL EXPERIENCE
            </span>
        </div>
        <?php foreach ($professional_experience as $item) : ?>
            <!-- box -->
            <div class="mt-4">
                <span class="p-1 border border-primary text-xs rounded-sm text-primary"><?= $item['year'] ?></span>
                <h2 class="text-xl font-bold mt-2">
                    <?= $item['title'] ?>
                </h2>

                <div class="flex items-center text-sm text-slate-400">
                    <span><?= $item['company'] ?></span><img class=" w-9" src="./assets/image/<?= $item['company_logo'] ?>" alt="" />
                </div>
                <div class="flex gap-1 items-center text-sm text-slate-400">
                    <span>Website:</span><a class="text-primary underline" href="<?= $item['website'] ?>"><?= $item['website'] ?></a>
                </div>
                <h3 class="text-base mt-2">
                    <span class="font-bold">Responsibilities:</span>
                    <?= convertLinks(nl2li($item['responsibilities'])); ?>
                </h3>
            </div>
            <!--/box -->
        <?php endforeach ?>
    </div>
</div>