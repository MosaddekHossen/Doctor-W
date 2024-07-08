<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php if (is_singular() && pings_open(get_queried_object())) : ?>
    <?php endif; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
</head>

<body>
    <!-- Start header part  -->
    <header>
        <img class="absolute" src="<?php echo get_template_directory_uri(); ?>/assets/img/Vector.svg" alt="" />
        <nav class="navbar lg:py-12 py-8 md:px-8 px-6 xl:px-0">
            <div class="navbar-container container">
                <input type="checkbox" name="" id="" />
                <div class="hamburger-lines">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                </div>
                <ul class="menu-items">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Appointment</a></li>
                    <li><a href="#">Login</a></li>
                </ul>
                <div class="logo flex justify-center items-center z-20 lg:z-0 font-bold">
                    <svg xmlns="http://www.w3.org/2000/svg" width="62" height="62" viewBox="0 0 62 62" fill="none">
                        <path d="M59.9292 19.1854C58.7225 17.9788 57.0333 17.2146 55.1831 17.2146C52.2872 17.2146 49.6326 16.0481 47.7422 14.1175C45.8518 12.2272 44.6452 9.57258 44.6452 6.67667C44.6452 2.97635 41.6689 0 37.9685 0H23.8912C22.0411 0 20.3518 0.764198 19.1452 1.97083C17.9385 3.17745 17.1743 4.86673 17.1743 6.71689C17.1743 12.5489 12.4685 17.2548 6.63645 17.2548C3.01657 17.2146 0 20.1909 0 23.8912V37.9685C0 41.6689 3.01657 44.6452 6.67667 44.6452C9.57258 44.6452 12.2272 45.8116 14.1175 47.7422C16.0079 49.6326 17.2146 52.2872 17.2146 55.1831C17.2146 58.8834 20.1909 61.8598 23.8912 61.8598H37.9685C39.8187 61.8598 41.508 61.0956 42.7146 59.8889C43.9212 58.6823 44.6854 56.993 44.6854 55.1429C44.6854 52.247 45.8518 49.5924 47.7825 47.702C49.6728 45.8116 52.3274 44.605 55.2233 44.605C58.9236 44.605 61.9 41.5884 61.9 37.9283V23.851C61.9 22.0411 61.1358 20.392 59.9292 19.1854ZM30.9299 46.8172C22.1617 46.8172 15.0828 39.698 15.0828 30.9701C15.0828 22.2019 22.2019 15.1231 30.9299 15.1231C39.6578 15.1231 46.7769 22.2422 46.7769 30.9701C46.8172 39.698 39.698 46.8172 30.9299 46.8172Z" fill="white" />
                        <path d="M31.0506 44.4836C38.4694 44.4836 44.4836 38.4694 44.4836 31.0506C44.4836 23.6317 38.4694 17.6176 31.0506 17.6176C23.6317 17.6176 17.6176 23.6317 17.6176 31.0506C17.6176 38.4694 23.6317 44.4836 31.0506 44.4836Z" fill="#F7A582" />
                        <path d="M38.4519 29.4285V32.7129C38.4519 33.508 37.795 34.1649 36.9998 34.1649H34.1649V36.9999C34.1649 37.795 33.508 38.4519 32.7128 38.4519H29.4284C28.6333 38.4519 27.9764 37.795 27.9764 36.9999V34.1649H25.1414C24.3463 34.1649 23.6894 33.508 23.6894 32.7129V29.4285C23.6894 28.6333 24.3463 27.9764 25.1414 27.9764H27.9764V25.1415C27.9764 24.3463 28.6333 23.6895 29.4284 23.6895H32.7128C33.508 23.6895 34.1649 24.3463 34.1649 25.1415V27.9764H36.9998C37.795 27.9764 38.4519 28.6333 38.4519 29.4285Z" fill="white" />
                    </svg>
                    <span class="px-2 text-[35px] text-[#F7A582] font-source font-bold">
                        Doc
                    </span>
                    <span class="text-[35px] font-source text-white font-bold">
                        House
                    </span>
                </div>
            </div>
        </nav>
    </header>
    <!-- Start header part  -->
    <main>
        <!-- Start Banner part -->
        <div class="bg-[#07332F]">
            <div class="lg:h-[calc(100vh-160px)] h-[calc(100vh-128px)] text-white max-w-custom md:px-14 xl:px-0 mx-auto flex flex-col lg:flex-row items-center">
                <div class="flex-1">
                    <div class="relative px-7 md:px-0">
                        <h1 class="lg:text-[75px] md:text-5xl text-[30px] lg:leading-[90px] text-center lg:tracking-[-3px] lg:text-left font-semibold text-[#F3F3F3]">
                            Your Best Medical Help Center
                        </h1>
                        <div class="hidden lg:block">
                            <img class="right-[-155px] -top-[65px] absolute" src="<?php echo get_template_directory_uri(); ?>/assets/img/up.png" alt="" />
                            <img class="right-[-90px] top-0 absolute" src="<?php echo get_template_directory_uri(); ?>/assets/img/down.png" alt="" />
                        </div>
                    </div>
                    <p class="text-[#F3F3F3] md:text-base px-7 md:px-0 text-sm text-center lg:text-left py-4">
                        Lorem Ipsum is simply dummy text they are printing typesetting has
                        been the industry`s standard.
                    </p>
                    <div class="text-[#F3F3F3] text-center lg:text-left">
                        <button class="bg-[#F7A582] py-3 px-8 font-bold font-source rounded-lg">
                            All Service
                        </button>
                    </div>
                </div>
                <div class="flex-1 relative">
                    <div class="bg-[#F7A58233] hidden lg:block opacity-90 absolute left-1/3 -top-8 w-[350px] h-[350px] rounded-full"></div>
                    <img class="h-full w-full opacity-100 relative object-cover md:px-40 pt-2 px-8 lg:p-9" src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-image.png" alt="Banner Image" />
                    <div class="-ml-8 bottom-12 absolute w-36 h-16">
                        <img class="object-cover" src="<?php echo get_template_directory_uri(); ?>/assets/img/capsul.png" alt="SVG" />
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner part -->
    </main>