<!DOCTYPE html>
<html lang="en" class="astro-FLTEP2YP">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="#">
    <meta name="author" content="">

    <title>PPLG SMKN 1 KARAWANG</title>
    <link rel="icon" href="{{ asset('baseadmin/img/logos/Logo_PPLG.png') }}" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('baselanding/dist/assets/index.350e2433.css') }}" />
    <link rel="stylesheet" href="{{ asset('baselanding/dist/assets/vanilla.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOM9ERs6jJBBFZwT1UhlHH3f5tS+6fI5GYjLioPA" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

{{-- Index --}}

<body class="bg-white dark:bg-gray-900 astro-FLTEP2YP">
    <header class="astro-UY3JLCBK">
        <nav class="fixed top-0 left-0 z-10 w-full bg-white shadow-lg">
            <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
                <div class="flex flex-wrap items-center justify-between py-2 gap-6 md:py-4 md:gap-0 relative">
                    <div class="flex items-center">
                        <img src="{{ asset('baselanding/dist/images/logos/Perisai_PPLG.png') }}" alt="Logo"
                            class="h-8 mr-3">
                    </div>
                    <input aria-hidden="true" type="checkbox" name="toggle_nav" id="toggle_nav" class="hidden peer">
                    <div class="relative z-20 w-full flex justify-between lg:w-max md:px-0">
                        <div class="relative flex items-center lg:hidden max-h-10">
                            <label role="button" for="toggle_nav" aria-label="hamburger" id="hamburger"
                                class="relative p-6 -mr-6">
                                <div aria-hidden="true" id="line"
                                    class="m-auto h-0.5 w-5 rounded bg-sky-900 transition duration-300"></div>
                                <div aria-hidden="true" id="line2"
                                    class="m-auto mt-2 h-0.5 w-5 rounded bg-sky-900 transition duration-300"></div>
                            </label>
                        </div>
                    </div>
                    <div aria-hidden="true"
                        class="fixed z-10 inset-0 h-screen w-screen bg-white/70 backdrop-blur-2xl origin-bottom scale-y-0 transition duration-500 peer-checked:origin-top peer-checked:scale-y-100 lg:hidden dark:bg-gray-900/70">
                    </div>
                    <div
                        class="flex-col z-20 flex-wrap gap-6 p-8 rounded-3xl border border-gray-100 bg-white shadow-2xl shadow-gray-600/10 justify-end w-full invisible opacity-0 translate-y-1 absolute top-full left-0 transition-all duration-300 scale-95 origin-top lg:relative lg:scale-100 lg:peer-checked:translate-y-0 lg:translate-y-0 lg:flex lg:flex-row lg:items-center lg:gap-0 lg:p-0 lg:bg-transparent lg:w-7/12 lg:visible lg:opacity-100 lg:border-none peer-checked:scale-100 peer-checked:opacity-100 peer-checked:visible lg:shadow-none dark:shadow-none dark:bg-gray-800 dark:border-gray-700">
                        <div class="text-gray-600 dark:text-gray-300 lg:pr-4 lg:w-auto w-full lg:pt-0 astro-UY3JLCBK">
                            <ul
                                class="tracking-wide font-medium lg:text-sm flex-col flex lg:flex-row gap-6 lg:gap-0 astro-UY3JLCBK">
                                <li class="astro-UY3JLCBK">
                                    <a href="#home"
                                        class="block md:px-4 transition hover:text-primary astro-UY3JLCBK">
                                        <span class="astro-UY3JLCBK">Home</span>
                                    </a>
                                </li>
                                <li class="astro-UY3JLCBK">
                                    <a href="#about"
                                        class="block md:px-4 transition hover:text-primary astro-UY3JLCBK">
                                        <span class="astro-UY3JLCBK">About</span>
                                    </a>
                                </li>
                                <li class="astro-UY3JLCBK">
                                    <a href="#project"
                                        class="block md:px-4 transition hover:text-primary astro-UY3JLCBK">
                                        <span class="astro-UY3JLCBK">Project</span>
                                    </a>
                                </li>
                                <li class="astro-UY3JLCBK">
                                    <a href="#news"
                                        class="block md:px-4 transition hover:text-primary astro-UY3JLCBK">
                                        <span class="astro-UY3JLCBK">News</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div>
        @yield('content')

        {{-- Footer Section --}}
        <footer class="footer">
            <div class="footer-container">
                <div class="footer-content">
                    <div class="footer-logos aligh-items">
                        <img src="{{ asset('baseadmin/img/logos/Logo_Neskar.png') }}" alt="Logo" width="60" class="logo SMKN 1 Karawang">
                        <img src="{{ asset('baselanding\dist\images\logos\Logo_PPLG.png') }}" alt="Logo PPLG" width="60" class="logo">
                    </div>
                    <span class="footer-address">Jl. Pangkal Perjuangan, Karawang Barat, Karawang, Jawa Barat, Indonesia
                        – 41361</span>
                    <span class="footer-email">
                        <a href="mailto:smkn1karawang@gmail.com">smkn1karawang@gmail.com</a>
                    </span>
                    <div class="footer-copy">
                        &copy; <span id="year"></span> PPLG SMKN 1 Karawang
                    </div>
                </div>
                <div class="footer-links">
                    <ul>
                        <li>
                            <a href="#" class="footer-link">
                                <span>Eling</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="footer-link">
                                <span>Instagram</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="footer-link">
                                <span>YouTube</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>


        <script>
            // Automatically set the current year
            document.getElementById("year").textContent = new Date().getFullYear();
        </script>

</body>

</html>
