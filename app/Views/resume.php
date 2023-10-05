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
<!-- TRAINING AND WORKSHOPS -->
<div class="mb-12">
    <div class="md:border-e border-b md:border-b-0 pb-6 md:pb-0 pe-4 flex-1">
        <div class=" inline-flex py-1 px-4 gap-2 items-center bg-primary">
            <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" height="1.25em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <path d="M78.6 5C69.1-2.4 55.6-1.5 47 7L7 47c-8.5 8.5-9.4 22-2.1 31.6l80 104c4.5 5.9 11.6 9.4 19 9.4h54.1l109 109c-14.7 29-10 65.4 14.3 89.6l112 112c12.5 12.5 32.8 12.5 45.3 0l64-64c12.5-12.5 12.5-32.8 0-45.3l-112-112c-24.2-24.2-60.6-29-89.6-14.3l-109-109V104c0-7.5-3.5-14.5-9.4-19L78.6 5zM19.9 396.1C7.2 408.8 0 426.1 0 444.1C0 481.6 30.4 512 67.9 512c18 0 35.3-7.2 48-19.9L233.7 374.3c-7.8-20.9-9-43.6-3.6-65.1l-61.7-61.7L19.9 396.1zM512 144c0-10.5-1.1-20.7-3.2-30.5c-2.4-11.2-16.1-14.1-24.2-6l-63.9 63.9c-3 3-7.1 4.7-11.3 4.7H352c-8.8 0-16-7.2-16-16V102.6c0-4.2 1.7-8.3 4.7-11.3l63.9-63.9c8.1-8.1 5.2-21.8-6-24.2C388.7 1.1 378.5 0 368 0C288.5 0 224 64.5 224 144l0 .8 85.3 85.3c36-9.1 75.8 .5 104 28.7L429 274.5c49-23 83-72.8 83-130.5zM56 432a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z" />
            </svg>
            <span class="text-white text-lg font-bold">
                TRAINING AND WORKSHOPS
            </span>
        </div>

        <?php foreach ($training_and_workshop as $item) : ?>


            <!-- box -->
            <div class="flex flex-col gap-2 mt-4">
                <h1 class="font-bold text-xl"><?= esc($item['title']) ?></h1>
                <div class="flex items-center gap-3"><span class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" height="0.75em" viewBox="0 0 448 512">
                            <path d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z" />
                        </svg><span class=" text-xs"><?= esc($item['date']) ?></span></span><span class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" height="0.75em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                        </svg><span class=" text-xs"><?= esc($item['duration']) ?></span></span></div>
                <div class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" height="0.75em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg><span class="text-xs"><?= esc($item['location']) ?></span></div>
                <h1><b>Training Type:</b> <span class="text-primary"><?= esc($item['training_type']) ?></span></h1>
                <p><b>Details:</b> <?= convertLinks($item['details']); ?></p>
            </div>
            <!--/box -->
        <?php endforeach ?>
    </div>
</div>
<!-- education -->

