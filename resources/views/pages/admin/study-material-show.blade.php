<x-AdminLayout>

    <div class=" dark:bg-gray-800 dark:border-gray-600">
        <div class="grid max-w-screen-xl py-5 mx-auto text-sm text-gray-500 dark:text-gray-400">
            <a href="/admin/materi/create"
                class="p-4 bg-local bg-gray-500 bg-center bg-no-repeat bg-cover rounded-lg bg-blend-multiply hover:bg-blend-soft-light dark:hover:bg-blend-darken"
                style="background-image: url(https://png.pngtree.com/thumb_back/fw800/background/20240106/pngtree-mountain-river-beautiful-nature-image_15576027.jpg)">
                <p class="max-w-xl mb-5 font-extrabold leading-tight tracking-tight text-white">Preview the new Flowbite
                    dashboard navigation.</p>
                <button type="button"
                    class="inline-flex items-center px-2.5 py-1.5 text-xs font-medium text-center text-white border border-white rounded-lg hover:bg-white hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-700">
                    Tambahkan Materi
                    <svg class="w-3 h-3 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </button>
            </a>
        </div>


        <section class="bg-white dark:bg-gray-900">



            <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
                <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
                    <article
                        class="mx-4 w-full max-w-screen-xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                        <header class="mb-4 lg:mb-6 not-format">
                            <address class="flex items-center mb-6 not-italic">
                                <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                                    @if ($showMateri->author && $showMateri->author->image)
                                        <img class="mr-4 w-16 h-16 rounded-full"
                                            src="{{ asset('storage/' . $showMateri->author->image) }}"
                                            alt="{{ $showMateri->author->name }}">
                                    @else
                                        <img class="mr-4 w-16 h-16 rounded-full" src="{{ asset('default-avatar.png') }}"
                                            alt="Default Avatar">
                                    @endif
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
                        {{-- <iframe class="w-full h-64 md:h-96 rounded-2xl shadow-lg mb-5"
                            src="{{ $showMateri->youtube_url }}" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe> --}}
                        @php
                            // Mengubah URL pendek menjadi URL embed
                            $videoUrl = str_replace('youtu.be', 'youtube.com/embed', $showMateri->youtube_url);
                        @endphp

                        <iframe class="w-full h-64 md:h-96 rounded-2xl shadow-lg mb-5" src="{{ $videoUrl }}"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>



                        <h2>Materi Pelajaran</h2>
                        <div class="flex flex-col md:flex-row items-start md:items-center">
                            <img class="object-cover rounded-2xl shadow-lg mb-4 md:mb-0 md:mr-4 w-full h-auto md:h-44"
                                src="{{ asset('storage/' . $showMateri->ilustrasi_materi_image) }}" alt="">

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
                                src="{{ asset('storage/' . $showMateri->ilustrasi_materi_image2) }}" alt="">

                        </div>



                    </article>
                </div>
            </main>




        </section>
    </div>


</x-AdminLayout>
