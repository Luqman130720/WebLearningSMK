<x-UserLayout>

    <body class="bg-subtle-pattern bg-repeat bg-custom-small">
        {{-- Alert Start --}}
        @if (session('success'))
            <section class="mt-3">
                <div class="container mx-auto px-4">
                    <div id="alert-additional-content-3"
                        class="p-4 mb-4 text-white border border-green-300 rounded-xl bg-gradient-to-r from-emerald-500 via-teal-500 to-green-600 shadow-lg dark:bg-gray-800 dark:border-green-800 transition-all duration-300 ease-in-out transform hover:scale-105"
                        role="alert">
                        <div class="flex items-center">
                            <svg class="flex-shrink-0 w-6 h-6 me-2 text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                            </svg>
                            <span class="sr-only">Info</span>
                            <h3 class="text-lg font-semibold text-white tracking-wide">{{ session('success') }}</h3>
                        </div>
                        <div class="mt-2 mb-4 text-sm text-white leading-relaxed">
                            Terima kasih atas aspirasi yang telah Anda kirimkan! Kami akan meninjau pesan Anda
                            secepatnya.
                        </div>
                        <div class="flex">
                            <button type="button"
                                class="text-white bg-gradient-to-br from-cyan-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-xs px-4 py-2 transition duration-300 ease-in-out hover:scale-110 shadow-md"
                                data-dismiss-target="#alert-additional-content-3" aria-label="Close">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </section>
        @endif
        {{-- Alert End --}}


        {{-- Error Alert Modal Start --}}
        @if ($errors->has('loginError'))
            <div id="errorModal" class="fixed inset-0 flex items-center justify-center z-50 bg-opacity-70 bg-gray-900">
                <div
                    class="p-4 text-white border border-red-400 rounded-xl bg-gradient-to-r from-red-600 via-red-500 to-red-700 shadow-lg dark:bg-gray-800 dark:border-red-800 transition-all duration-300 ease-in-out transform hover:scale-105 max-w-sm w-full">
                    <div class="flex items-center">
                        <svg class="flex-shrink-0 w-6 h-6 mr-2 text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 18a8 8 0 1 1 8-8 8.009 8.009 0 0 1-8 8Zm-1-13h2v6h-2V5Zm0 8h2v2h-2v-2Z" />
                        </svg>
                        <h3 class="text-lg font-semibold text-white tracking-wide">Login gagal!</h3>
                    </div>
                    <div class="mt-2 mb-4 text-sm text-white leading-relaxed">
                        {{ $errors->first('loginError') }}
                    </div>
                    <div class="flex justify-end">
                        <button type="button"
                            class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-xs px-4 py-2 transition-transform duration-300 ease-in-out hover:scale-110 shadow-md"
                            onclick="document.getElementById('errorModal').style.display='none'">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        @endif
        {{-- Error Alert Modal End --}}


        {{-- Logout Success Alert Modal Start --}}
        @if (session('LogoutSuccess'))
            <div id="logoutModal"
                class="fixed inset-0 flex items-center justify-center z-50 bg-gray-900 bg-opacity-75 transition-opacity duration-500 ease-in-out">
                <div
                    class="p-4 text-white border border-green-300 rounded-xl bg-gradient-to-r from-green-400 via-teal-500 to-green-600 shadow-lg dark:bg-gray-800 dark:border-green-800 transition-transform duration-300 ease-in-out transform hover:scale-105 max-w-sm w-full">
                    <div class="flex items-center">
                        <svg class="flex-shrink-0 w-6 h-6 mr-2 text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 18a8 8 0 1 1 8-8 8.009 8.009 0 0 1-8 8Zm-1-13h2v6h-2V5Zm0 8h2v2h-2v-2Z" />
                        </svg>
                        <h3 class="text-lg font-semibold text-white tracking-wide">Logout Berhasil!</h3>
                    </div>
                    <div class="mt-2 mb-4 text-sm text-white leading-relaxed">
                        {{ session('LogoutSuccess') }}
                    </div>
                    <div class="flex justify-end">
                        <button type="button"
                            class="text-white bg-gradient-to-br from-cyan-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-xs px-4 py-2 transition-transform duration-300 ease-in-out hover:scale-110 shadow-md"
                            onclick="document.getElementById('logoutModal').style.display='none'">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        @endif
        {{-- Logout Success Alert Modal End --}}









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
                            src="https://www.youtube.com/embed/KaLxCiilHns" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>

            </div>
        </section>
        {{-- Introduction Section End --}}

        <section class="mt-5">
            <div class="container mx-auto px-4">
                <blockquote
                    class="inline-block p-4 my-4 rounded-r-3xl border-blue-900 border-l-8 bg-gray-50 dark:border-blue-950 dark:bg-gray-800">
                    <p class="text-xl italic font-bold leading-relaxed text-gray-900 dark:text-white">"Eksplorasi Fitur
                        EduWeb"</p>
                </blockquote>
            </div>
        </section>

        {{-- Features List Start --}}
        <section class="mt-5">
            <div class="container mx-auto px-4">
                <div
                    class="px-4 py-5 rounded-2xl shadow-2xl bg-white space-y-6 md:grid md:grid-cols-2 lg:grid-cols-4 md:gap-8 md:space-y-0">
                    <div class="flex flex-col items-center">
                        <div
                            class="flex justify-center items-center mb-4 w-20 h-20 bg-primary-100 lg:h-24 lg:w-24 dark:bg-primary-900">
                            <img src="https://binus.ac.id/wp-content/uploads/2021/09/226-1-aksiamalcom-768x576.jpg"
                                alt="Materi" class="rounded-full w-16 h-16 lg:w-20 lg:h-20">
                        </div>
                        <h3 class="mb-2 text-xl font-bold dark:text-white text-center">Materi</h3>
                        <p class="text-gray-500 dark:text-gray-400 text-center">
                            Akses berbagai materi pembelajaran interaktif untuk memahami konsep dengan lebih baik.
                        </p>
                    </div>

                    <div class="flex flex-col items-center">
                        <div
                            class="flex justify-center items-center mb-4 w-20 h-20 bg-primary-100 lg:h-24 lg:w-24 dark:bg-primary-900">
                            <img src="https://www.shutterstock.com/image-illustration/quiz-check-question-marks-sign-260nw-1702030960.jpg"
                                alt="Kuis Interaktif" class="rounded-full w-16 h-16 lg:w-20 lg:h-20">
                        </div>
                        <h3 class="mb-2 text-xl font-bold dark:text-white text-center">Kuis Interaktif</h3>
                        <p class="text-gray-500 dark:text-gray-400 text-center">
                            Uji pengetahuan Anda dengan kuis interaktif yang menarik dan menantang.
                        </p>
                    </div>
                    <div class="flex flex-col items-center">
                        <div
                            class="flex justify-center items-center mb-4 w-20 h-20 bg-primary-100 lg:h-24 lg:w-24 dark:bg-primary-900">
                            <img src="https://5.imimg.com/data5/YU/FO/MY-19589914/group-discussion.png"
                                alt="Forum Diskusi" class="rounded-full w-16 h-16 lg:w-20 lg:h-20">
                        </div>
                        <h3 class="mb-2 text-xl font-bold dark:text-white text-center">Forum Diskusi</h3>
                        <p class="text-gray-500 dark:text-gray-400 text-center">
                            Bergabunglah dengan forum diskusi untuk berbagi ide dan bertanya kepada sesama siswa.
                        </p>
                    </div>
                    <div class="flex flex-col items-center">
                        <div
                            class="flex justify-center items-center mb-4 w-20 h-20 bg-primary-100 lg:h-24 lg:w-24 dark:bg-primary-900">
                            <img src="https://images.tokopedia.net/img/cache/700/product-1/2016/11/17/1605465/1605465_69b32f6c-3b5b-4549-8913-08328045c90e"
                                alt="Kritik dan Saran" class="rounded-full w-16 h-16 lg:w-20 lg:h-20">
                        </div>
                        <h3 class="mb-2 text-xl font-bold dark:text-white text-center">Kritik dan Saran</h3>
                        <p class="text-gray-500 dark:text-gray-400 text-center">
                            Berikan kritik dan saran untuk membantu kami meningkatkan kualitas platform.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        {{-- Features List End --}}

        <section class="mt-5">
            <div class="container mx-auto px-4">
                <blockquote
                    class="inline-block p-4 my-4 rounded-r-3xl border-blue-900 border-l-8 bg-gray-50 dark:border-blue-950 dark:bg-gray-800">
                    <p class="text-xl italic font-bold leading-relaxed text-gray-900 dark:text-white">"Testimoni dan
                        Opini"
                    </p>
                </blockquote>
            </div>
        </section>

        {{-- Testimonial Section Start --}}
        <section class="mt-5">
            <div class="container mx-auto px-4">
                <div class="bg-white shadow-2xl rounded-3xl md:gap-4 lg:flex lg:items-start xl:gap-6">

                    {{-- Testimonial Section Start --}}
                    <div class="mx-auto max-w-4xl flex-1 space-y-4 lg:mt-0">
                        <div class="space-y-4 p-4 dark:border-gray-700 dark:bg-gray-800">
                            <p class="text-2xl font-bold text-gray-900 dark:text-white">Apa Kata Mereka</p>
                            <div class="space-y-4">
                                <a href="#"
                                    class="flex flex-col items-center bg-white border-gray-200 md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                    <img class="object-cover w-full h-96 md:h-auto md:w-48 rounded-2xl p-2"
                                        src="https://www.shutterstock.com/image-photo/students-graduation-caps-sky-happiness-600nw-2475380851.jpg"
                                        alt="">
                                    <div class="flex flex-col justify-between p-2 leading-normal">
                                        <h5
                                            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                            Andi Prasetyo</h5>
                                        <p class="font-normal text-gray-700 dark:text-gray-400">
                                            "EduWeb telah mengubah cara saya belajar. Dengan video pembelajaran dan kuis
                                            interaktif, saya bisa memahami materi dengan lebih cepat dan menyenangkan!"
                                        </p>
                                    </div>
                                </a>
                            </div>

                            <div class="space-y-4">
                                <a href="#"
                                    class="flex flex-col items-center bg-white border-gray-200 md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                    <img class="object-cover w-full h-96 md:h-auto md:w-48 rounded-2xl p-2"
                                        src="https://www.shutterstock.com/image-photo/students-graduation-caps-sky-happiness-600nw-2475380851.jpg"
                                        alt="">
                                    <div class="flex flex-col justify-between p-2 leading-normal">
                                        <h5
                                            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                            Siti Aisyah</h5>
                                        <p class="font-normal text-gray-700 dark:text-gray-400">
                                            "Platform ini sangat membantu saya dalam mempersiapkan ujian. Materi yang
                                            disajikan sangat relevan dan mudah diakses kapan saja."
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    {{-- Testimonial Section End --}}

                    {{-- Information Section Start --}}
                    <div class="mx-auto max-w-4xl flex-1 space-y-6 lg:mt-0 lg:w-full">
                        <div class="space-y-4 p-4 sm:p-6">
                            <p class="text-2xl font-bold text-gray-900 dark:text-white">Pusat Informasi</p>

                            <div class="space-y-4">
                                <div
                                    class="p-4 bg-white border border-gray-200 rounded-xl shadow dark:bg-gray-800 dark:border-gray-700">
                                    <a href="#">
                                        <h5
                                            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                            Mengenal EduWeb Lebih Dekat</h5>
                                    </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                        "EduWeb adalah solusi pembelajaran yang dirancang untuk meningkatkan
                                        keterampilan
                                        dan pengetahuan Anda. Dengan berbagai fitur inovatif, kami berkomitmen untuk
                                        membantu Anda mencapai potensi maksimal."
                                    </p>
                                    <a href="#"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Pelajari lebih lanjut
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="space-y-4">
                                <div
                                    class="p-4 bg-white border border-gray-200 rounded-xl shadow dark:bg-gray-800 dark:border-gray-700">
                                    <a href="#">
                                        <h5
                                            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                            Fitur Interaktif Kami</h5>
                                    </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                        "Dari video pembelajaran hingga forum diskusi, EduWeb menawarkan berbagai fitur
                                        yang
                                        mendukung pengalaman belajar yang efektif dan menyenangkan."
                                    </p>
                                    <a href="#"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Temukan lebih banyak fitur
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
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
                    {{-- Information Section End --}}

                </div>
            </div>
        </section>
        {{-- Testimonial Section End --}}

        <section class="mt-5">
            <div class="container mx-auto px-4">
                <blockquote
                    class="inline-block p-4 my-4 rounded-r-3xl border-blue-900 border-l-8 bg-gray-50 dark:border-blue-950 dark:bg-gray-800">
                    <p class="text-xl italic font-bold leading-relaxed text-gray-900 dark:text-white">"Kami menghargai
                        pendapat Anda. Sampaikan saran, kritik, dan masukan untuk meningkatkan kualitas layanan kami. "
                    </p>
                </blockquote>
            </div>
        </section>



    </body>

</x-UserLayout>
