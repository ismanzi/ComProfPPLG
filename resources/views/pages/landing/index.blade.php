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
                                    <a href="#" class="block md:px-4 transition hover:text-primary astro-UY3JLCBK">
                                        <span class="astro-UY3JLCBK">Home</span>
                                    </a>
                                </li>
                                <li class="astro-UY3JLCBK">
                                    <a href="#" class="block md:px-4 transition hover:text-primary astro-UY3JLCBK">
                                        <span class="astro-UY3JLCBK">About</span>
                                    </a>
                                </li>
                                <li class="astro-UY3JLCBK">
                                    <a href="#" class="block md:px-4 transition hover:text-primary astro-UY3JLCBK">
                                        <span class="astro-UY3JLCBK">Project</span>
                                    </a>
                                </li>
                                <li class="astro-UY3JLCBK">
                                    <a href="#" class="block md:px-4 transition hover:text-primary astro-UY3JLCBK">
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
    <footer class="py-20 md:py-40">
        <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
            <div class="m-auto md:w-10/12 lg:w-8/12 xl:w-6/12">
                <div class="flex flex-wrap items-center justify-between md:flex-nowrap">
                    <div class="m-auto mt-16 w-10/12 space-y-6 text-center sm:mt-auto sm:w-5/12 sm:text-left">
                        <div class="flex justify-center space-x-6"> <!-- Menambahkan Flexbox di sini -->
                            <img src="{{ asset('baselanding/dist/images/logos/Logo_Neskar.png') }}" alt="Logo" class="h-12">
                            <img src="{{ asset('baselanding/dist/images/logos/Logo_Horizontal_Black.png') }}" alt="Logo" class="h-12">
                        </div>
                        <span class="block text-gray-500 dark:text-gray-400">Jl. Pangkal Perjuangan, Karawang Barat, Karawang, Jawa Barat, Indonesia – 41361</span>
                        <span class="flex justify-between text-gray-600 dark:text-white">
                            <a href="mailto:smkn1karawang@gmail.com" class="font-medium flex items-center space-x-2">
                                <i class="fas fa-envelope"></i>
                                <span>smkn1karawang@gmail.com</span>
                            </a>
                    </div>
                    <div class="flex w-full justify-center space-x-12 text-gray-600 dark:text-gray-300 sm:w-7/12 md:justify-end">
                        <ul role="list" class="space-y-8">
                            <li>
                                <a href="#" class="flex items-center space-x-3 transition hover:text-primary">
                                    <i class="fas fa-globe w-5"></i>
                                    <span>Eling</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center space-x-3 transition hover:text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5" viewBox="0 0 16 16">
                                        <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"></path>
                                    </svg>
                                    <span>YouTube</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center space-x-3 transition hover:text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5" viewBox="0 0 16 16">
                                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                                    </svg>
                                    <span>Instagram</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mt-10 text-center">
                    <span class="block text-gray-500 dark:text-gray-400 mt-4 ">&copy; 2024 PPLG SMKN 1 Karawang<span id="year"></span></span>
                </div>
            </div>
        </div>
    </footer>
    <script>
        // Automatically set the current year
        document.getElementById("year").textContent = new Date().getFullYear();
    </script>

</body>

</html>
