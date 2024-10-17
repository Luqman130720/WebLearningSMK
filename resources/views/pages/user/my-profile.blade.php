<x-UserLayout>

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

    {{-- Ujian Success Alert Modal Start --}}
    @if (session('ujianSucces'))
        <div id="ujianModal"
            class="fixed inset-0 flex items-center justify-center z-50 bg-gray-900 bg-opacity-75 transition-opacity duration-500 ease-in-out">
            <div
                class="p-4 text-white border border-green-300 rounded-xl bg-gradient-to-r from-green-400 via-teal-500 to-green-600 shadow-lg dark:bg-gray-800 dark:border-green-800 transition-transform duration-300 ease-in-out transform hover:scale-105 max-w-sm w-full">
                <div class="flex items-center">
                    <svg class="flex-shrink-0 w-6 h-6 mr-2 text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 18a8 8 0 1 1 8-8 8.009 8.009 0 0 1-8 8Zm-1-13h2v6h-2V5Zm0 8h2v2h-2v-2Z" />
                    </svg>
                    <h3 class="text-lg font-semibold text-white tracking-wide">Ujian Selesai! Nilai Anda:
                        {{ $nilai }} </h3>
                </div>
                <div class="mt-2 mb-4 text-sm text-white leading-relaxed">
                    {{ session('ujianSucces') }}
                </div>
                <div class="flex justify-end">
                    <button type="button"
                        class="text-white bg-gradient-to-br from-cyan-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-xs px-4 py-2 transition-transform duration-300 ease-in-out hover:scale-110 shadow-md"
                        onclick="document.getElementById('ujianModal').style.display='none'">
                        Close
                    </button>
                </div>
            </div>
        </div>
    @endif
    {{-- Ujian Success Alert Modal End --}}




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
                                    Kami di Eduweb percaya bahwa pendidikan adalah kunci untuk membuka potensi setiap
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
                                    Di Eduweb, kami menghadirkan sumber daya pendidikan yang mudah diakses untuk semua
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
                <p class="text-xl italic font-bold leading-relaxed text-gray-900 dark:text-white">"My Profile"</p>
            </blockquote>
        </div>
    </section>

    <section class="mt-5">
        <div class="container mx-auto px-4">
            <section class="mx-auto rounded-3xl shadow-2xl bg-white p-8 relative z-10">
                <div class="py-8 px-4 text-center">
                    <h2 class="mb-6 text-3xl font-bold">Profil Saya</h2>
                    @if (session('success'))
                        <div class="bg-green-500 text-white p-2 rounded mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('user.updateProfile') }}" method="POST" enctype="multipart/form-data"
                        class="w-full max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6">
                        @csrf
                        @method('PUT')

                        <!-- Kolom Kiri: Nama dan Email -->
                        <div class="space-y-6">
                            <div class="mb-6">
                                <label for="nama_lengkap"
                                    class="flex mb-2 text-sm text-left font-medium text-gray-900 dark:text-white">Nama
                                    Lengkap</label>
                                <input type="text" id="nama_lengkap" name="nama_lengkap"
                                    value="{{ auth()->user()->nama_lengkap }}"
                                    class="block w-full p-3 text-sm border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-white"
                                    placeholder="Nama lengkap Anda" required />
                            </div>

                            <div class="mb-6">
                                <label for="username"
                                    class="flex text-left mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                                <input type="text" id="username" name="username"
                                    value="{{ auth()->user()->username }}"
                                    class="block w-full p-3 text-sm border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-white"
                                    placeholder="Username Anda" required />
                            </div>

                            <div class="mb-6">
                                <label for="email"
                                    class="flex text-left mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                <input type="email" id="email" name="email"
                                    value="{{ auth()->user()->email }}"
                                    class="block w-full p-3 text-sm border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-white"
                                    placeholder="email@example.com" required />
                            </div>

                            <div class="mb-6">
                                <label for="nomor_telepon"
                                    class="flex text-left mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                                    Telepon</label>
                                <input type="text" id="nomor_telepon" name="nomor_telepon"
                                    value="{{ auth()->user()->nomor_telepon }}"
                                    class="block w-full p-3 text-sm border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-white"
                                    placeholder="Nomor telepon Anda" required />
                            </div>

                            <div class="mb-6">
                                <label for="tanggal_lahir"
                                    class="flex text-left mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                                    Lahir</label>
                                <input type="date" id="tanggal_lahir" name="tanggal_lahir"
                                    value="{{ auth()->user()->tanggal_lahir }}"
                                    class="block w-full p-3 text-sm border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-white"
                                    required />
                            </div>
                        </div>

                        <!-- Kolom Kanan: Gambar Profil -->
                        <div class="mb-6">
                            <label for="image"
                                class="flex text-left mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar
                                Profil</label>
                            <input type="file" id="image" name="image" accept="image/*"
                                class="block w-full text-sm border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:bg-gray-800 dark:border-gray-700 dark:text-white"
                                onchange="previewImage(event)">

                            <!-- Tampilkan gambar profil atau gambar default -->
                            <img id="imagePreview"
                                src="{{ auth()->user()->image ? asset('storage/' . auth()->user()->image) : 'https://static.vecteezy.com/system/resources/thumbnails/007/522/853/small_2x/business-man-icon-for-your-web-profile-free-vector.jpg' }}"
                                alt="Profile Image" class="mt-2 w-32 h-32 object-cover rounded-lg">
                        </div>

                        <!-- Tombol Submit -->
                        <div class="col-span-2">
                            <button type="submit"
                                class="w-full text-white uppercase font-bold bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-sm px-5 py-3 text-center dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800">
                                Update Profil
                            </button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </section>

    <script>
        document.getElementById('image').addEventListener('change', function(event) {
            const imagePreview = document.getElementById('imagePreview');
            const file = event.target.files[0];

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                }
                reader.readAsDataURL(file);
            } else {
                imagePreview.src =
                    "auth()->user()->image ? asset('storage/image-profil/' . auth()->user()->image) : 'https://static.vecteezy.com/system/resources/thumbnails/007/522/853/small_2x/business-man-icon-for-your-web-profile-free-vector.jpg";
            }
        });
    </script>



</x-UserLayout>
