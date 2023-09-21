<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />
    <script>
        tailwind.config = {
            theme: {
                extend: {},
            },
        };
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
    <title>Rokibul | <?= $page_title ?></title>
</head>

<body style="font-family: 'Roboto', sans-serif">
    <div class="hidden md:block h-52 bg-no-repeat bg-cover bg-center" style="background-image: url(<?= base_url('assets/image/') . $site_info['banner_image'] ?>)"></div>
    <!-- box content -->
    <div class="xl:max-w-[1200px] mx-auto mt-0 md:mt-[-104px] bg-gray-200 md:px-4 md:pt-4 md:pb-8 rounded md:shadow-lg">
        <div class="md:mt-[-38px]">
            <header class="h-11 lg:w-[988px] m-auto bg-sky-600 px-4 md:rounded">
                <nav class="h-full w-full flex items-center justify-end lg:justify-center">
                    <div id="contentToToggle" class="hidden lg:block absolute top-0 lg:top-auto lg:left-auto left-0 bg-sky-700 lg:bg-transparent z-50 px-4 h-screen lg:h-auto overflow-x-hidden overflow-auto">
                        <div class="flex justify-end items-center py-3 lg:hidden">
                            <div id="closeBtn" class="p-1 rounded-md hover:bg-black bg-opacity-50">
                                <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
                                </svg>
                            </div>
                        </div>
                        <ul class="list-none flex flex-col lg:flex-row">
                            <li>
                                <a class=" <?= ($page_title == 'Home') ? 'bg-white text-sky-600' : 'text-white'; ?> px-2 py-1 rounded block hover:bg-white hover:text-sky-600 text-sm" href="<?= base_url('/') ?>">
                                    Home</a>
                            </li>
                            <li>
                                <a class=" <?= ($page_title == 'Academic information') ? 'bg-white text-sky-600' : 'text-white'; ?> px-2 py-1 rounded block hover:bg-white hover:text-sky-600 text-sm" href="<?= base_url('/academic_info') ?>">Academic Info</a>
                            </li>
                            <li>
                                <a class=" <?= ($page_title == 'Professional experience') ? 'bg-white text-sky-600' : 'text-white'; ?> px-2 py-1 rounded block hover:bg-white hover:text-sky-600 text-sm" href="<?= base_url('/professional_experience') ?>">Professional Experience</a>
                            </li>
                            <li>
                                <a class="<?= ($page_title == 'Research and publications') ? 'bg-white text-sky-600' : 'text-white'; ?> px-2 py-1 rounded block hover:bg-white hover:text-sky-600 text-sm" href="<?= base_url('/research_and_publications') ?>">Research and Publications</a>
                            </li>
                            <li>
                                <a class="px-2 py-1 rounded block hover:bg-white hover:text-sky-600 text-white text-sm" href="">Teaching and Mentoring</a>
                            </li>
                            <li>
                                <a class="px-2 py-1 rounded block hover:bg-white hover:text-sky-600 text-white text-sm" href="">Social Works</a>
                            </li>
                            <li>
                                <a class="px-2 py-1 rounded block hover:bg-white hover:text-sky-600 text-white text-sm" href="">Resume</a>
                            </li>
                            <li>
                                <a class="<?= ($page_title == 'Blog') ? 'bg-white text-sky-600' : 'text-white'; ?> px-2 py-1 rounded block hover:bg-white hover:text-sky-600 text-sm" href="<?= base_url('/blog') ?>">Blog</a>
                            </li>
                            <li>
                                <a class=" <?= ($page_title == 'Contact me') ? 'bg-white text-sky-600' : 'text-white'; ?> px-2 py-1 rounded block hover:bg-white hover:text-sky-600 text-sm" href="<?= base_url('/contact_me') ?>">Contact</a>
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
                <div class="hidden lg:block relative md:min-w-[400px] min-h-[520px] border-solid border-sky-700 border">
                    <div class="absolute w-full bottom-0">
                        <div class="absolute w-full bottom-0">
                            <div class="text-center">
                                <h1 class="text-3xl font-bold inline-block r-animation">
                                    <?= $site_info['name'] ?>
                                </h1>
                            </div>
                            <div>
                                <p class="mb-2 text-center">
                                    A <span class="text-sky-600" id="auto-type"></span>
                                </p>
                            </div>
                            <!-- icon -->
                            <div class="flex justify-center gap-2 mb-3">

                                <a class="bg-black hover:bg-blue-500 rounded p-1" href="<?= $site_info['link1'] ?>" target="_blank">
                                    <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                                        <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <a class="bg-black hover:bg-blue-400 rounded p-1" href="<?= $site_info['link2'] ?>" target="_blank">
                                    <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path fill="currentColor" d="M12.186 8.672 18.743.947h-2.927l-5.005 5.9-4.44-5.9H0l7.434 9.876-6.986 8.23h2.927l5.434-6.4 4.82 6.4H20L12.186 8.672Zm-2.267 2.671L8.544 9.515 3.2 2.42h2.2l4.312 5.719 1.375 1.828 5.731 7.613h-2.2l-4.699-6.237Z" />
                                    </svg>
                                </a>
                                <a class="bg-black hover:bg-blue-500 rounded p-1" href="<?= $site_info['link3'] ?>" target="_blank">
                                    <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 15">
                                        <path fill-rule="evenodd" d="M7.979 5v1.586a3.5 3.5 0 0 1 3.082-1.574C14.3 5.012 15 7.03 15 9.655V15h-3v-4.738c0-1.13-.229-2.584-1.995-2.584-1.713 0-2.005 1.23-2.005 2.5V15H5.009V5h2.97ZM3 2.487a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" clip-rule="evenodd" />
                                        <path d="M3 5.012H0V15h3V5.012Z" />
                                    </svg>
                                </a>

                            </div>
                            <!-- button -->
                            <div class="relative bottom-[-24px] flex justify-around">
                                <button class="flex items-center justify-center gap-2 w-40 py-2 rounded-md border-sky-600 bg-white text-sky-600 shadow-md shadow-sky-200 border-2">
                                    Download CV <img src="<?= base_url('assets/icon/download.svg') ?>" alt="" />
                                </button>
                                <a href="/contact_me" class="flex items-center justify-center gap-2 w-40 py-2 rounded-md bg-sky-600 text-white shadow-md shadow-sky-200">
                                    Contact Me
                                    <img class="" src="<?= base_url('assets/icon/call.svg') ?>" alt="" />
                                </a>
                            </div>
                        </div>
                        <img class="w-full" src="<?= base_url('assets/image/shape.png') ?>" alt="" />
                    </div>
                    <img class="w-full" src="<?= base_url('assets/image/') . $site_info['profile_image'] ?>" loading="lazy" alt="" />
                </div>
                <section class="bg-white md:mt-0 px-4 py-5 md:h-[519px] md:overflow-auto md:overflow-x-hidden">
                    <h1 class="inline font-bold text-md border-b-2 border-sky-600"><?= $sub_title ?></h1>
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
    <footer class="xl:w-[80%] mx-auto mt-11 md:p-4 p-2 bg-slate-300 md:bg-transparent">
        <ul class="list-none flex flex-wrap justify-center ">
            <li>
                <a class="group px-2 py-1 rounded flex items-center gap-1 text-xs " href="" target="_blank">
                    <span class="group-hover:text-sky-600">Link</span>
                    <svg class="w-2 h-2 group-hover:text-sky-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                    </svg>
                </a>
            </li>
            <li>
                <a class="group px-2 py-1 rounded flex items-center gap-1 text-xs " href="" target="_blank">
                    <span class="group-hover:text-sky-600">Link</span>
                    <svg class="w-2 h-2 group-hover:text-sky-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                    </svg>
                </a>
            </li>
            <li>
                <a class="group px-2 py-1 rounded flex items-center gap-1 text-xs " href="" target="_blank">
                    <span class="group-hover:text-sky-600">Link</span>
                    <svg class="w-2 h-2 group-hover:text-sky-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                    </svg>
                </a>
            </li>
            <li>
                <a class="group px-2 py-1 rounded flex items-center gap-1 text-xs " href="" target="_blank">
                    <span class="group-hover:text-sky-600">Link</span>
                    <svg class="w-2 h-2 group-hover:text-sky-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                    </svg>
                </a>
            </li>
            <li>
                <a class="group px-2 py-1 rounded flex items-center gap-1 text-xs " href="" target="_blank">
                    <span class="group-hover:text-sky-600">Link</span>
                    <svg class="w-2 h-2 group-hover:text-sky-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                    </svg>
                </a>
            </li>
            <li>
                <a class="group px-2 py-1 rounded flex items-center gap-1 text-xs " href="" target="_blank">
                    <span class="group-hover:text-sky-600">Link</span>
                    <svg class="w-2 h-2 group-hover:text-sky-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                    </svg>
                </a>
            </li>
            <li>
                <a class="group px-2 py-1 rounded flex items-center gap-1 text-xs " href="" target="_blank">
                    <span class="group-hover:text-sky-600">Link</span>
                    <svg class="w-2 h-2 group-hover:text-sky-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                    </svg>
                </a>
            </li>
            
        </ul>
        <div>
            <p class="text-xs text-center mt-2">© Rokibul islam , 2023</p>
        </div>
    </footer>
    <script src="<?= base_url('assets/js/typed.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.js') ?>"></script>
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