    {{-- Aspiration Section Start --}}
    <section class="mt-5">
        <section
            class="mx-auto px-4 container rounded-3xl shadow-2x bg-white dark:bg-gray-900 p-8 relative z-10 bg-[url('https://pics.craiyon.com/2023-09-21/2a88ef38beb248bf974a4701c7c12575.webp')] bg-cover bg-center">

            <div class="py-8 px-4 mx-auto max-w-screen-lg text-center lg:py-2">
                <h1 class="mb-6 text-3xl font-bold text-white dark:text-white">Sampaikan saran Anda untuk
                    menginspirasi langkah-langkah besar</h1>
                <p class="mb-12 text-lg text-white dark:text-gray-300">
                    Kami sangat menghargai pendapat, saran, dan aspirasi Anda. Beritahu kami bagaimana kami bisa
                    meningkatkan layanan dan fitur dari Eduweb untuk memenuhi kebutuhan Anda.
                </p>
                <form method="POST" action="{{ url('/aspirasi/create') }}" enctype="multipart/form-data"
                    class="w-full max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6">
                    @csrf
                    <!-- Kolom Kiri: Nama dan Email -->
                    <div class="space-y-6">
                        <div class="mb-6">
                            <label for="nama_lengkap"
                                class="flex mb-2 text-sm text-left font-medium text-white dark:text-white">Nama
                                Anda</label>
                            <input type="text" id="nama_lengkap" name="nama_lengkap"
                                class="block w-full p-3 text-sm border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Nama lengkap Anda" required />
                        </div>

                        <div class="mb-6">
                            <label for="email"
                                class="flex text-left mb-2 text-sm font-medium text-white dark:text-white">Email
                                Anda</label>
                            <input type="email" id="email" name="email"
                                class="block w-full p-3 text-sm border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:placeholder-gray-400 dark:text-white"
                                placeholder="email@example.com" required />
                        </div>
                    </div>

                    <!-- Kolom Kanan: Pesan Aspirasi -->
                    <div class="mb-6">
                        <label for="pesan_aspirasi"
                            class="flex text-left mb-2 text-sm font-medium text-white dark:text-white">Pesan
                            Aspirasi</label>
                        <textarea type="text" id="pesan_aspirasi" name="pesan_aspirasi" rows="8"
                            class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Sampaikan pesan, kritik, atau saran Anda di sini..." required></textarea>
                    </div>

                    <!-- Tombol Submit (Mengisi dua kolom) -->
                    <div class="col-span-2">
                        <button type="submit"
                            class="w-full text-white uppercase font-bold bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-sm px-5 py-3 text-center dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800">
                            Kirim Aspirasi
                        </button>
                    </div>
                </form>
            </div>
        </section>

    </section>
    {{-- Aspiration Section End --}}
