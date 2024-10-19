{{-- Home --}}
@extends('pages.landing.index')

@section('content')
    <main class="space-y-40 mb-40">
        {{-- Gradient Background --}}
        <div class="relative">
            <div aria-hidden="true" class="absolute inset-0 grid grid-cols-2 -space-x-52 opacity-40 dark:opacity-20">
                <div class="blur-[106px] h-56 bg-gradient-to-br from-primary to-purple-400 dark:from-blue-700"></div>
                <div class="blur-[106px] h-32 bg-gradient-to-r from-cyan-400 to-sky-300 dark:to-indigo-600"></div>
            </div>

            <div id="home"></div>
            {{-- Hero --}}
            <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
                <div class="relative pt-36 ml-auto">
                    <div class="lg:w-1/2 text-center mx-auto">
                        <h1 class="text-gray-900 dark:text-white font-bold text-5xl md:text-6xl xl:text-7xl">Be Adaptive
                            <br><span class="text-primary dark:text-white">and Innovative.</span>
                        </h1>
                        <p class="mt-8 text-gray-700 dark:text-gray-300">In Software Engineering, being creative,
                            adaptive, and innovative means designing engaging games, solving complex problems, and
                            embracing change to create impactful solutions for diverse audiences.</p>
                        <div
                            class="hidden py-8 mt-16 border-y border-gray-100 dark:border-gray-800 sm:flex justify-between">
                            <div class="text-left">
                                <h6 class="text-4xl font-semibold text-gray-700 dark:text-white">100</h6>
                                <p class="mt-2 text-gray-500">Male Students</p>
                            </div>
                            <div class="text-left">
                                <h6 class="text-4xl font-semibold text-gray-700 dark:text-white">67</h6>
                                <p class="mt-2 text-gray-500">Female Students</p>
                            </div>
                            <div class="text-left">
                                <h6 class="text-4xl font-semibold text-gray-700 dark:text-white">350+</h6>
                                <p class="mt-2 text-gray-500">Alumni</p>
                            </div>
                            <div class="text-left">
                                <h6 class="text-4xl font-semibold text-gray-700 dark:text-white">40+</h6>
                                <p class="mt-2 text-gray-500">Achievement</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Hero --}}

            <div id="about"></div>
            <br>
            <br>
            <br>
            <br>

            {{-- About Section --}}
            <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
                {{-- About Text --}}
                <div class="md:w-2/3 lg:w-1/2">
                    <h2 class="my-8 text-2xl font-bold text-gray-700 dark:text-white md:text-4xl">
                        About Software & Game Developments
                    </h2>
                    <p class="text-gray-600 dark:text-gray-300">
                        PPLG (Software and Game Development) at SMKN 1 Karawang is a vocational program focused on
                        computer software. In the era of Industry Revolution 5.0, PPLG prepares students to master
                        various aspects of website creation, application development, gaming, and all related
                        programming fields.
                    </p>
                    <br>
                    <div class="mt-12 lg:mt-0">
                        <a href="#"
                            class="relative flex h-9 w-full items-center justify-center px-4 before:absolute before:inset-0 before:rounded-full before:bg-primary before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 sm:w-max">
                            <span class="relative text-sm font-semibold text-white">Read More</span>
                        </a>
                    </div>
                </div>
                {{-- End Text --}}

                {{-- Card --}}
                <div
                    class="mt-16 grid divide-x divide-y divide-gray-100 dark:divide-gray-700 overflow-hidden rounded-3xl border border-gray-100 text-gray-600 dark:border-gray-700 sm:grid-cols-2 lg:grid-cols-4 lg:divide-y-0 xl:grid-cols-4">
                    <div
                        class="group relative bg-white dark:bg-gray-800 transition hover:z-[1] hover:shadow-2xl hover:shadow-gray-600/10">
                        <div class="relative space-y-8 py-12 p-8">
                            <img src="{{ asset('baselanding/icons/achievement.png') }}" class="w-12" width="512"
                                height="512" alt="achievement illustration">
                            <div class="space-y-2">
                                <h5
                                    class="text-xl font-semibold text-gray-700 dark:text-white transition group-hover:text-secondary">
                                    Achievement</h5>
                                <p class="text-gray-600 dark:text-gray-300">Outstanding academic achievement of the major
                                </p>
                            </div>
                            <a href="#" class="flex items-center justify-between group-hover:text-secondary">
                                <span class="text-sm">View More</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5 -translate-x-4 text-2xl opacity-0 transition duration-300 group-hover:translate-x-0 group-hover:opacity-100">
                                    <path fill-rule="evenodd"
                                        d="M12.97 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06l6.22-6.22H3a.75.75 0 010-1.5h16.19l-6.22-6.22a.75.75 0 010-1.06z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div
                        class="group relative bg-gray-50 dark:bg-gray-900 transition hover:z-[1] hover:shadow-2xl hover:shadow-gray-600/10">
                        <div class="relative space-y-8 py-12 p-8">
                            <img src="{{ asset('baselanding/icons/staff.png') }}" class="w-12" width="512"
                                height="512" alt="staff illustration">
                            <div class="space-y-2">
                                <h5
                                    class="text-xl font-semibold text-gray-700 dark:text-white transition group-hover:text-secondary">
                                    Staff</h5>
                                <p class="text-gray-600 dark:text-gray-300">Brief details and objectives of each subject
                                    taught.</p>
                            </div>
                            <a href="#" class="flex items-center justify-between group-hover:text-secondary">
                                <span class="text-sm">View More</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5 -translate-x-4 text-2xl opacity-0 transition duration-300 group-hover:translate-x-0 group-hover:opacity-100">
                                    <path fill-rule="evenodd"
                                        d="M12.97 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06l6.22-6.22H3a.75.75 0 010-1.5h16.19l-6.22-6.22a.75.75 0 010-1.06z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div
                        class="group relative bg-white dark:bg-gray-800 transition hover:z-[1] hover:shadow-2xl hover:shadow-gray-600/10">
                        <div class="relative space-y-8 py-12 p-8">
                            <img src="{{ asset('baselanding/icons/alumni.png') }}" class="w-12" width="512"
                                height="512" alt="alumni illustration">
                            <div class="space-y-2">
                                <h5
                                    class="text-xl font-semibold text-gray-700 dark:text-white transition group-hover:text-secondary">
                                    Alumni</h5>
                                <p class="text-gray-600 dark:text-gray-300">Profiles of successful alumni inspiring
                                    current students’ futures.</p>
                            </div>
                            <a href="#" class="flex items-center justify-between group-hover:text-secondary">
                                <span class="text-sm">View More</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5 -translate-x-4 text-2xl opacity-0 transition duration-300 group-hover:translate-x-0 group-hover:opacity-100">
                                    <path fill-rule="evenodd"
                                        d="M12.97 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06l6.22-6.22H3a.75.75 0 010-1.5h16.19l-6.22-6.22a.75.75 0 010-1.06z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div
                        class="group relative bg-gray-50 dark:bg-gray-900 transition hover:z-[1] hover:shadow-2xl hover:shadow-gray-600/10">
                        <div class="relative space-y-8 py-12 p-8">
                            <img src="{{ asset('baselanding/icons/curriculum.png') }}" class="w-12" width="512"
                                height="512" alt="curriculum illustration">
                            <div class="space-y-2">
                                <h5
                                    class="text-xl font-semibold text-gray-700 dark:text-white transition group-hover:text-secondary">
                                    Curriculum</h5>
                                <p class="text-gray-600 dark:text-gray-300">Structured curriculum for student development
                                </p>
                            </div>
                            <a href="#" class="flex items-center justify-between group-hover:text-secondary">
                                <span class="text-sm">View More</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5 -translate-x-4 text-2xl opacity-0 transition duration-300 group-hover:translate-x-0 group-hover:opacity-100">
                                    <path fill-rule="evenodd"
                                        d="M12.97 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06l6.22-6.22H3a.75.75 0 010-1.5h16.19l-6.22-6.22a.75.75 0 010-1.06z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- End Card --}}
            </div>
            {{-- End Section --}}
            <div id="project"></div>
            <br>
            <br>
            <br>
            <br>

            {{-- Section Project --}}
            <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6 py-5">
                <div class="mb-12 space-y-2 text-center">
                    <h2 class="text-3xl font-bold text-gray-800 md:text-4xl dark:text-white">Our Latest Projects</h2>
                </div>
                <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-4">
                    <div
                        class="group p-6 sm:p-6 rounded-3xl bg-white border border-gray-100 dark:shadow-none dark:border-gray-700 dark:bg-gray-800 bg-opacity-50 shadow-2xl shadow-gray-600/10">
                        <div class="relative overflow-hidden rounded-xl">
                            <img src="https://images.unsplash.com/photo-1620121692029-d088224ddc74?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2832&q=80"
                                alt="art cover" loading="lazy" width="1000" height="667"
                                class="h-48 w-full object-cover object-top transition duration-500 group-hover:scale-105">
                        </div>
                        <div class="mt-6 relative">
                            <h3 class="text-xl font-semibold text-gray-800 dark:text-white">
                                Project Name.
                            </h3>
                            <p class="mt-2 mb-8 text-gray-600 dark:text-gray-300">
                                Description Voluptates harum aliquam totam, doloribus eum impedit atque! Temporibus...
                            </p>
                            <a href="#" class="flex items-center justify-between group-hover:text-secondary">
                                <span class="text-sm">View More</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5 -translate-x-4 text-2xl opacity-0 transition duration-300 group-hover:translate-x-0 group-hover:opacity-100">
                                    <path fill-rule="evenodd"
                                        d="M12.97 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06l6.22-6.22H3a.75.75 0 010-1.5h16.19l-6.22-6.22a.75.75 0 010-1.06z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div
                        class="group p-6 sm:p-6 rounded-3xl bg-white border border-gray-100 dark:shadow-none dark:border-gray-700 dark:bg-gray-800 bg-opacity-50 shadow-2xl shadow-gray-600/10">
                        <div class="relative overflow-hidden rounded-xl">
                            <img src="https://images.unsplash.com/photo-1620121692029-d088224ddc74?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2832&q=80"
                                alt="art cover" loading="lazy" width="1000" height="667"
                                class="h-48 w-full object-cover object-top transition duration-500 group-hover:scale-105">
                        </div>
                        <div class="mt-6 relative">
                            <h3 class="text-xl font-semibold text-gray-800 dark:text-white">
                                Project Name.
                            </h3>
                            <p class="mt-2 mb-8 text-gray-600 dark:text-gray-300">
                                Description Voluptates harum aliquam totam, doloribus eum impedit atque! Temporibus...
                            </p>
                            <a href="#" class="flex items-center justify-between group-hover:text-secondary">
                                <span class="text-sm">View More</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5 -translate-x-4 text-2xl opacity-0 transition duration-300 group-hover:translate-x-0 group-hover:opacity-100">
                                    <path fill-rule="evenodd"
                                        d="M12.97 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06l6.22-6.22H3a.75.75 0 010-1.5h16.19l-6.22-6.22a.75.75 0 010-1.06z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div
                        class="group p-6 sm:p-6 rounded-3xl bg-white border border-gray-100 dark:shadow-none dark:border-gray-700 dark:bg-gray-800 bg-opacity-50 shadow-2xl shadow-gray-600/10">
                        <div class="relative overflow-hidden rounded-xl">
                            <img src="https://images.unsplash.com/photo-1620121692029-d088224ddc74?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2832&q=80"
                                alt="art cover" loading="lazy" width="1000" height="667"
                                class="h-48 w-full object-cover object-top transition duration-500 group-hover:scale-105">
                        </div>
                        <div class="mt-6 relative">
                            <h3 class="text-xl font-semibold text-gray-800 dark:text-white">
                                Project Name.
                            </h3>
                            <p class="mt-2 mb-8 text-gray-600 dark:text-gray-300">
                                Description Voluptates harum aliquam totam, doloribus eum impedit atque! Temporibus...
                            </p>
                            <a href="#" class="flex items-center justify-between group-hover:text-secondary">
                                <span class="text-sm">View More</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5 -translate-x-4 text-2xl opacity-0 transition duration-300 group-hover:translate-x-0 group-hover:opacity-100">
                                    <path fill-rule="evenodd"
                                        d="M12.97 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06l6.22-6.22H3a.75.75 0 010-1.5h16.19l-6.22-6.22a.75.75 0 010-1.06z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div
                        class="group p-6 sm:p-6 rounded-3xl bg-white border border-gray-100 dark:shadow-none dark:border-gray-700 dark:bg-gray-800 bg-opacity-50 shadow-2xl shadow-gray-600/10">
                        <div class="relative overflow-hidden rounded-xl">
                            <img src="https://images.unsplash.com/photo-1620121692029-d088224ddc74?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2832&q=80"
                                alt="art cover" loading="lazy" width="1000" height="667"
                                class="h-48 w-full object-cover object-top transition duration-500 group-hover:scale-105">
                        </div>
                        <div class="mt-6 relative">
                            <h3 class="text-xl font-semibold text-gray-800 dark:text-white">
                                Project Name.
                            </h3>
                            <p class="mt-2 mb-8 text-gray-600 dark:text-gray-300">
                                Description Voluptates harum aliquam totam, doloribus eum impedit atque! Temporibus...
                            </p>
                            <a href="#" class="flex items-center justify-between group-hover:text-secondary">
                                <span class="text-sm">View More</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5 -translate-x-4 text-2xl opacity-0 transition duration-300 group-hover:translate-x-0 group-hover:opacity-100">
                                    <path fill-rule="evenodd"
                                        d="M12.97 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06l6.22-6.22H3a.75.75 0 010-1.5h16.19l-6.22-6.22a.75.75 0 010-1.06z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="news"></div>
            <br>
            <br>
            <br>
            <br>
            <br>
            {{-- Section News --}}
            <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6 py-5">
                <div class="mb-12 space-y-2 text-center">
                    <h2 class="text-3xl font-bold text-gray-800 md:text-4xl dark:text-white">Our Latest News</h2>
                </div>
                <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-3">
                    <div
                        class="group p-6 sm:p-6 rounded-3xl bg-white border border-gray-100 dark:shadow-none dark:border-gray-700 dark:bg-gray-800 bg-opacity-50 shadow-2xl shadow-gray-600/10">
                        <div class="relative overflow-hidden rounded-xl">
                            <img src="https://images.unsplash.com/photo-1620121692029-d088224ddc74?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2832&q=80"
                                alt="art cover" loading="lazy" width="1000" height="667"
                                class="h-48 w-full object-cover object-top transition duration-500 group-hover:scale-105">
                        </div>
                        <div class="mt-6 relative">
                            <h3 class="text-xl font-semibold text-gray-800 dark:text-white">
                                News Name.
                            </h3>
                            <p class="mt-2 mb-8 text-gray-600 dark:text-gray-300">
                                Description Voluptates harum aliquam totam, doloribus eum impedit atque! Temporibus...
                            </p>
                            <a href="#" class="flex items-center justify-between group-hover:text-secondary">
                                <span class="text-sm">Read More</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5 -translate-x-4 text-2xl opacity-0 transition duration-300 group-hover:translate-x-0 group-hover:opacity-100">
                                    <path fill-rule="evenodd"
                                        d="M12.97 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06l6.22-6.22H3a.75.75 0 010-1.5h16.19l-6.22-6.22a.75.75 0 010-1.06z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div
                        class="group p-6 sm:p-6 rounded-3xl bg-white border border-gray-100 dark:shadow-none dark:border-gray-700 dark:bg-gray-800 bg-opacity-50 shadow-2xl shadow-gray-600/10">
                        <div class="relative overflow-hidden rounded-xl">
                            <img src="https://images.unsplash.com/photo-1620121692029-d088224ddc74?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2832&q=80"
                                alt="art cover" loading="lazy" width="1000" height="667"
                                class="h-48 w-full object-cover object-top transition duration-500 group-hover:scale-105">
                        </div>
                        <div class="mt-6 relative">
                            <h3 class="text-xl font-semibold text-gray-800 dark:text-white">
                                News Name.
                            </h3>
                            <p class="mt-2 mb-8 text-gray-600 dark:text-gray-300">
                                Description Voluptates harum aliquam totam, doloribus eum impedit atque! Temporibus...
                            </p>
                            <a href="#" class="flex items-center justify-between group-hover:text-secondary">
                                <span class="text-sm">Read More</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5 -translate-x-4 text-2xl opacity-0 transition duration-300 group-hover:translate-x-0 group-hover:opacity-100">
                                    <path fill-rule="evenodd"
                                        d="M12.97 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06l6.22-6.22H3a.75.75 0 010-1.5h16.19l-6.22-6.22a.75.75 0 010-1.06z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div
                        class="group p-6 sm:p-6 rounded-3xl bg-white border border-gray-100 dark:shadow-none dark:border-gray-700 dark:bg-gray-800 bg-opacity-50 shadow-2xl shadow-gray-600/10">
                        <div class="relative overflow-hidden rounded-xl">
                            <img src="https://images.unsplash.com/photo-1620121692029-d088224ddc74?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2832&q=80"
                                alt="art cover" loading="lazy" width="1000" height="667"
                                class="h-48 w-full object-cover object-top transition duration-500 group-hover:scale-105">
                        </div>
                        <div class="mt-6 relative">
                            <h3 class="text-xl font-semibold text-gray-800 dark:text-white">
                                News Name.
                            </h3>
                            <p class="mt-2 mb-8 text-gray-600 dark:text-gray-300">
                                Description Voluptates harum aliquam totam, doloribus eum impedit atque! Temporibus...
                            </p>
                            <a href="#" class="flex items-center justify-between group-hover:text-secondary">
                                <span class="text-sm">Read More</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5 -translate-x-4 text-2xl opacity-0 transition duration-300 group-hover:translate-x-0 group-hover:opacity-100">
                                    <path fill-rule="evenodd"
                                        d="M12.97 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06l6.22-6.22H3a.75.75 0 010-1.5h16.19l-6.22-6.22a.75.75 0 010-1.06z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
