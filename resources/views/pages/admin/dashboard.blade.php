<x-AdminLayout>
    {{-- Login Success Alert Modal Start --}}
    @if (session('loginSuccess'))
        <div id="loginModal"
            class="fixed inset-0 flex items-center justify-center z-50 bg-gray-900 bg-opacity-75 transition-opacity duration-500 ease-in-out">
            <div
                class="p-4 text-white border border-green-300 rounded-xl bg-gradient-to-r from-green-400 via-teal-500 to-green-600 shadow-lg dark:bg-gray-800 dark:border-green-800 transition-transform duration-300 ease-in-out transform hover:scale-105 max-w-sm w-full">
                <div class="flex items-center">
                    <svg class="flex-shrink-0 w-6 h-6 mr-2 text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 18a8 8 0 1 1 8-8 8.009 8.009 0 0 1-8 8Zm-1-13h2v6h-2V5Zm0 8h2v2h-2v-2Z" />
                    </svg>
                    <h3 class="text-lg font-semibold text-white tracking-wide">Login Berhasil!</h3>
                </div>
                <div class="mt-2 mb-4 text-sm text-white leading-relaxed">
                    {{ session('loginSuccess') }}
                </div>
                <div class="flex justify-end">
                    <button type="button"
                        class="text-white bg-gradient-to-br from-cyan-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-xs px-4 py-2 transition-transform duration-300 ease-in-out hover:scale-110 shadow-md"
                        onclick="document.getElementById('loginModal').style.display='none'">
                        Close
                    </button>
                </div>
            </div>
        </div>
    @endif
    {{-- Login Success Alert Modal End --}}

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
        <div class="container mx-auto px-4">
            <blockquote
                class="inline-block p-4 my-4 rounded-r-3xl border-blue-900 border-l-8 bg-gray-50 dark:border-blue-950 dark:bg-gray-800">
                <p class="text-xl italic font-bold leading-relaxed text-gray-900 dark:text-white">"Manajement Account"
                </p>
            </blockquote>
        </div>
    </section>

    {{-- User Counts Section Start --}}
    <section class="mt-5">
        <div class="container mx-auto px-4">
            <div
                class="px-4 py-5 rounded-2xl shadow-2xl bg-white space-y-6 md:grid md:grid-cols-3 lg:grid-cols-3 md:gap-8 md:space-y-0">

                {{-- Total Users --}}
                <div class="flex flex-col items-center">
                    <div
                        class="flex justify-center items-center mb-4 w-20 h-20 bg-primary-100 lg:h-24 lg:w-24 dark:bg-primary-900">
                        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Total Users"
                            class="rounded-full w-16 h-16 lg:w-20 lg:h-20">
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white text-center">Total Users</h3>
                    <p class="text-gray-500 dark:text-gray-400 text-center">
                        {{ $totalUsers }} Pengguna
                    </p>
                </div>

                {{-- Total Students --}}
                <div class="flex flex-col items-center">
                    <div
                        class="flex justify-center items-center mb-4 w-20 h-20 bg-primary-100 lg:h-24 lg:w-24 dark:bg-primary-900">
                        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135823.png" alt="Total Students"
                            class="rounded-full w-16 h-16 lg:w-20 lg:h-20">
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white text-center">Total Students</h3>
                    <p class="text-gray-500 dark:text-gray-400 text-center">
                        {{ $totalStudents }} Siswa
                    </p>
                </div>

                {{-- Total Admins/Teachers --}}
                <div class="flex flex-col items-center">
                    <div
                        class="flex justify-center items-center mb-4 w-20 h-20 bg-primary-100 lg:h-24 lg:w-24 dark:bg-primary-900">
                        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135733.png" alt="Total Admins/Teachers"
                            class="rounded-full w-16 h-16 lg:w-20 lg:h-20">
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white text-center">Total Admins/Teachers</h3>
                    <p class="text-gray-500 dark:text-gray-400 text-center">
                        {{ $totalAdmins }} Admin/Teacher
                    </p>
                </div>
            </div>
        </div>
    </section>
    {{-- User Counts Section End --}}

    <div class="container mx-auto px-4 mt-5">
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach ($studyMaterials as $materi)
                    <div class="swiper-slide">
                        <div
                            class="max-w-sm bg-white border border-gray-200 rounded-2xl shadow dark:bg-gray-800 dark:border-gray-700">
                            <div class="relative">
                                <a href="#">
                                    <img class="rounded-t-2xl" src="{{ asset('storage/' . $materi->materi_image) }}"
                                        alt="materi image" />
                                </a>
                                <div class="absolute top-2 right-2 flex space-x-1">
                                    <!-- Button Update -->
                                    <a href="/study-materials/update/{{ $materi->id }}"
                                        class="inline-flex items-center justify-center w-8 h-8 text-white bg-yellow-200 rounded-full hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                        <i class="fas fa-edit"></i> <!-- Icon for update -->
                                    </a>

                                    <!-- Button Delete -->
                                    <form action="/admin/materi/delete/{{ $materi->id }}" method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this item?');">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit"
                                            class="inline-flex items-center justify-center w-8 h-8 text-white bg-red-600 rounded-full hover:bg-green-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                            <i class="fas fa-trash-alt"></i> <!-- Icon for delete -->
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                                        {{ $materi->judul_materi }}</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Swiper Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <script>
        var swiper = new Swiper('.mySwiper', {
            slidesPerView: 1, // Ganti ini jika ingin menampilkan lebih dari 1 slide sekaligus
            spaceBetween: 10,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 1, // Set untuk tampilan mobile
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2, // Set untuk tablet
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 3, // Set untuk desktop
                    spaceBetween: 50,
                },
            },
        });
    </script>




</x-AdminLayout>
