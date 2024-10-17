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
                <p class="text-xl italic font-bold leading-relaxed text-gray-900 dark:text-white">"Account Profile"</p>
            </blockquote>
        </div>
    </section>

    <div class="container mx-auto px-4 py-6">

        @if (session('success'))
            <div class="mb-4 text-green-600">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('account-profile.update') }}" method="POST" class="space-y-4"
            enctype="multipart/form-data">
            @csrf

            <!-- Full Name -->
            <div class="mb-6">
                <label for="nama_lengkap" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full
                    Name</label>
                <input type="text" name="nama_lengkap" id="nama_lengkap" required
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    value="{{ old('nama_lengkap', $user->nama_lengkap) }}" placeholder="Enter your full name">
            </div>

            <!-- Username -->
            <div class="mb-6">
                <label for="username"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                <input type="text" name="username" id="username" required
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    value="{{ old('username', $user->username) }}" placeholder="Enter your username">
            </div>

            <!-- Email -->
            <div class="mb-6">
                <label for="email"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="email" name="email" id="email" required
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    value="{{ old('email', $user->email) }}" placeholder="Enter your email">
            </div>

            <!-- Phone Number -->
            <div class="mb-6">
                <label for="nomor_telepon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                    Number</label>
                <input type="text" name="nomor_telepon" id="nomor_telepon" required
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    value="{{ old('nomor_telepon', $user->nomor_telepon) }}" placeholder="Enter your phone number">
            </div>

            <!-- Date of Birth -->
            <div class="mb-6">
                <label for="tanggal_lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date
                    of Birth</label>
                <input type="date" name="tanggal_lahir" id="tanggal_lahir" required
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    value="{{ old('tanggal_lahir', $user->tanggal_lahir) }}">
            </div>

            <!-- Profile Image -->
            <div class="mb-6">
                <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Profile
                    Image</label>
                <input type="file" name="image" id="image" accept="image/*"
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    onchange="previewImage(event)">

                <img id="imagePreview"
                    src="{{ $user->image ? asset('storage/image-profil/' . $user->image) : 'https://static.vecteezy.com/system/resources/thumbnails/007/522/853/small_2x/business-man-icon-for-your-web-profile-free-vector.jpg' }}"
                    alt="Profile Image" class="mt-2 w-32 h-32 object-cover rounded-lg">
            </div>

            <script>
                function previewImage(event) {
                    const imagePreview = document.getElementById('imagePreview');
                    const file = event.target.files[0];

                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            imagePreview.src = e.target.result;
                        }
                        reader.readAsDataURL(file);
                    } else {
                        // Set to default image if no file is selected
                        imagePreview.src =
                            "https://static.vecteezy.com/system/resources/thumbnails/007/522/853/small_2x/business-man-icon-for-your-web-profile-free-vector.jpg";
                    }
                }
            </script>







            <!-- Submit Button -->
            <button type="submit" class="bg-blue-600 text-white font-bold py-2 px-4 rounded">Update Profile</button>
        </form>
    </div>




</x-AdminLayout>
