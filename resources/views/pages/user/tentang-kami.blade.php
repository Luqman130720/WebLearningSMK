<x-UserLayout>
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
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
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
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
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
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
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
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
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
                <p class="text-xl italic font-bold leading-relaxed text-gray-900 dark:text-white">"Platform
                    Pembelajaran Interaktif untuk Meningkatkan Potensi Belajar Anda"</p>
            </blockquote>
        </div>
    </section>

    {{-- Introduction Section Start --}}
    <section class="mt-5">
        <div class="container mx-auto px-4">
            <div class="bg-white px-4 shadow-2xl rounded-3xl py-8 grid lg:grid-cols-2 gap-8">
                <div class="flex flex-col justify-center">
                    <h1
                        class="mb-4 text-3xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-4xl dark:text-white">
                        Ada Apa Dengan EduWeb?
                    </h1>
                    <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">
                        EduWeb adalah platform pembelajaran interaktif yang meningkatkan pengalaman belajar siswa
                        dengan
                        teknologi mutakhir dan konten berkualitas.
                    </p>
                    <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">
                        Dengan fitur video pembelajaran, kuis interaktif, dan
                        forum diskusi, EduWeb mendukung pembelajaran mandiri dan kolaboratif. Bergabunglah dan
                        eksplorasi potensi belajar Anda!
                    </p>
                    <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0">
                        <a href="#"
                            class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                            Mulai Sekarang
                            <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                        <a href="#"
                            class="py-3 px-5 sm:ms-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                            Pelajari Lebih Lanjut
                        </a>
                    </div>
                </div>

                <div>
                    <iframe class="mx-auto w-full lg:max-w-xl h-64 rounded-lg sm:h-96 shadow-xl"
                        src="https://www.youtube.com/embed/KaLxCiilHns" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>

        </div>
    </section>
    {{-- Introduction Section End --}}

    <section class="mt-5">
        <div class="container bg-white rounded-3xl shadow-2xl mx-auto p-4">
            <div class="text-center mb-6">
                <p class="mb-3 text-xl text-gray-500 dark:text-gray-400">
                    Kami adalah platform edukasi yang bertujuan untuk memberikan akses mudah kepada pengguna untuk
                    belajar dan mengelola pengetahuan mereka. Dengan berbagai fitur seperti registrasi pengguna,
                    pengelolaan materi, ujian, dan manajemen skor, kami berkomitmen untuk meningkatkan pengalaman
                    belajar secara keseluruhan.
                </p>
            </div>
            <div class="grid grid-cols-1 md:gap-6 md:grid-cols-2">
                <div>
                    <blockquote class="mb-3">
                        <p class="text-xl italic font-semibold text-gray-900 dark:text-white">
                            "Kami percaya bahwa pendidikan adalah kunci untuk masa depan yang lebih baik. Dengan
                            platform kami, kami ingin memberikan alat yang diperlukan bagi setiap individu untuk
                            mencapai potensi maksimal mereka."
                        </p>
                    </blockquote>
                </div>
                <div>
                    <p class="mb-3 text-xl text-gray-500 dark:text-gray-400">
                        Kami menghubungkan siswa, pengajar, dan administrator dalam ekosistem belajar yang kolaboratif.
                        Dengan pendekatan yang inovatif dan sumber daya yang lengkap, kami berusaha untuk menciptakan
                        lingkungan belajar yang inspiratif dan efektif bagi semua pengguna.
                    </p>
                </div>
            </div>
            <div class="mt-6">
                <p class="mb-3 text-xl text-gray-500 dark:text-gray-400">
                    Bergabunglah dengan kami untuk menjelajahi materi pembelajaran yang beragam, berpartisipasi dalam
                    ujian yang menantang, dan mengukur kemajuan Anda. Kami di sini untuk mendukung perjalanan pendidikan
                    Anda dengan cara yang mudah dan menyenangkan.
                </p>
            </div>
        </div>
    </section>

    <section class="container bg-white dark:bg-gray-900 mx-auto mt-5 rounded-3xl shadow-2xl px-4">
        <div class="py-4 px-4 mx-auto max-w-screen-xl lg:py-8">
            <div
                class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12 mb-8">
                <h1 class="text-gray-900 dark:text-white text-3xl md:text-5xl font-extrabold mb-2">Visi dan Misi EduWeb
                </h1>
                <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-6">
                    EduWeb bertujuan untuk menjadi platform edukasi terdepan yang menyediakan akses mudah dan
                    berkualitas kepada semua individu untuk mendapatkan pengetahuan dan keterampilan yang dibutuhkan
                    dalam dunia modern.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- Visi Card -->
                <div
                    class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
                    <h2 class="text-gray-900 text-xl dark:text-white font-extrabold mb-2">Visi EduWeb
                    </h2>
                    <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-6">
                        Visi kami adalah menciptakan masyarakat yang terdidik dan berdaya saing tinggi melalui
                        pembelajaran yang inovatif dan terjangkau, serta menjangkau berbagai lapisan masyarakat.
                    </p>
                </div>

                <!-- Misi Card -->
                <div
                    class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
                    <h2 class="text-gray-900 text-xl dark:text-white font-extrabold mb-2">Misi EduWeb
                    </h2>

                    <p class="text-lg font-normal text-gray-500 dark:text-gray-400">
                        Misi kami meliuti:
                    </p>
                    <ul class="list-disc list-inside mt-2">
                        <li>Menyediakan materi pembelajaran berkualitas dan relevan.</li>
                        <li>Membangun komunitas belajar untuk kolaborasi.</li>
                        <li>Mendorong penggunaan teknologi dalam pendidikan.</li>
                        <li>Menjamin transparansi dalam ujian dan penilaian.</li>
                        <li>Mendukung individu mencapai potensi terbaik melalui umpan balik.</li>
                    </ul>

                </div>
            </div>
        </div>
    </section>



</x-UserLayout>
