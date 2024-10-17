<x-UserLayout>

    <body class="bg-subtle-pattern bg-repeat bg-custom-small">
        {{-- Carousel Jumbotron Section Start --}}
        <section class="mt-3">
            <div class="container mx-auto px-4">
                <div id="jumbotron-carousel" class="relative w-full shadow-2xl" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative h-64 overflow-hidden md:h-96">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <div
                                class="bg-center rounded-3xl shadow-2xl bg-no-repeat bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/conference.jpg')] bg-gray-700 bg-blend-multiply h-full flex items-center justify-center">
                                <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
                                    <h1
                                        class="mb-4 text-2xl font-extrabold tracking-tight leading-none text-white md:text-2xl lg:text-6xl">
                                        Membangun Masa Depan Melalui Pembelajaran
                                    </h1>
                                    <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">
                                        Kami di Eduweb percaya bahwa pendidikan adalah kunci untuk membuka potensi
                                        setiap
                                        individu. Bergabunglah dengan kami untuk menjelajahi materi yang inovatif dan
                                        interaktif.
                                    </p>

                                    <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                                        <a href="#"
                                            class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                                            Get started
                                            <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Item 2 (duplicate the structure for additional items) -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <div
                                class="bg-center rounded-3xl shadow-2xl bg-no-repeat bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/conference.jpg')] bg-gray-700 bg-blend-multiply h-full flex items-center justify-center">
                                <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
                                    <h1
                                        class="mb-4 text-2xl font-extrabold tracking-tight leading-none text-white md:text-2xl lg:text-6xl">
                                        Pembelajaran Digital untuk Semua
                                    </h1>
                                    <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">
                                        Di Eduweb, kami menghadirkan sumber daya pendidikan yang mudah diakses untuk
                                        semua
                                        kalangan, mendorong pertumbuhan dan pengembangan dalam dunia yang terus berubah.
                                    </p>

                                    <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                                        <a href="#"
                                            class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                                            Get started
                                            <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                                            </svg>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Additional Items... -->
                    </div>

                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                            data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                            data-carousel-slide-to="1"></button>
                        <!-- Additional indicators... -->
                    </div>

                    <!-- Slider controls -->
                    <button type="button"
                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>

            </div>
        </section>
        {{-- Carousel Jumbotron Section End --}}

        <section class="mt-5">
            <div class="container mx-auto px-4">
                <blockquote
                    class="inline-block p-4 my-4 rounded-r-3xl border-blue-900 border-l-8 bg-gray-50 dark:border-blue-950 dark:bg-gray-800">
                    <p class="text-xl italic font-bold leading-relaxed text-gray-900 dark:text-white">"Menu Ujian"</p>
                </blockquote>
            </div>
        </section>

        <section class="mt-5">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6"> <!-- Grid Layout Added -->
                    @foreach ($kategori as $item)
                        <div
                            class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <svg class="w-7 h-7 text-gray-500 dark:text-gray-400 mb-3" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M18 5h-.7c.229-.467.349-.98.351-1.5a3.5 3.5 0 0 0-3.5-3.5c-1.717 0-3.215 1.2-4.331 2.481C8.4.842 6.949 0 5.5 0A3.5 3.5 0 0 0 2 3.5c.003.52.123 1.033.351 1.5H2a2 2 0 0 0-2 2v3a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V7a2 2 0 0 0-2-2ZM8.058 5H5.5a1.5 1.5 0 0 1 0-3c.9 0 2 .754 3.092 2.122-.219.337-.392.635-.534.878Zm6.1 0h-3.742c.933-1.368 2.371-3 3.739-3a1.5 1.5 0 0 1 0 3h.003ZM11 13H9v7h2v-7Zm-4 0H2v5a2 2 0 0 0 2 2h3v-7Zm6 0v7h3a2 2 0 0 0 2-2v-5h-5Z" />
                            </svg>
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                    {{ $item->nama_kategori }}
                                </h5>
                            </a>
                            <!-- Deskripsi -->
                            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">{{ $item->deskripsi }}
                            </p>

                            <!-- Tanggal Ujian -->
                            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">
                                Tanggal Ujian: {{ $item->tanggal_ujian }}
                            </p>

                            <!-- Waktu Ujian -->
                            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">
                                Waktu Ujian: {{ $item->waktu_ujian }} WIB
                            </p>

                            <a href="{{ route('ujian.mulai', $item->id) }}"
                                class="inline-flex font-medium items-center text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                                Mulai Ujian
                                <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                                </svg>
                            </a>

                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="mt-5">
            <div class="container mx-auto px-4">
                <blockquote
                    class="inline-block p-4 my-4 rounded-r-3xl border-blue-900 border-l-8 bg-gray-50 dark:border-blue-950 dark:bg-gray-800">
                    <p class="text-xl italic font-bold leading-relaxed text-gray-900 dark:text-white">"Kritik dan
                        Saran"
                    </p>
                </blockquote>
            </div>
        </section>

    </body>
</x-UserLayout>
