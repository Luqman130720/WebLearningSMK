    {{-- Small Header Section Start --}}
    <div class="bg-blue-950 text-white">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="w-full md:w-1/3 text-left">
                    <h1 class="text-sm font-semibold">EduWeb | Platform Pembelajaran Interaktif</h1>
                </div>
                <div class="w-full md:w-1/3">
                    <div class="flex items-center justify-end space-x-4">
                        <div class="social">
                            <ul class="flex space-x-4">
                                <li>
                                    <a target="_blank" href="https://www.instagram.com/ittelkompurwokerto/"
                                        class="text-white hover:text-blue-500">
                                        <svg class="w-5 h-5 text-white dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="none" viewBox="0 0 24 24">
                                            <path fill="currentColor" fill-rule="evenodd"
                                                d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://www.facebook.com/joinittp"
                                        class="text-gray-700 hover:text-blue-500">
                                        <svg class="w-5 h-5 text-white dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://www.youtube.com/channel/UCKCYFPqABGctXfBX8dQWfbA"
                                        class="text-gray-700 hover:text-blue-500">
                                        <svg class="w-5 h-5 text-white dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M21.7 8.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.839c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.839 4.225 4.225 0 0 0-.79 1.965 30.146 30.146 0 0 0-.2 3.206v1.5a30.12 30.12 0 0 0 .2 3.206c.094.712.364 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.151 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965 30.12 30.12 0 0 0 .2-3.206v-1.516a30.672 30.672 0 0 0-.202-3.206Zm-11.692 6.554v-5.62l5.4 2.819-5.4 2.801Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="lang relative">
                            <div class="wpml-ls-sidebars-language_switcher">
                                <ul class="flex items-center space-x-2">
                                    <li class="relative">
                                        <a href="#" class="flex items-center space-x-1">
                                            <img width="18" height="12" class="wpml-ls-flag"
                                                src="https://ittelkom-pwt.ac.id/wp-content/plugins/sitepress-multilingual-cms/res/flags/id.png"
                                                alt="ID Flag">
                                            <span class="wpml-ls-native">ID</span>
                                        </a>
                                        <ul
                                            class="absolute hidden group-hover:block bg-white shadow-md rounded-md mt-1">
                                            <li>
                                                <a href="https://ittelkom-pwt.ac.id/en/"
                                                    class="flex items-center space-x-1 px-4 py-2 hover:bg-gray-200">
                                                    <img width="18" height="12" class="wpml-ls-flag"
                                                        src="https://ittelkom-pwt.ac.id/wp-content/plugins/sitepress-multilingual-cms/res/flags/en.png"
                                                        alt="EN Flag">
                                                    <span class="wpml-ls-native" lang="en">EN</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Small Header Section End --}}


    {{-- Navbar Section Start --}}
    <section class="pt-3">
        <div class="container mx-auto px-4">
            <nav class="bg-white border-gray-200 dark:bg-gray-900 rounded-3xl shadow-2xl">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                    <a href="{{ route('user.index') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                        <img src="https://static.wixstatic.com/media/4efc69_10c87a02a38e4c2585af539c017d0ba8~mv2.png/v1/fit/w_2500,h_1330,al_c/4efc69_10c87a02a38e4c2585af539c017d0ba8~mv2.png"
                            class="h-8" alt="Flowbite Logo" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">EduWeb</span>
                    </a>
                    {{-- Android Menu Start --}}
                    <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">

                        @if (Auth::check())
                            <!-- Jika user sudah login, tampilkan foto profil -->
                            <button type="button"
                                class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                                id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                                data-dropdown-placement="bottom">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-8 h-8 rounded-full" src="{{ asset('storage/' . Auth::user()->image) }}"
                                    alt="foto profil">
                            </button>
                        @else
                            <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                                class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                type="button">
                                Login
                            </button>
                        @endif




                        <!-- Authentication Modal Start -->
                        <div id="authentication-modal" tabindex="-1" aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <!-- Konten Modal -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Header Modal -->
                                    <div
                                        class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            Masuk ke EduWeb
                                        </h3>
                                        <button type="button"
                                            class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-hide="authentication-modal">
                                            <svg class="w-3 h-3" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Tutup modal</span>
                                        </button>
                                    </div>
                                    <!-- Body Modal -->
                                    <div class="p-4 md:p-5">
                                        <form class="space-y-4" action="{{ url('/login') }}" method="POST">
                                            @csrf
                                            <div>
                                                <label for="username"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username
                                                    Anda</label>
                                                <input type="text" name="username" id="username"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    placeholder="Masukkan username Anda" required />
                                            </div>
                                            <div>
                                                <label for="password"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kata
                                                    Sandi</label>
                                                <input type="password" name="password" id="password"
                                                    placeholder="••••••••"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                    required />
                                            </div>
                                            <button type="submit"
                                                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                Masuk ke akun Anda
                                            </button>
                                            <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                                                Belum terdaftar? <a href="#"
                                                    class="text-blue-700 hover:underline dark:text-blue-500">daftar</a>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Authentication Modal End -->

                        <!-- Dropdown menu -->
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                            id="user-dropdown">
                            <div class="px-4 py-3">
                                @if (auth()->check())
                                    {{-- Check if the user is authenticated --}}
                                    <span
                                        class="block text-sm text-gray-900 dark:text-white">{{ auth()->user()->nama_lengkap }}</span>
                                @else
                                    <span class="block text-sm text-gray-900 dark:text-white">Pengguna tidak
                                        terdaftar</span>
                                @endif
                            </div>

                            <ul class="py-2" aria-labelledby="user-menu-button">
                                <li>
                                    <a href="{{ route('user.dashboard') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                                </li>
                                <li>
                                    <a href="{{ route('user.profile') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">My
                                        Profile</a>
                                </li>
                                <hr style="border-width: 1px;">
                                <li>
                                    <a href="#"
                                        class="block px-4 text-sm mb-2 text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                        <form class="flex font-semibold justify-center mx-auto items-center"
                                            action="{{ url('/logout') }}" method="POST">
                                            @csrf
                                            <button
                                                class="btn bg-gradient-primary mt-4 w-100 text-center">Logout</button>
                                        </form>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <button data-collapse-toggle="navbar-user" type="button"
                            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                            aria-controls="navbar-user" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 17 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                            </svg>
                        </button>
                    </div>
                    {{-- Android Menu End --}}

                    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1"
                        id="navbar-user">
                        <ul
                            class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                            <li>
                                <a href="{{ route('user.index') }}"
                                    class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                                    aria-current="page">Beranda</a>
                            </li>
                            <li>
                                <a href="{{ route('user.materiPelajaran') }}"
                                    class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Materi
                                    Pembelajaran</a>
                            </li>

                            <li>
                                <a href="{{ route('user.quiz.index') }}"
                                    class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Kuis</a>
                            </li>
                            <li>
                                <a href="{{ route('ujian.pilihKategori') }}"
                                    class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Ujian</a>
                            </li>
                            <li>
                                <a href="{{ route('user.tentangKami') }}"
                                    class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Tentang
                                    Kami</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </section>
    {{-- Navbar Section End --}}