<div class="flex-col flex md:flex-row gap-4 mb-12 mt-5">
    <div class="md:border-e border-b md:border-b-0 pb-6 md:pb-0 pe-4 flex-1">
        <div class=" inline-flex py-1 px-4 gap-2 items-center bg-primary">
            <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" height="1.25em" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <path d="M337.8 5.4C327-1.8 313-1.8 302.2 5.4L166.3 96H48C21.5 96 0 117.5 0 144V464c0 26.5 21.5 48 48 48H592c26.5 0 48-21.5 48-48V144c0-26.5-21.5-48-48-48H473.7L337.8 5.4zM256 416c0-35.3 28.7-64 64-64s64 28.7 64 64v96H256V416zM96 192h32c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H96c-8.8 0-16-7.2-16-16V208c0-8.8 7.2-16 16-16zm400 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H512c-8.8 0-16-7.2-16-16V208zM96 320h32c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H96c-8.8 0-16-7.2-16-16V336c0-8.8 7.2-16 16-16zm400 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H512c-8.8 0-16-7.2-16-16V336zM232 176a88 88 0 1 1 176 0 88 88 0 1 1 -176 0zm88-48c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16s-7.2-16-16-16H336V144c0-8.8-7.2-16-16-16z" />
            </svg>
            <span class="text-white text-lg font-bold">
                EDUCATIONAL QUALIFICATION
            </span>
        </div>
        <?php foreach ($educational_qualifications as $item) : ?>
            <!-- box -->
            <div class="mt-4">
                <div class="flex items-center gap-2">
                    <span class="p-0.5 border border-slate-400 text-xs rounded-sm text-slate-400">Session: <?= esc($item['session']) ?></span>
                    <span class="p-0.5 border border-slate-400 text-xs rounded-sm text-slate-400">Passing Year: <?= esc($item['passing_year']) ?></span>
                </div>

                <h2 class="text-xl font-bold mt-2"><?= esc($item['degree']) ?></h2>
                <h5 class="text-sm text-primary"><?= esc($item['subject']) ?></h5>
                <h3 class="text-base">
                    <?= esc($item['academy']) ?>
                </h3>
            </div>
            <!--/box -->
        <?php endforeach ?>
    </div>
    <div class="md:border-e border-b md:border-b-0 pb-6 md:pb-0 pe-4 flex-1">
        <div class=" inline-flex py-1 px-4 gap-2 items-center bg-primary">
            <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" height="1.25em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <path d="M400 0H176c-26.5 0-48.1 21.8-47.1 48.2c.2 5.3 .4 10.6 .7 15.8H24C10.7 64 0 74.7 0 88c0 92.6 33.5 157 78.5 200.7c44.3 43.1 98.3 64.8 138.1 75.8c23.4 6.5 39.4 26 39.4 45.6c0 20.9-17 37.9-37.9 37.9H192c-17.7 0-32 14.3-32 32s14.3 32 32 32H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H357.9C337 448 320 431 320 410.1c0-19.6 15.9-39.2 39.4-45.6c39.9-11 93.9-32.7 138.2-75.8C542.5 245 576 180.6 576 88c0-13.3-10.7-24-24-24H446.4c.3-5.2 .5-10.4 .7-15.8C448.1 21.8 426.5 0 400 0zM48.9 112h84.4c9.1 90.1 29.2 150.3 51.9 190.6c-24.9-11-50.8-26.5-73.2-48.3c-32-31.1-58-76-63-142.3zM464.1 254.3c-22.4 21.8-48.3 37.3-73.2 48.3c22.7-40.3 42.8-100.5 51.9-190.6h84.4c-5.1 66.3-31.1 111.2-63 142.3z" />
            </svg>
            <span class="text-white text-lg font-bold"> ACHIEVEMENT & EXCELLENCE
            </span>
        </div>
        <?php foreach ($achievements_and_excellence as $item) : ?>
            <!-- box -->
            <div class="mt-4">
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
<!-- Language Proficiency -->
<div class="mb-12">
    <div class="md:border-e border-b md:border-b-0 pb-6 md:pb-0 pe-4 flex-1">
        <div class=" inline-flex py-1 px-4 gap-2 items-center bg-primary">
            <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" height="1.25em" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <path d="M0 128C0 92.7 28.7 64 64 64H256h48 16H576c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H320 304 256 64c-35.3 0-64-28.7-64-64V128zm320 0V384H576V128H320zM178.3 175.9c-3.2-7.2-10.4-11.9-18.3-11.9s-15.1 4.7-18.3 11.9l-64 144c-4.5 10.1 .1 21.9 10.2 26.4s21.9-.1 26.4-10.2l8.9-20.1h73.6l8.9 20.1c4.5 10.1 16.3 14.6 26.4 10.2s14.6-16.3 10.2-26.4l-64-144zM160 233.2L179 276H141l19-42.8zM448 164c11 0 20 9 20 20v4h44 16c11 0 20 9 20 20s-9 20-20 20h-2l-1.6 4.5c-8.9 24.4-22.4 46.6-39.6 65.4c.9 .6 1.8 1.1 2.7 1.6l18.9 11.3c9.5 5.7 12.5 18 6.9 27.4s-18 12.5-27.4 6.9l-18.9-11.3c-4.5-2.7-8.8-5.5-13.1-8.5c-10.6 7.5-21.9 14-34 19.4l-3.6 1.6c-10.1 4.5-21.9-.1-26.4-10.2s.1-21.9 10.2-26.4l3.6-1.6c6.4-2.9 12.6-6.1 18.5-9.8l-12.2-12.2c-7.8-7.8-7.8-20.5 0-28.3s20.5-7.8 28.3 0l14.6 14.6 .5 .5c12.4-13.1 22.5-28.3 29.8-45H448 376c-11 0-20-9-20-20s9-20 20-20h52v-4c0-11 9-20 20-20z" />
            </svg>
            <span class="text-white text-lg font-bold">
                LANGUAGE PROFICIENCY
            </span>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Language
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Reading
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Writing
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Listening
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Speaking
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($language_skills as $item) : ?>
                        <!-- box -->
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <?= $item['skill_name'] ?>
                            </th>

                            <td class="px-6 py-4">
                                <?= $item['reading_level'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?= $item['writing_level'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?= $item['listening_level'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?= $item['speaking_level'] ?>
                            </td>
                        </tr>
                        <!--/box -->
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- skills -->
<div class="mb-12">
    <div class="md:border-e border-b md:border-b-0 pb-6 md:pb-0 pe-4 flex-1">
        <div class=" inline-flex py-1 px-4 gap-2 items-center bg-primary">
            <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" height="1.25em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <path d="M78.6 5C69.1-2.4 55.6-1.5 47 7L7 47c-8.5 8.5-9.4 22-2.1 31.6l80 104c4.5 5.9 11.6 9.4 19 9.4h54.1l109 109c-14.7 29-10 65.4 14.3 89.6l112 112c12.5 12.5 32.8 12.5 45.3 0l64-64c12.5-12.5 12.5-32.8 0-45.3l-112-112c-24.2-24.2-60.6-29-89.6-14.3l-109-109V104c0-7.5-3.5-14.5-9.4-19L78.6 5zM19.9 396.1C7.2 408.8 0 426.1 0 444.1C0 481.6 30.4 512 67.9 512c18 0 35.3-7.2 48-19.9L233.7 374.3c-7.8-20.9-9-43.6-3.6-65.1l-61.7-61.7L19.9 396.1zM512 144c0-10.5-1.1-20.7-3.2-30.5c-2.4-11.2-16.1-14.1-24.2-6l-63.9 63.9c-3 3-7.1 4.7-11.3 4.7H352c-8.8 0-16-7.2-16-16V102.6c0-4.2 1.7-8.3 4.7-11.3l63.9-63.9c8.1-8.1 5.2-21.8-6-24.2C388.7 1.1 378.5 0 368 0C288.5 0 224 64.5 224 144l0 .8 85.3 85.3c36-9.1 75.8 .5 104 28.7L429 274.5c49-23 83-72.8 83-130.5zM56 432a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z" />
            </svg>
            <span class="text-white text-lg font-bold">
                SKILLS
            </span>
        </div>
        <div class="ms-4 mt-2">
            <h1 class="font-bold text-lg ">Computer Skill:</h1>
            <p>MS Word, MS Excel, MS Power Point, MATLAB, Solid works, ANSYS, C, C++</p>
        </div>
    </div>
</div>

<!-- reference -->
<div class="mb-12">
    <div class="md:border-e border-b md:border-b-0 pb-6 md:pb-0 pe-4 flex-1">
        <div class=" inline-flex py-1 px-4 gap-2 items-center bg-primary">
            <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" height="1.25em" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <path d="M579.8 267.7c56.5-56.5 56.5-148 0-204.5c-50-50-128.8-56.5-186.3-15.4l-1.6 1.1c-14.4 10.3-17.7 30.3-7.4 44.6s30.3 17.7 44.6 7.4l1.6-1.1c32.1-22.9 76-19.3 103.8 8.6c31.5 31.5 31.5 82.5 0 114L422.3 334.8c-31.5 31.5-82.5 31.5-114 0c-27.9-27.9-31.5-71.8-8.6-103.8l1.1-1.6c10.3-14.4 6.9-34.4-7.4-44.6s-34.4-6.9-44.6 7.4l-1.1 1.6C206.5 251.2 213 330 263 380c56.5 56.5 148 56.5 204.5 0L579.8 267.7zM60.2 244.3c-56.5 56.5-56.5 148 0 204.5c50 50 128.8 56.5 186.3 15.4l1.6-1.1c14.4-10.3 17.7-30.3 7.4-44.6s-30.3-17.7-44.6-7.4l-1.6 1.1c-32.1 22.9-76 19.3-103.8-8.6C74 372 74 321 105.5 289.5L217.7 177.2c31.5-31.5 82.5-31.5 114 0c27.9 27.9 31.5 71.8 8.6 103.9l-1.1 1.6c-10.3 14.4-6.9 34.4 7.4 44.6s34.4 6.9 44.6-7.4l1.1-1.6C433.5 260.8 427 182 377 132c-56.5-56.5-148-56.5-204.5 0L60.2 244.3z" />
            </svg>
            <span class="text-white text-lg font-bold">
                REFERENCE
            </span>
        </div>
        <div class="grid md:grid-cols-2 gap-4 mt-4">
            <div>
                <h3 class="font-bold text-lg">Dr. Md. Abdus Salam Akanda</h3>
                <p class="text-sm text-primary">Professor, Department of Mechanical Engineering, BUET.</p>
                <p><b>Phone:</b> 880-2-9665636 (office)</p>
                <p><b>Mobile:</b> +8801934-123047</p>
                <p class="text-sm"><b>Email:</b> masalamakanda@me.buet.ac.bd</p>
                <p><b>Relation:</b> UG Advisor</p>
            </div>
            <div>
                <h3 class="font-bold text-lg">Dr. Md. Zahangir Alam</h3>
                <p class="text-sm text-primary">Vice-Chancellor, Atish Dipankar University of Science and Technology (ADUST)
                    & Professor, Department of Applied Chemistry and Chemical Engineering
                    University of Dhaka. </p>
                <p><b>Mobile: </b> +8801711-577225</p>
                <p class="text-sm"><b>Email:</b> zahangir@du.ac.bd</p>
                <p><b>Relation:</b> Non-Relative </p>
            </div>
            <div>
                <h3 class="font-bold text-lg">Engr. Moshiur Rahman Joarder </h3>
                <p class="text-sm text-primary">Superintending Engineer, Dhaka Power Distribution Company Ltd.</p>
                <p><b>Mobile: </b> +8801711-577225</p>
                <p class="text-sm"><b>Email:</b> zahangir@du.ac.bd</p>
                <p><b>Relation:</b> Team Leader and Ex- Boss, ESPSN G2G Project, DPDC.</p>
            </div>
            <div>
                <h3 class="font-bold text-lg">Md. Saidur Rahman</h3>
                <p class="text-sm text-primary">Additional Secretary Health Services Division (Administration Wing) & World Health Wing Ministry of Health and Family Planning, GoB.</p>
                <p><b>Phone: </b> 55100282 (Office)</p>
                <p><b>Mobile: </b> +8801718-030258</p>
                <p class="text-sm"><b>Email:</b> adminwing@hsd.gov.bd / rahman.saidur66@gmail.com</p>
                <p><b>Address:</b> 16/1, Roots Aparajita, Lake Circus, Kalabagan, Dhaka.</p>
                <p><b>Relation:</b> Non-Relative </p>
            </div>
            <div>
                <h3 class="font-bold text-lg">Mohammad Kamrul Hasan </h3>
                <p class="text-sm text-primary">Joint Secretary, Cabinet Division (Planning and Budget Branch, Admin and Rules Wing) </p>
                <p><b>Phone: </b> 9514659 (Office),</p>
                <p><b>Mobile: </b> +8801711361356</p>
                <p><b>Fax: </b> 9514339</p>
                <p class="text-sm"><b>Email:</b>pbb@cabinet.gov.bd / mkhasan2003@gmail.com
                </p>
                <p><b>Address:</b> Flat-501, Building D, Grand Terrace (Shine Pukur) Apartment, 45 New Eskaton Road, Dhaka.</p>
                <p><b>Relation:</b> Non-Relative </p>
            </div>
        </div>
    </div>
</div>