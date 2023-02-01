<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        {{-- Meta Open Graph --}}

        <title>DevMushref - Personal Portfolio</title>

        {{-- Google fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;500;600;700;800;900&family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300&display=swap" rel="stylesheet">

        {{-- Plugins css --}}
        <link rel="stylesheet" href="{{ URL::asset('css/mobilemenu.css') }}">
        {{-- <link rel="stylesheet" href="./assets/css/glightbox.min.css" /> --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
        {{-- Tailwind css --}}
        <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">

        <script>
            // On page load or when changing themes, best to add inline in `head` to avoid FOUC
            if (localStorage.getItem("theme-color") === "dark" || (!("theme-color" in localStorage) && window.matchMedia(
                    "(prefers-color-scheme: dark)").matches)) {
                document.documentElement.classList.add("dark");
                document.getElementById("light__to--dark")?.classList.add("dark--version");
            }
            if (localStorage.getItem("theme-color") === "light") {
                document.documentElement.classList.remove("dark");
                document.getElementById("light__to--dark")?.classList.remove("dark--version");
            }
        </script>
    </head>

    <body class="font-rubik dark:bg-dark_primary_bg">
        {{-- Preloader start --}}
        <div id="preloader">
            <div class="loader--border"></div>
        </div>
        {{-- Preloader end --}}

        {{-- Dark and light button start --}}
        <div class="fixed ltr:right-0 rtl:left-0 top-[50%] translate-y-[-50%] z-50">
            <button class="bg-accent1 w-[50px] h-[50px] text-white flex justify-center items-center rounded-lg ltr:rounded-tr-none ltr:rounded-br-none rtl:rounded-tl-none rtl:rounded-bl-none"
                id="light__to--dark">
                <svg xmlns="http://www.w3.org/2000/svg" class="dark--mode__icon ionicon max-w-[25px] fill-white"
                    viewBox="0 0 512 512">
                    <title>Moon</title>
                    <path d="M264 480A232 232 0 0132 248c0-94 54-178.28 137.61-214.67a16 16 0 0121.06 21.06C181.07 76.43 176 104.66 176 136c0 110.28 89.72 200 200 200 31.34 0 59.57-5.07 81.61-14.67a16 16 0 0121.06 21.06C442.28 426 358 480 264 480z" />
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" class="light--mode__icon ionicon max-w-[25px] fill-white"
                    viewBox="0 0 512 512">
                    <title>Sunny</title>
                    <path d="M256 118a22 22 0 01-22-22V48a22 22 0 0144 0v48a22 22 0 01-22 22zM256 486a22 22 0 01-22-22v-48a22 22 0 0144 0v48a22 22 0 01-22 22zM369.14 164.86a22 22 0 01-15.56-37.55l33.94-33.94a22 22 0 0131.11 31.11l-33.94 33.94a21.93 21.93 0 01-15.55 6.44zM108.92 425.08a22 22 0 01-15.55-37.56l33.94-33.94a22 22 0 1131.11 31.11l-33.94 33.94a21.94 21.94 0 01-15.56 6.45zM464 278h-48a22 22 0 010-44h48a22 22 0 010 44zM96 278H48a22 22 0 010-44h48a22 22 0 010 44zM403.08 425.08a21.94 21.94 0 01-15.56-6.45l-33.94-33.94a22 22 0 0131.11-31.11l33.94 33.94a22 22 0 01-15.55 37.56zM142.86 164.86a21.89 21.89 0 01-15.55-6.44l-33.94-33.94a22 22 0 0131.11-31.11l33.94 33.94a22 22 0 01-15.56 37.55zM256 358a102 102 0 11102-102 102.12 102.12 0 01-102 102z" />
                </svg>
            </button>

        </div>
        {{-- Dark and light button end --}}

        {{-- Header area start --}}
        <header class="absolute w-full left-0 top-0">
            <div class="header__sticky py-5">
                <div class="container mx-auto">
                    <div class="flex justify-between items-center">
                        <div class="logo">
                            <a href="/">
                                <img class="hidden dark:block" src="{{ asset('images/logo-light.png') }}" alt="">
                                <img class="dark:hidden" src="{{ asset('images/logo.png') }}" alt="">
                            </a>
                        </div>
                        <div class="flex items-center md:hidden">
                            <nav>
                                <ul class="flex items-center">
                                    <li>
                                        <a href="#home"
                                            class="text-[17px] xl:text-[19px] text-primary dark:text-white font-medium hover:text-accent1 dark:hover:text-accent1 transition duration-300 relative after:absolute after:content-[''] after:h-[2px] after:w-0 after:bottom-[3px] ltr:after:left-0 rtl:after:right-0 after:transition-[.5s] after:bg-accent1 py-[8px] hover:after:w-full">Home</a>
                                    </li>
                                    <li>
                                        <a href="#about"
                                            class="text-[17px] xl:text-[19px] text-primary dark:text-white font-medium hover:text-accent1 dark:hover:text-accent1 transition duration-300 ltr:ml-[26px] ltr:xl:ml-[44px] rtl:mr-[26px] rtl:xl:mr-[44px] relative after:absolute after:content-[''] after:h-[2px] after:w-0 after:bottom-[3px] ltr:after:left-0 rtl:after:right-0 after:transition-[.5s] after:bg-accent1 py-[8px] hover:after:w-full">About</a>
                                    </li>
                                    </li>
                                    <li>
                                        <a href="#services"
                                            class="text-[17px] xl:text-[19px] text-primary dark:text-white font-medium hover:text-accent1 dark:hover:text-accent1 transition duration-300 ltr:ml-[26px] ltr:xl:ml-[44px] rtl:mr-[26px] rtl:xl:mr-[44px] relative after:absolute after:content-[''] after:h-[2px] after:w-0 after:bottom-[3px] ltr:after:left-0 rtl:after:right-0 after:transition-[.5s] after:bg-accent1 py-[8px] hover:after:w-full">Services</a>
                                    </li>
                                    <li>
                                        <a href="#portfolio"
                                            class="text-[17px] xl:text-[19px] text-primary dark:text-white font-medium hover:text-accent1 dark:hover:text-accent1 transition duration-300 ltr:ml-[26px] ltr:xl:ml-[44px] rtl:mr-[26px] rtl:xl:mr-[44px] relative after:absolute after:content-[''] after:h-[2px] after:w-0 after:bottom-[3px] ltr:after:left-0 rtl:after:right-0 after:transition-[.5s] after:bg-accent1 py-[8px] hover:after:w-full">Portfolio</a>
                                    </li>
                                    <li>
                                        <a href="#blog"
                                            class="text-[17px] xl:text-[19px] text-primary dark:text-white font-medium hover:text-accent1 dark:hover:text-accent1 transition duration-300 ltr:ml-[26px] ltr:xl:ml-[44px] rtl:mr-[26px] rtl:xl:mr-[44px] relative after:absolute after:content-[''] after:h-[2px] after:w-0 after:bottom-[3px] ltr:after:left-0 rtl:after:right-0 after:transition-[.5s] after:bg-accent1 py-[8px] hover:after:w-full">Blog</a>
                                    </li>
                                    <li><a href="#contact"
                                            class="text-[17px] xl:text-[19px] text-primary dark:text-white font-medium hover:text-accent1 dark:hover:text-accent1 transition duration-300 ltr:ml-[26px] ltr:xl:ml-[44px] rtl:mr-[26px] rtl:xl:mr-[44px] relative after:absolute after:content-[''] after:h-[2px] after:w-0 after:bottom-[3px] ltr:after:left-0 rtl:after:right-0 after:transition-[.5s] after:bg-accent1 py-[8px] hover:after:w-full">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                            <button class="flex bg-accent1 lg:px-[15px] px-[12px] xl:py-[12px] py-[10px] rounded-[2rem] text-[16px] xl:text-[18px] font-medium text-white items-center ltr:ml-[32px] rtl:mr-[32px] transition duration-300 relative after:absolute :after:content-[''] after:bg-primary after:h-full after:w-full after:bottom-0 after:left-0 after:rounded-[2rem] after:trasition after:duration-300 after:opacity-0 hover:after:opacity-[1]">
                                <span class="icon bg-[#EFEBEB] text-accent1 w-[34px] h-[34px] rounded-full flex items-center justify-center ltr:xl:mr-[15px] ltr:mr-[10px] rtl:xl:ml-[15px] rtl:ml-[10px] relative z-[8] flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-download">
                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                        <polyline points="7 10 12 15 17 10"></polyline>
                                        <line x1="12" y1="15" x2="12" y2="3"></line>
                                    </svg>
                                </span>
                                <span class="ltr:xl:pr-[5px] ltr:lg:pr-[5px] rtl:xl:pl-[5px] rtl:lg:pl-[5px] relative z-[8] flex-shrink-0">
                                    <a href="{{ URL::asset('downloadable/Abdulrahman_Mushref_Resume.docx') }}" download>Download CV</a>
                                </span>
                            </button>
                        </div>
                        <div class="lg:hidden">
                            <button class="offcanvas__header--menu__open--btn text-primary dark:text-white " data-offcanvas>
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-menu">
                                    <line x1="3" y1="12" x2="21" y2="12"></line>
                                    <line x1="3" y1="6" x2="21" y2="6"></line>
                                    <line x1="3" y1="18" x2="21" y2="18"></line>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                {{-- Start Offcanvas header menu --}}
                <div class="offcanvas__header lg:hidden dark:bg-gray-800">
                    <div class="offcanvas__inner">
                        <div class="offcanvas__logo">
                            <a class="offcanvas__logo_link" href="index.html">
                                <img class="dark:hidden" src="{{ asset('images/logo.png') }}" alt="Grocee Logo" width="158" height="36">
                                <img class="hidden dark:block" src="{{ asset('images/logo-light.png') }}" alt="Grocee Logo" width="158" height="36">
                            </a>
                            <button class="offcanvas__close--btn dark:text-white" data-offcanvas>close</button>
                        </div>
                        <nav class="offcanvas__menu">
                            <ul class="offcanvas__menu_ul">
                                <li class="offcanvas__menu_li">
                                    <a class="offcanvas__menu_item dark:text-white" href="#home">Home</a>
                                    {{-- <ul class="offcanvas__sub_menu">
                                        <li class="offcanvas__sub_menu_li"><a href="index.html" class="offcanvas__sub_menu_item dark:text-white">Home One</a></li>
                                        <li class="offcanvas__sub_menu_li"><a href="index-2.html" class="offcanvas__sub_menu_item dark:text-white">Home Two</a></li>
                                        <li class="offcanvas__sub_menu_li"><a href="index-3.html" class="offcanvas__sub_menu_item dark:text-white">Home Three</a></li>
                                    </ul> --}}
                                </li>
                                <li class="offcanvas__menu_li"><a class="offcanvas__menu_item dark:text-white" href="#about">About</a></li>
                                <li class="offcanvas__menu_li"><a class="offcanvas__menu_item dark:text-white" href="#services">Services</a></li>
                                <li class="offcanvas__menu_li"><a class="offcanvas__menu_item dark:text-white" href="#portfolio">Portfolio</a></li>
                                <li class="offcanvas__menu_li"><a class="offcanvas__menu_item dark:text-white" href="#blog">Blog</a></li>
                                <li class="offcanvas__menu_li"><a class="offcanvas__menu_item dark:text-white" href="#contact">Contact</a></li>
                            </ul>
                            <button class="flex mx-auto bg-accent1 lg:px-[15px] px-[12px] xl:py-[12px] py-[10px] rounded-[2rem] text-[16px] xl:text-[18px] font-medium text-white items-center transition duration-300 relative after:absolute :after:content-[''] after:bg-primary after:h-full after:w-full after:bottom-0 after:left-0 after:rounded-[2rem] after:trasition after:duration-300 after:opacity-0 hover:after:opacity-[1] mt-[30px]">
                                <span class="icon bg-[#EFEBEB] text-accent1 w-[34px] h-[34px] rounded-full flex items-center justify-center ltr:xl:mr-[15px] ltr:mr-[10px] rtl:xl:ml-[15px] rtl:ml-[10px] relative z-[8] flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-download">
                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                        <polyline points="7 10 12 15 17 10"></polyline>
                                        <line x1="12" y1="15" x2="12" y2="3"></line>
                                    </svg>
                                </span>
                                <span class="ltr:xl:pr-[5px] ltr:lg:pr-[5px] rtl:xl:pl-[5px] rtl:lg:pl-[5px] relative z-[8] flex-shrink-0">Download CV</span>
                            </button>
                        </nav>

                    </div>
                </div>
                {{-- End Offcanvas header menu --}}
            </div>
        </header>
        {{-- Header area end --}}

        {{-- Main wrapper start --}}
        <main>
            {{-- Hero section start --}}
            <section class="bg-cover bg-no-repeat bg-center sm:h-full only-md:h-screen lg:min-h-screen flex justify-center items-center overflow-hidden bg-[url('/public/images/hero-bg-img.png')] bg-[#DAEEF1] dark:bg-[url('/public/images/hero-bg-img-dark.png')] dark:bg-dark_primary_bg dark:border-b dark:border-dark_accent1"
                id="home">
                <livewire:index />
            </section>
            {{-- Hero section end --}}

            {{-- Services section start --}}
            <section class="lg:py-[100px] md:py-[70px]" id="services">
                <livewire:service />
            </section>
            {{-- Services section end --}}

            {{-- About me section start --}}
            <section class="bg-cover bg-no-repeat bg-center bg-[url('../images/about-me-bg.png')] bg-[#ECF1F6] dark:bg-dark_primary_bg dark:bg-none py-[70px] lg:py-[100px] dark:border-t dark:border-b dark:border-dark_accent1"
                id="about">
                <livewire:about />
            </section>
            {{-- About me section end --}}

            {{-- Logo list section start --}}
            <section class="py-[70px] lg:py-[100px] border-b-[1px] border-[#DDDDDD] dark:border-dark_accent1">
                <livewire:client />
            </section>
            {{-- Logo list section end --}}


            {{--  Resume section start --}}
            <section class="lg:py-[100px] md:py-[70px]">
                <livewire:resume />
            </section>
            {{--  Resume section end --}}

            {{--  Skill section start --}}
            <section class="lg:pb-[100px] md:pb-[70px]">
                <livewire:skill />
            </section>
            {{--  Skill section end --}}

            {{-- Portfolio section start --}}
            <section class="bg-[#EFF3F7] dark:bg-dark_primary_bg pt-[70px] lg:pt-[100px] pb-[40px] lg:pb-[70px] dark:border-t dark:border-b dark:border-dark_accent1" id="portfolio">
                <livewire:project />
            </section>
            {{-- Portfolio section end --}}

            {{-- Testimonial section start --}}
            <section class="lg:py-[100px] md:py-[70px] dark:border-b dark:border-dark_accent1">
                <livewire:testimonial />
            </section>
            {{-- Testimonial section end --}}

            {{-- Contact form section start --}}
            <section class="py-[70px] lg:py-[100px] mb-[270px] bg-cover bg-no-repeat bg-center bg-[url('../images/contact-bg.png')] bg-[#ECF1F6] dark:bg-[url('../images/contact-bg-dark.png')] dark:bg-dark_primary_bg" id="contact">
                <livewire:contact />
            </section>
            {{-- Contact form section end --}}

            {{-- Blog section start --}}
            <section class="pb-[70px] lg:pb-[100px]" id="blog">
                <livewire:blog />
            </section>
            {{-- Blog section end --}}
        </main>
        {{-- Main wrapper end --}}

        {{-- Footer start --}}
        <footer class="py-[50px] bg-cover bg-no-repeat bg-center bg-[url('../images/footer-bg.png')] bg-[#EFF3F7] dark:bg-[url('../images/footer-bg-dark.png')] dark:bg-dark_primary_bg dark:border-t dark:border-dark_accent1">
            <div class="container mx-auto">
                <div class="grid grid-cols-1 only-md:grid-cols-2 lg:grid-cols-2">
                    <div class="flex">
                        <p class="flex items-center flex-wrap sm:justify-center dark:text-slate-200">
                            Developed with
                            <span class="px-[3px] text-paragraph dark:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="currentColor" stroke="text-paragraph" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
                                </svg>
                            </span>by
                            <span class=" px-[3px]">
                                <a class="text-accent1 hover:font-bold" href="/">DevMushref</a>
                            </span>
                            © 2023
                        </p>
                    </div>
                    <div class="flex items-center justify-end gap-8 sm:justify-center sm:mt-[15px]">
                        <a href="#" class="text-paragraph dark:text-slate-200 hover:text-accent1 font-medium text-[20px] sm:text-[16px]">Terms
                            & Condition</a>
                        <a href="#" class="text-paragraph dark:text-slate-200 hover:text-accent1 font-medium text-[20px] sm:text-[16px]">
                            Privacy Policy</a>
                    </div>
                </div>
            </div>
            <div class="container mx-auto">
                <div class="grid grid-cols-1 only-md:grid-cols-2 lg:grid-cols-2">
                    <div class="flex">
                        <p class="flex items-center flex-wrap sm:justify-center dark:text-slate-200">Freelance #:
                            FL-842634829
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        {{-- Footer end --}}

        {{-- Back to top start --}}
        <button id="scroll__top" class="fixed bottom-12 ltr:right-5 rtl:left-5 z-50 bg-accent1 text-white shadow-[0_2px_22px_rgba(0,0,0,0.16)] cursor-pointer translate-y-12 opacity-0 invisible transition-all duration-300 leading-[1] w-11 h-11 rounded-full border-none flex items-center justify-center hover:bg-primary dark:hover:bg-dark_accent1">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon w-6 leading-[1]" viewBox="0 0 512 512">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="48" d="M112 244l144-144 144 144M256 120v292" />
            </svg>
        </button>
        {{-- Back to top end --}}

        <!-------- Plugins js ------>
        {{-- Swiper js --}}
        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
        {{-- imagesloaded js --}}
        <script src="{{ URL::asset('js/imagesloaded.pkgd.min.js') }}" defer></script>
        {{-- Isotope js --}}
        <script src="{{ URL::asset('js/isotope.pkgd.min.js') }}" defer></script>
        {{-- Custom js --}}
        <script src="{{ URL::asset('js/script.js') }}" defer></script>
    </body>
</html>
