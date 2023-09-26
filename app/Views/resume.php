<div class="mb-12">
    <div class="md:border-e border-b md:border-b-0 pb-6 md:pb-0 pe-4 flex-1">
        <h2 class="text-primary text-lg font-bold mb-4">
            Professional Experience
        </h2>
        <?php foreach ($professional_experience as $item) : ?>
            <!-- box -->
            <div>
                <span class="p-1 border border-primary text-xs rounded-sm text-primary"><?= $item['year'] ?></span>
                <h2 class="text-xl font-bold mt-2">
                    <?= $item['title'] ?>
                </h2>

                <div class="flex items-center text-sm text-slate-400">
                    <span><?= $item['company'] ?></span><img class=" w-9" src="./assets/image/<?= $item['company_logo'] ?>" alt="" />
                </div>

                <h3 class="text-base mt-2">
                    <span class="font-bold">Responsibilities:</span><?= $item['responsibilities'] ?><span></span>
                </h3>
            </div>
            <!--/box -->
        <?php endforeach ?>
    </div>
</div>
<!-- education -->
<h1 class="inline font-bold text-md border-b-2 border-primary">Academic Information</h1>
<div class="border-b mb-2 border-gray-200"></div>
<div class="flex-col flex md:flex-row gap-4 mb-12 mt-5">
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
<!-- skills -->
<h1 class="inline font-bold text-md border-b-2 border-primary">Skills</h1>
<div class="border-b mb-2 border-gray-200"></div>
<div class="flex-col flex md:flex-row gap-4 mb-12 mt-5">
    <div class="md:border-e border-b md:border-b-0 pb-6 md:pb-0 pe-4 flex-1">
        <h2 class="text-primary text-lg font-bold mb-4">
            Overall
        </h2>
        <?php foreach ($overall_skills as $item) : ?>
            <!-- box -->
            <div class="mb-1 text-base font-medium"><?= $item['skill_name'] ?></div>
            <div class="w-full bg-gray-200 rounded-full h-1.5 mb-4 dark:bg-gray-700">
                <div class="bg-primary h-1.5 rounded-full" style="width: <?= $item['skill_level'] ?>%"></div>
            </div>
            <!--/box -->
        <?php endforeach ?>

    </div>
    <div class="last:pe-0 flex-1">
        <h2 class="text-primary text-lg font-bold mb-4">
            Language
        </h2>
        <?php foreach ($language_skills as $item) : ?>
            <!-- box -->
            <div class="mb-1 text-base font-medium"><?= $item['skill_name'] ?></div>
            <div class="w-full bg-gray-200 rounded-full h-1.5 mb-4 dark:bg-gray-700">
                <div class="bg-primary h-1.5 rounded-full" style="width: <?= $item['skill_level'] ?>%"></div>
            </div>
            <!--/box -->
        <?php endforeach ?>

    </div>
</div>

<!-- reference -->
<h1 class="inline font-bold text-md border-b-2 border-primary">Reference</h1>
<div class="border-b mb-2 border-gray-200"></div>
<div class="grid md:grid-cols-2 gap-4 mb-12 mt-5">
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