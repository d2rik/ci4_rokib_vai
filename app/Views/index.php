<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <script src="<?= base_url('assets/js/typed.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.js') ?>"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '<?= $site_info['theme']['color'] ?>',
                    }
                }
            }
        }
    </script>
    <style>
        .r-animation {
            position: relative;
        }

        .r-animation::after,
        .r-animation::before {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }

        .r-animation::before {
            background-color: rgb(255, 255, 255);
            animation: typewriter 1s steps(14) forwards;
        }

        @keyframes typewriter {
            0% {
                left: 0%;
            }

            100% {
                left: 100%;
            }
        }
    </style>

    <title>Rokibul | <?= esc($page_title) ?></title>
</head>

<body style="font-family: 'Roboto', sans-serif">
    <div class="hidden md:block h-52 bg-no-repeat bg-cover bg-center" style="background-image: url(<?= base_url() . esc(src($site_info['banner_image'], 'banner/small')) ?>)"></div>
    <!-- box content -->
    <div class="xl:max-w-[1200px] mx-auto mt-0 md:mt-[-104px] bg-gray-200 md:px-4 md:pt-4 md:pb-8 rounded md:shadow-lg">
        <div class="md:mt-[-38px]">
            <!-- lg:w-[1010px] -->
            <header class="h-11 m-auto bg-primary px-4 md:rounded">
                <nav class="h-full w-full flex items-center justify-end lg:justify-center">
                    <div id="contentToToggle" class="hidden lg:block absolute top-0 lg:top-auto lg:left-auto left-0 bg-primary lg:bg-transparent z-50 px-4 h-screen lg:h-auto ">
                        <div class="flex justify-end items-center py-3 lg:hidden">
                            <div id="closeBtn" class="p-1 rounded-md bg-opacity-50">
                                <svg class="w-6 h-6 hover:text-red-400 hover:cursor-pointer text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
                                </svg>
                            </div>
                        </div>
                        <ul class="list-none flex flex-col lg:flex-row">
                            <li>
                                <a class=" <?= (esc($page_title) == 'Home') ? 'bg-white text-primary' : 'text-white'; ?> px-2 py-1 rounded block hover:bg-white hover:text-primary  text-xs" href="<?= base_url('/') ?>">
                                    Home</a>
                            </li>
                            <li>
                                <a class=" <?= (esc($page_title) == 'Academic information') ? 'bg-white text-primary' : 'text-white'; ?> px-2 py-1 rounded block hover:bg-white hover:text-primary  text-xs" href="<?= base_url('/academic_info') ?>">Academic Info</a>
                            </li>
                            <li>
                                <a class=" <?= (esc($page_title) == 'Test score and certifications') ? 'bg-white text-primary' : 'text-white'; ?> px-2 py-1 rounded block hover:bg-white hover:text-primary  text-xs" href="<?= base_url('/test_score_and_certifications') ?>">Test Scores & Certifications</a>
                            </li>
                            <li>
                                <a class=" <?= (esc($page_title) == 'Professional experience') ? 'bg-white text-primary' : 'text-white'; ?> px-2 py-1 rounded block hover:bg-white hover:text-primary  text-xs" href="<?= base_url('/professional_experience') ?>">Professional Experience</a>
                            </li>
                            <li>

                                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="<?= (esc($page_title) == 'Research and publications'||esc($page_title) == 'Research interest') ? 'bg-white text-primary' : 'text-white'; ?> inline-flex items-center px-2 py-1 rounded hover:bg-white hover:text-primary  text-xs" type="button">Research & Publications<svg class="w-2.5 h-2.5 ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
                                </button>

                                <!-- Dropdown menu -->
                                <div id="dropdown" class=" z-20 hidden absolute bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                        <li>
                                            <a href="<?= base_url('/research_and_publications') ?>" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Publications</a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('/research_interest') ?>" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Research Interest</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a class=" <?= (esc($page_title) == 'Teaching and mentoring') ? 'bg-white text-primary' : 'text-white'; ?> px-2 py-1 rounded block hover:bg-white hover:text-primary  text-xs" href="<?= base_url('/teaching_and_mentoring') ?>">Teaching & Mentoring</a>
                            </li>
                            <li>
                                <a class="<?= (esc($page_title) == 'Social Works') ? 'bg-white text-primary' : 'text-white'; ?> px-2 py-1 rounded block hover:bg-white hover:text-primary  text-xs" href="<?= base_url('/social_works') ?>">Social Works</a>
                            </li>
                            <li>
                                <a class=" <?= (esc($page_title) == 'Resume') ? 'bg-white text-primary' : 'text-white'; ?> px-2 py-1 rounded block hover:bg-white hover:text-primary  text-xs" href="<?= base_url('/resume') ?>">Resume</a>
                            </li>
                            <li>
                                <a class=" <?= (esc($page_title) == 'Others interest') ? 'bg-white text-primary' : 'text-white'; ?> px-2 py-1 rounded block hover:bg-white hover:text-primary  text-xs" href="<?= base_url('/others_interest') ?>">Other Interests</a>
                            </li>
                            <li>
                                <a class="<?= (esc($page_title) == 'Blog') ? 'bg-white text-primary' : 'text-white'; ?> px-2 py-1 rounded block hover:bg-white hover:text-primary  text-xs" href="<?= base_url('/blog') ?>">Blog</a>
                            </li>
                            <li>
                                <a class=" <?= (esc($page_title) == 'Contact me') ? 'bg-white text-primary' : 'text-white'; ?> px-2 py-1 rounded block hover:bg-white hover:text-primary  text-xs" href="<?= base_url('/contact_me') ?>">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div id="toggleButton" class="p-2 hover:cursor-pointer rounded lg:hidden">
                        <svg class="w-6 h-6 transform scale-x-[-1] hover:text-red-400 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h14M1 6h14M1 11h7" />
                        </svg>
                    </div>
                </nav>
            </header>
            <div class="flex flex-col md:flex-row md:items-start md:justify-center md:mt-6">
                <div class="<?= (esc($page_title) == "Home") ? "" : "hidden"; ?> lg:block relative md:w-[400px] min-h-[520px] border-solid border-primary border">
                    <div class="absolute w-full bottom-0">
                        <div class="absolute w-full bottom-0">
                            <div class="text-center">
                                <h1 class="text-3xl font-bold inline-block r-animation">
                                    <?= esc($site_info['name']) ?>
                                </h1>
                            </div>
                            <div>
                                <p class="mb-2 text-center">
                                    A <span class="text-primary" id="auto-type"></span>
                                </p>
                            </div>
                            <!-- icon -->
                            <div class="flex justify-center gap-2 mb-3">
                                <a class="bg-black hover:bg-blue-500 rounded p-1" href="<?= esc($site_info['link1']) ?>" target="_blank">
                                    <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                                        <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <a class="bg-black hover:bg-blue-500 rounded p-1" href="<?= esc($site_info['link3']) ?>" target="_blank">
                                    <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 15">
                                        <path fill-rule="evenodd" d="M7.979 5v1.586a3.5 3.5 0 0 1 3.082-1.574C14.3 5.012 15 7.03 15 9.655V15h-3v-4.738c0-1.13-.229-2.584-1.995-2.584-1.713 0-2.005 1.23-2.005 2.5V15H5.009V5h2.97ZM3 2.487a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" clip-rule="evenodd" />
                                        <path d="M3 5.012H0V15h3V5.012Z" />
                                    </svg>
                                </a>

                            </div>
                            <!-- button -->
                            <div class="relative bottom-[-24px] flex justify-around items-center">
                                <a href="<?= base_url('/contact_me') ?>" class="transition-all flex items-center justify-center gap-2 w-40 py-2 rounded-md border-primary bg-white text-primary shadow-md hover:shadow-primary border-2">
                                    Get CV
                                    <svg class="fill-primary" xmlns="http://www.w3.org/2000/svg" height="1.25em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path d="M64 464c-8.8 0-16-7.2-16-16V64c0-8.8 7.2-16 16-16H224v80c0 17.7 14.3 32 32 32h80V448c0 8.8-7.2 16-16 16H64zM64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V154.5c0-17-6.7-33.3-18.7-45.3L274.7 18.7C262.7 6.7 246.5 0 229.5 0H64zm56 256c-13.3 0-24 10.7-24 24s10.7 24 24 24H264c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24H264c13.3 0 24-10.7 24-24s-10.7-24-24-24H120z" />
                                    </svg>

                                </a>
                                <a href="<?= base_url('/contact_me') ?>" class="hover:mt-[-2px] transition-all flex items-center justify-center gap-2 w-40 py-2 rounded-md  bg-primary text-white shadow-md hover:shadow-primary ">
                                    Contact Me
                                    <svg class=" stroke-white" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.9313 16.2055C19.9313 16.53 19.8581 16.8635 19.7028 17.188C19.5474 17.5125 19.3463 17.8189 19.0812 18.1074C18.6333 18.5941 18.1397 18.9456 17.5822 19.171C17.0337 19.3963 16.4396 19.5135 15.7998 19.5135C14.8674 19.5135 13.8711 19.2972 12.82 18.8555C11.7688 18.4138 10.7177 17.819 9.67565 17.0708C8.6245 16.3137 7.62818 15.4754 6.67757 14.547C5.73611 13.6096 4.88604 12.6272 4.12738 11.5996C3.37786 10.5721 2.77459 9.54454 2.33585 8.52601C1.89711 7.49847 1.67773 6.51599 1.67773 5.57859C1.67773 4.96567 1.78742 4.37979 2.00679 3.83898C2.22616 3.28915 2.5735 2.7844 3.05795 2.33372C3.64294 1.76587 4.28277 1.48645 4.95917 1.48645C5.2151 1.48645 5.47103 1.54053 5.69954 1.64869C5.9372 1.75686 6.14743 1.9191 6.31196 2.15345L8.43255 5.10087C8.59708 5.32621 8.7159 5.53352 8.79817 5.73182C8.88043 5.9211 8.92613 6.11039 8.92613 6.28164C8.92613 6.49797 8.86215 6.71429 8.73418 6.9216C8.61536 7.12891 8.44169 7.34524 8.22232 7.56156L7.52764 8.27363C7.42709 8.37278 7.38139 8.48996 7.38139 8.63417C7.38139 8.70628 7.39053 8.76937 7.40881 8.84148C7.43623 8.91359 7.46366 8.96767 7.48194 9.02175C7.64647 9.3192 7.92982 9.70678 8.332 10.1755C8.74332 10.6442 9.18206 11.1219 9.65737 11.5996C10.151 12.0773 10.6263 12.519 11.1107 12.9246C11.586 13.3212 11.9791 13.5916 12.2898 13.7539C12.3355 13.7719 12.3904 13.7989 12.4544 13.826C12.5275 13.853 12.6006 13.862 12.6829 13.862C12.8383 13.862 12.9571 13.8079 13.0576 13.7088L13.7523 13.0328C13.9808 12.8074 14.2002 12.6362 14.4104 12.528C14.6206 12.4018 14.8309 12.3387 15.0594 12.3387C15.2331 12.3387 15.4159 12.3748 15.617 12.4559C15.8181 12.537 16.0283 12.6542 16.2568 12.8074L19.2823 14.9256C19.5199 15.0879 19.6845 15.2771 19.785 15.5025C19.8764 15.7278 19.9313 15.9532 19.9313 16.2055Z" stroke-width="1.5574" stroke-miterlimit="10" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <img class="w-full" src="<?= base_url('assets/image/shape.png') ?>" alt="" />
                    </div>
                    <img class="w-full" src="<?= base_url() . esc(src($site_info['profile_image'], 'profile/small')) ?>" loading="lazy" alt="" />
                </div>
                <section class="flex-1 bg-white <?= (esc($page_title) == "Home") ? "mt-8" : ""; ?>  md:mt-0 px-4 py-5 md:h-[519px] md:overflow-auto md:overflow-x-hidden">
                    <h1 class="inline font-bold text-base border-b-2 border-primary"><?= ($sub_title) ? "$sub_title" : ""; ?></h1>
                    <div class="border-b mb-2 border-gray-200"></div>
                    <!-- main content -->
                    <div class="mt-5">
                        <!-- main content here -->
                        <?= $main_content ?>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- footer -->
    <footer class="xl:w-[80%] mx-auto mt-4 md:p-4 p-2 bg-slate-300 md:bg-transparent">
        <ul class="list-none flex flex-wrap justify-center ">
            <?php foreach ($site_info['external_link'] as $item) : ?>
                <li>
                    <a class="group px-2 py-1 rounded flex items-center gap-1 font-bold text-primary " href="<?= $item['site_link'] ?>" target="_blank">
                        <span class="group-hover:text-primary"><?= $item['site_name'] ?></span>
                        <svg class="w-3 h-4 group-hover:text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                        </svg>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
        <div class="text-center">
            <a href="<?= base_url() . 'admin' ?>" class="text-xs mt-2">© <?= $site_info['name'] ?> , 2023</a>
        </div>
    </footer>
    <script>
        $(document).ready(function() {
            $("#toggleButton").click(function() {
                $("#contentToToggle").toggle(); // Toggle the visibility of the element
            });
            $("#closeBtn").click(function() {
                $("#contentToToggle").hide(); // Toggle the visibility of the element
            });
        });
    </script>
    <script>
        let typed = new Typed("#auto-type", {
            strings: [
                <?php
                $array = explode(',', $site_info['designation']);

                // Enclose each element in double quotes
                $quotedArray = array_map(function ($element) {
                    return '"' . $element . '"';
                }, $array);

                // Use implode to join the elements with a comma
                $string = implode(", ", $quotedArray);
                echo $string;
                ?>
            ],
            typeSpeed: 100,
            backSpeed: 100,
            loop: true,
        });
    </script>

</body>

</html>