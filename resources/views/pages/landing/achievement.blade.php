@extends('pages.landing.index')

@section('content')
    <main class="space-y-40 mb-40">
        <div class="relative">
            <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
                
            </div>

            <div>
                <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
                    <div class="md:w-2/3 lg:w-1/2">
                        <h2 class="my-8 text-2xl font-bold text-gray-700 dark:text-white md:text-4xl">
                            About Software & Game Developments
                        </h2>
                        <p class="text-gray-600 dark:text-gray-300">Focus on creating and maintaining applications
                            or games for various platforms. They blend creativity and technical skills to build
                            user-friendly solutions, utilizing programming languages and tools. Game development
                            adds storytelling and graphics, delivering engaging experiences.</p>
                    </div>
                    <div
                        class="mt-16 grid divide-x divide-y divide-gray-100 dark:divide-gray-700 overflow-hidden rounded-3xl border border-gray-100 text-gray-600 dark:border-gray-700 sm:grid-cols-2 lg:grid-cols-4 lg:divide-y-0 xl:grid-cols-4">
                        <div
                            class="group relative bg-white dark:bg-gray-800 transition hover:z-[1] hover:shadow-2xl hover:shadow-gray-600/10">
                            <div class="relative space-y-8 py-12 p-8">
                                <img src="https://cdn-icons-png.flaticon.com/512/4341/4341139.png" class="w-12"
                                    width="512" height="512" alt="burger illustration">

                                <div class="space-y-2">
                                    <h5
                                        class="text-xl font-semibold text-gray-700 dark:text-white transition group-hover:text-secondary">
                                        Achievement
                                    </h5>
                                    <p class="text-gray-600 dark:text-gray-300">
                                        Outstanding school accomplishments in academic and extracurricular fields. </p>
                                </div>
                                <a href="#" class="flex items-center justify-between group-hover:text-secondary">
                                    <span class="text-sm">Read more</span>
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
                                <img src="https://cdn-icons-png.flaticon.com/512/4341/4341134.png" class="w-12"
                                    width="512" height="512" alt="burger illustration">

                                <div class="space-y-2">
                                    <h5
                                        class="text-xl font-semibold text-gray-700 dark:text-white transition group-hover:text-secondary">
                                        Staff
                                    </h5>
                                    <p class="text-gray-600 dark:text-gray-300">
                                        Brief details and objectives of each subject taught. </p>
                                </div>
                                <a href="#" class="flex items-center justify-between group-hover:text-secondary">
                                    <span class="text-sm">Read more</span>
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
                                <img src="https://cdn-icons-png.flaticon.com/512/4341/4341160.png" class="w-12"
                                    width="512" height="512" alt="burger illustration">

                                <div class="space-y-2">
                                    <h5
                                        class="text-xl font-semibold text-gray-700 dark:text-white transition group-hover:text-secondary">
                                        Alumni
                                    </h5>
                                    <p class="text-gray-600 dark:text-gray-300">
                                        Profiles of successful alumni inspiring current students’ futures. </p>
                                </div>
                                <a href="#" class="flex items-center justify-between group-hover:text-secondary">
                                    <span class="text-sm">Read more</span>
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
                            <div
                                class="relative space-y-8 py-12 p-8 transition duration-300 group-hover:bg-white dark:group-hover:bg-gray-800">
                                <img src="https://cdn-icons-png.flaticon.com/512/4341/4341025.png" class="w-12"
                                    width="512" height="512" alt="burger illustration">

                                <div class="space-y-2">
                                    <h5
                                        class="text-xl font-semibold text-gray-700 dark:text-white transition group-hover:text-secondary">
                                        Curriculum
                                    </h5>
                                    <p class="text-gray-600 dark:text-gray-300">
                                        Structured curriculum including mandatory and elective courses for student
                                        development. </p>
                                </div>
                                <a href="#" class="flex items-center justify-between group-hover:text-secondary">
                                    <span class="text-sm">Read more</span>
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
