<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script src="<?= base_url('assets/js/typed.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.js') ?>"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>"> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
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
    <div id="preLoader" class="h-screen w-full fixed z-50 " style="background: #cbd5e0 url(<?= base_url('assets/icon/loader.gif') ?>) no-repeat center center"></div>
    <div class="hidden md:block h-52 bg-no-repeat bg-cover bg-center" style="background-image: url(<?= base_url('assets/image/') . esc($site_info['banner_image']) ?>)"></div>
    <!-- box content -->
    <div class="xl:max-w-[1200px] mx-auto mt-0 md:mt-[-104px] bg-gray-200 md:px-4 md:pt-4 md:pb-8 rounded md:shadow-lg">
        <div class="md:mt-[-38px]">
            <header class="h-11 lg:w-[1010px] m-auto bg-primary px-4 md:rounded">
                <nav class="h-full w-full flex items-center justify-end lg:justify-center">
                    <div id="contentToToggle" class="hidden lg:block absolute top-0 lg:top-auto lg:left-auto left-0 bg-primary lg:bg-transparent z-40 px-4 h-screen lg:h-auto overflow-x-hidden overflow-auto">
                        <div class="flex justify-end items-center py-3 lg:hidden">
                            <div id="closeBtn" class="p-1 rounded-md bg-opacity-50">
                                <svg class="w-6 h-6 hover:text-red-400 hover:cursor-pointer text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
                                </svg>
                            </div>
                        </div>
                        <ul class="list-none flex gap-1 flex-col lg:flex-row">
                            <li>
                                <a class=" <?= (esc($page_title) == 'Home') ? 'bg-white text-primary' : 'text-white'; ?> px-2 py-1 rounded block hover:bg-white hover:text-primary text-sm" href="<?= base_url('/') ?>">
                                    Home</a>
                            </li>
                            <li>
                                <a class=" <?= (esc($page_title) == 'Academic information') ? 'bg-white text-primary' : 'text-white'; ?> px-2 py-1 rounded block hover:bg-white hover:text-primary text-sm" href="<?= base_url('/academic_info') ?>">Academic Info</a>
                            </li>
                            <li>
                                <a class=" <?= (esc($page_title) == 'Professional experience') ? 'bg-white text-primary' : 'text-white'; ?> px-2 py-1 rounded block hover:bg-white hover:text-primary text-sm" href="<?= base_url('/professional_experience') ?>">Professional Experience</a>
                            </li>
                            <li>
                                <a class="<?= (esc($page_title) == 'Research and publications') ? 'bg-white text-primary' : 'text-white'; ?> px-2 py-1 rounded block hover:bg-white hover:text-primary text-sm" href="<?= base_url('/research_and_publications') ?>">Research and Publications</a>
                            </li>
                            <li>
                                <a class="px-2 py-1 rounded block hover:bg-white hover:text-primary text-white text-sm" href="">Teaching and Mentoring</a>
                            </li>
                            <li>
                                <a class="px-2 py-1 rounded block hover:bg-white hover:text-primary text-white text-sm" href="">Social Works</a>
                            </li>
                            <li>
                                <a class=" <?= (esc($page_title) == 'Resume') ? 'bg-white text-primary' : 'text-white'; ?> px-2 py-1 rounded block hover:bg-white hover:text-primary text-sm" href="<?= base_url('/resume') ?>">Resume</a>
                            </li>
                            <li>
                                <a class="<?= (esc($page_title) == 'Blog') ? 'bg-white text-primary' : 'text-white'; ?> px-2 py-1 rounded block hover:bg-white hover:text-primary text-sm" href="<?= base_url('/blog') ?>">Blog</a>
                            </li>
                            <li>
                                <a class=" <?= (esc($page_title) == 'Contact me') ? 'bg-white text-primary' : 'text-white'; ?> px-2 py-1 rounded block hover:bg-white hover:text-primary text-sm" href="<?= base_url('/contact_me') ?>">Contact</a>
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
                                <a class="bg-black hover:bg-blue-400 rounded p-1" href="<?= esc($site_info['link2']) ?>" target="_blank">
                                    <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path fill="currentColor" d="M12.186 8.672 18.743.947h-2.927l-5.005 5.9-4.44-5.9H0l7.434 9.876-6.986 8.23h2.927l5.434-6.4 4.82 6.4H20L12.186 8.672Zm-2.267 2.671L8.544 9.515 3.2 2.42h2.2l4.312 5.719 1.375 1.828 5.731 7.613h-2.2l-4.699-6.237Z" />
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
                                <a href="<?= base_url('assets/rokibul_islam_cv.pdf') ?>" class="transition-all flex items-center justify-center gap-2 w-40 py-2 rounded-md border-primary bg-white text-primary shadow-md hover:shadow-primary border-2">
                                    Download CV
                                    <svg class="fill-primary" width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.97297 13.814C6.88833 13.814 6.81215 13.7972 6.7275 13.7637C6.4905 13.6717 6.33813 13.4372 6.33813 13.1861V8.16282C6.33813 7.81956 6.62593 7.53491 6.97297 7.53491C7.32002 7.53491 7.60781 7.81956 7.60781 8.16282V11.6707L8.21726 11.0679C8.46273 10.8251 8.86903 10.8251 9.1145 11.0679C9.35997 11.3107 9.35997 11.7126 9.1145 11.9554L7.42159 13.6298C7.30309 13.747 7.1338 13.814 6.97297 13.814Z" />
                                        <path d="M6.9726 13.8139C6.81177 13.8139 6.65095 13.7553 6.52398 13.6297L4.83108 11.9553C4.5856 11.7125 4.5856 11.3106 4.83108 11.0678C5.07655 10.825 5.48284 10.825 5.72832 11.0678L7.42122 12.7423C7.66669 12.985 7.66669 13.3869 7.42122 13.6297C7.29425 13.7553 7.13343 13.8139 6.9726 13.8139Z" />
                                        <path d="M12.0518 18H6.97309C2.37685 18 0.413086 16.0577 0.413086 11.5116V6.48837C0.413086 1.94233 2.37685 0 6.97309 0H11.2053C11.5524 0 11.8402 0.284651 11.8402 0.627907C11.8402 0.971163 11.5524 1.25581 11.2053 1.25581H6.97309C3.07095 1.25581 1.68276 2.62884 1.68276 6.48837V11.5116C1.68276 15.3712 3.07095 16.7442 6.97309 16.7442H12.0518C15.9539 16.7442 17.3421 15.3712 17.3421 11.5116V7.32558C17.3421 6.98233 17.6299 6.69767 17.977 6.69767C18.324 6.69767 18.6118 6.98233 18.6118 7.32558V11.5116C18.6118 16.0577 16.648 18 12.0518 18Z" />
                                        <path d="M17.977 7.95373H14.5912C11.6963 7.95373 10.5706 6.84023 10.5706 3.97697V0.628136C10.5706 0.376973 10.7229 0.142555 10.9599 0.0504616C11.1969 -0.0500035 11.4678 0.00860108 11.654 0.184415L18.4256 6.88209C18.6034 7.0579 18.6626 7.33419 18.5611 7.56861C18.4595 7.80303 18.2309 7.95373 17.977 7.95373ZM11.8402 2.14348V3.97697C11.8402 6.13697 12.4074 6.6979 14.5912 6.6979H16.4449L11.8402 2.14348Z" />
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
                    <img class="w-full" src="<?= base_url('assets/image/') . esc($site_info['profile_image']) ?>" loading="lazy" alt="" />
                </div>
                <section class="flex-1 bg-white <?= (esc($page_title) == "Home") ? "mt-8" : ""; ?>  md:mt-0 px-4 py-5 md:h-[519px] md:overflow-auto md:overflow-x-hidden">
                    <h1 class="inline font-bold text-md border-b-2 border-primary"><?= $sub_title ?></h1>
                    <div class="border-b mb-2 border-gray-200"></div>
                    <!-- main content -->
                    <div class="mt-5">
                        <?php if (session()->getFlashdata('success_alert')) : ?>
                            <div id="alert-border-3" class="flex items-center p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800" role="alert">
                                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                </svg>
                                <div class="ml-3 text-sm font-medium">
                                    <?= session()->getFlashdata('success_alert') ?>
                                </div>
                                <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-border-3" aria-label="Close">
                                    <span class="sr-only">Dismiss</span>
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                </button>
                            </div>
                        <?php elseif (session()->getFlashdata('danger_alert')) : ?>
                            <div id="alert-border-2" class="flex items-center p-4 mb-4 text-red-800 border-t-4 border-red-300 bg-red-50 dark:text-red-400 dark:bg-gray-800 dark:border-red-800" role="alert">
                                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                </svg>
                                <div class="ml-3 text-sm font-medium">
                                    <?= session()->getFlashdata('danger_alert') ?>
                                </div>
                                <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-border-2" aria-label="Close">
                                    <span class="sr-only">Dismiss</span>
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                </button>
                            </div>
                        <?php endif ?>
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
            <?php foreach ($site_info['external_link'] as $item) : ?>
                <li>
                    <a class="group px-2 py-1 rounded flex items-center gap-1 text-xs " href="<?= $item['site_link'] ?>" target="_blank">
                        <span class="group-hover:text-primary"><?= $item['site_name'] ?></span>
                        <svg class="w-2 h-2 group-hover:text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                        </svg>
                    </a>
                </li>
            <?php endforeach ?>
            <li>
                <a class="group px-2 py-1 rounded flex items-center gap-1 text-xs " href="<?= base_url() . 'admin' ?>">
                    <span class="group-hover:text-primary">Admin</span>
                </a>
            </li>
        </ul>
        <div>
            <p class="text-xs text-center mt-2">© <?= $site_info['name'] ?> , 2023</p>
        </div>
    </footer>
    <script>
        $(document).ready(function() {
            $(window).on('load', function() {
                $('#preLoader').hide();
            });
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