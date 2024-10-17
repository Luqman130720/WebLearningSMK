<x-UserLayout>

    <body class="bg-subtle-pattern bg-repeat bg-custom-small">
        {{-- Alert Start --}}
        @if (session('success'))
            <div id="alert-additional-content-3"
                class="p-4 mb-4 text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800"
                role="alert">
                <div class="flex items-center">
                    <svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <h3 class="text-lg font-medium">{{ session('success') }}</h3>
                </div>
                <div class="mt-2 mb-4 text-sm">
                    Terima kasih atas aspirasi yang telah Anda kirimkan! Kami akan meninjau pesan Anda dan memberikan
                    tanggapan secepatnya.
                    Kami menghargai partisipasi Anda dalam memberikan masukan untuk meningkatkan layanan kami.
                </div>

                <div class="flex">
                    <button type="button"
                        class="text-white bg-gradient-to-br from-cyan-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-200 dark:focus:ring-blue-800 font-medium rounded-lg text-xs px-3 py-1.5 text-center me-2 mb-2"
                        data-dismiss-target="#alert-additional-content-3" aria-label="Close">
                        Close
                    </button>

                </div>
            </div>
        @endif
        {{-- Alert End --}}


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
                    <p class="text-xl italic font-bold leading-relaxed text-gray-900 dark:text-white">"Materi
                        Pelajaran"</p>
                </blockquote>
            </div>
        </section>

        <section class="mt-5">
            <div class="container mx-auto px-4">
                <div class=" dark:bg-gray-800 dark:border-gray-600">



                    <section class="bg-white dark:bg-gray-900">



                        <main class=" pb-16 lg:pt-5 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
                            <div class="flex justify-between px-4 mx-auto max-w-screen-xl">
                                <article
                                    class="mx-4 w-full max-w-screen-xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                                    <header class="mb-4 lg:mb-6 not-format">
                                        <address class="flex items-center mb-6 not-italic">
                                            <div
                                                class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                                                <img class="mr-4 w-16 h-16 rounded-full"
                                                    src="{{ asset('storage/' . $showMateri->author->image) }}"
                                                    alt="Jese Leos">
                                                <div>
                                                    <a href="#" rel="author"
                                                        class="text-xl font-bold text-gray-900 dark:text-white">{{ $showMateri->author->nama_lengkap }}</a>
                                                    <p class="text-base text-gray-500 dark:text-gray-400">
                                                        {{ $showMateri->author->email }}</p>
                                                    <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate
                                                            datetime="2022-02-08"
                                                            title="February 8th, 2022">{{ $showMateri->created_at->format('M. d, Y') }}</time>
                                                    </p>
                                                </div>
                                            </div>
                                        </address>
                                        <h1
                                            class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                                            {{ $showMateri->judul_materi }}</h1>
                                    </header>
                                    <iframe class="w-full h-64 md:h-96 rounded-2xl shadow-lg mb-5"
                                        src="https://www.youtube.com/embed/hR3uvOGFkXE" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen>
                                    </iframe>



                                    <h2>Materi Pelajaran</h2>
                                    <div class="flex flex-col md:flex-row items-start md:items-center">
                                        <img class="object-cover rounded-2xl shadow-lg mb-4 md:mb-0 md:mr-4 w-full h-auto md:h-44"
                                            src="{{ asset('storage/' . $showMateri->ilustrasi_materi_image) }}"
                                            alt="">

                                        <p class="text-xl text-justify">
                                            {{ $showMateri->paragraph1 }}
                                        </p>
                                    </div>



                                    <p class="text-xl text-justify">{{ $showMateri->paragraph2 }}</p>
                                    <p class="text-xl text-justify">{{ $showMateri->paragraph3 }}</p>
                                    <p class="text-xl text-justify">{{ $showMateri->paragraph4 }}</p>

                                    <h2>Kesimpulan</h2>
                                    <div class="flex flex-col md:flex-row items-start md:items-center">
                                        <p class="text-xl text-justify">
                                            {{ $showMateri->kesimpulan }}
                                        </p>
                                        <img class="object-cover rounded-2xl shadow-lg mb-4 md:mb-0 md:ml-4 w-full h-auto md:h-44"
                                            src="{{ asset('storage/' . $showMateri->ilustrasi_materi_image2) }}"
                                            alt="">

                                    </div>



                                </article>
                            </div>
                        </main>




                    </section>
                </div>
            </div>
        </section>



    </body>
</x-UserLayout>
