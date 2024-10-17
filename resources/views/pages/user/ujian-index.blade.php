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
                    <p class="text-xl italic font-bold leading-relaxed text-gray-900 dark:text-white">"Ujian"</p>
                </blockquote>
            </div>
        </section>
        <section class="mt-5">
            <div class="container mx-auto px-4">
                <div class="bg-white shadow-2xl rounded-3xl md:gap-4 lg:items-start xl:gap-6">

                    <form action="{{ route('ujian.simpanJawaban') }}" method="POST">

                        @csrf
                        <input type="hidden" name="kategori_id" value="{{ $kategoriId }}">
                        @foreach ($soal as $key => $item)
                            <div class="mx-auto p-4 flex-1 space-y-4 lg:mt-0">
                                <div class="space-y-4 p-2 dark:border-gray-700 dark:bg-gray-800">
                                    <div
                                        class=" items-center bg-white border-gray-200 md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">

                                        <div class=" justify-between leading-normal">
                                            <h5
                                                class="mb-2 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                                {{ $key + 1 }}. {{ $item->pertanyaan }}</h5>
                                            @if ($item->gambar)
                                                <div class="mb-2">
                                                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="Gambar Soal"
                                                        class="w-40 h-40 rounded">
                                                </div>
                                            @endif
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="jawaban[{{ $item->id }}]" value="A"
                                                    id="jawaban_{{ $item->id }}_A">
                                                <label class="form-check-label" for="jawaban_{{ $item->id }}_A">A.
                                                    {{ $item->pilihan_a }}</label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="jawaban[{{ $item->id }}]" value="B"
                                                    id="jawaban_{{ $item->id }}_B">
                                                <label class="form-check-label"
                                                    for="jawaban_{{ $item->id }}_B">B.
                                                    {{ $item->pilihan_b }}</label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="jawaban[{{ $item->id }}]" value="C"
                                                    id="jawaban_{{ $item->id }}_C">
                                                <label class="form-check-label" for "jawaban_{{ $item->id }}_C">C.
                                                    {{ $item->pilihan_c }}</label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="jawaban[{{ $item->id }}]" value="D"
                                                    id="jawaban_{{ $item->id }}_D">
                                                <label class="form-check-label"
                                                    for="jawaban_{{ $item->id }}_D">D.
                                                    {{ $item->pilihan_d }}</label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="flex justify-end p-4">
                            <button type="submit"
                                class=" font-medium items-center text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                                onclick="return confirm('Apakah Anda yakin ingin menyelesaikan ujian dan mengakhiri?')">Kirim
                                Jawaban</button>
                        </div>

                    </form>



                </div>
            </div>
        </section>
    </body>
</x-UserLayout>
