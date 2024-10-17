<x-AdminLayout>

    <div class=" dark:bg-gray-800 dark:border-gray-600">
        <!-- Section Header Start -->
        <div class="grid max-w-screen-xl py-5 mx-auto text-sm text-gray-500 dark:text-gray-400">
            <a href="/admin/materi/create"
                class="p-4 bg-local bg-gray-500 bg-center bg-no-repeat bg-cover rounded-lg bg-blend-multiply hover:bg-blend-soft-light dark:hover:bg-blend-darken"
                style="background-image: url(https://png.pngtree.com/thumb_back/fw800/background/20240106/pngtree-mountain-river-beautiful-nature-image_15576027.jpg)">
                <p class="max-w-xl mb-5 font-extrabold leading-tight tracking-tight text-white">Preview the new
                    Flowbite
                    dashboard navigation.</p>
                <button type="button"
                    class="inline-flex items-center px-2.5 py-1.5 text-xs font-medium text-center text-white border border-white rounded-lg  focus:ring-4 focus:outline-none focus:ring-gray-700">
                    Admin/Materi Controller/Update Materi
                </button>
            </a>
        </div>
        <!-- Section Header End -->

        {{-- New Section Start --}}
        <section class="bg-white px-4 rounded-2xl shadow-xl py-8 antialiased dark:bg-gray-900 md:py-16">
            <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
                <form method="POST" action="{{ url('/study-materials/update/' . $studyMaterial->id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <h2 class="text-center mb-8 text-2xl font-bold leading-none tracking-tight text-gray-900">
                        Update Materi</h2>

                    <div class="mt-6 sm:mt-8 lg:flex lg:items-start lg:gap-12 xl:gap-16">
                        <div class="min-w-0 flex-1 space-y-8">
                            <div class="space-y-4">

                                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                    <div>
                                        <label for="judul_materi"
                                            class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                                            Judul
                                            Materi </label>
                                        <input type="text" id="judul_materi" name="judul_materi"
                                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                            placeholder="Judul Materi" value="{{ $studyMaterial->judul_materi }}" />
                                    </div>

                                    <div>
                                        <label for=" your_email"
                                            class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"> ID
                                            Youtube </label>
                                        <input type="text" id="youtube_url" name="youtube_url"
                                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                            placeholder="Masukan ID Youtube Materi"
                                            value="{{ $studyMaterial->youtube_url }}" />
                                    </div>

                                    <div>
                                        <div class="mb-2 flex items-center gap-2">
                                            <label for="select-country-input-3"
                                                class="block text-sm font-medium text-gray-900 dark:text-white">
                                                Paragraf 1 </label>
                                        </div>
                                        <textarea type="text" id="paragraph1" name="paragraph1" rows="8"
                                            class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:placeholder-gray-400 dark:text-white"
                                            placeholder="Sampaikan materi pembelajaran di sini...">{{ $studyMaterial->paragraph1 }}</textarea>
                                    </div>

                                    <div>
                                        <div class="mb-2 flex items-center gap-2">
                                            <label for="paragraph2"
                                                class="block text-sm font-medium text-gray-900 dark:text-white">
                                                Paragraf 2
                                            </label>
                                        </div>
                                        <textarea type="text" id="paragraph2" name="paragraph2" rows="8"
                                            class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:placeholder-gray-400 dark:text-white"
                                            placeholder="Sampaikan materi pembelajaran di sini...">{{ $studyMaterial->paragraph2 }}</textarea>
                                    </div>
                                    <div>
                                        <div class="mb-2 flex items-center gap-2">
                                            <label for="paragraph3"
                                                class="block text-sm font-medium text-gray-900 dark:text-white">
                                                Paragraf 3
                                            </label>
                                        </div>
                                        <textarea type="text" id="paragraph3" name="paragraph3" rows="8"
                                            class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:placeholder-gray-400 dark:text-white"
                                            placeholder="Sampaikan materi pembelajaran di sini...">{{ $studyMaterial->paragraph3 }}</textarea>
                                    </div>
                                    <div>
                                        <div class="mb-2 flex items-center gap-2">
                                            <label for="paragraph4"
                                                class="block text-sm font-medium text-gray-900 dark:text-white">
                                                Paragraf 4
                                            </label>
                                        </div>
                                        <textarea type="text" id="paragraph4" name="paragraph4" rows="8"
                                            class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:placeholder-gray-400 dark:text-white"
                                            placeholder="Sampaikan materi pembelajaran di sini...">{{ $studyMaterial->paragraph4 }}</textarea>
                                    </div>




                                    <div class="sm:col-span-2">
                                        <div>
                                            <div class="mb-2 flex items-center gap-2">
                                                <label for="kesimpulan"
                                                    class="block text-sm font-medium text-gray-900 dark:text-white">
                                                    Kesimpulan
                                                </label>
                                            </div>
                                            <textarea type="text" id="kesimpulan" name="kesimpulan" rows="8"
                                                class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="Sampaikan materi pembelajaran di sini...">{{ $studyMaterial->kesimpulan }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="space-y-4">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Ilustrasi Materi</h3>
                                <p id="materi_image_text"
                                    class="mt-1 text-xs font-normal text-gray-500 dark:text-gray-400">
                                    Sesuaikan ilustrasi dengan materi anda
                                </p>

                                <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                                    <div
                                        class="rounded-lg border border-gray-200 bg-gray-50 p-4 ps-4 dark:border-gray-700 dark:bg-gray-800">
                                        <div class="flex items-start">
                                            <!-- File Input -->
                                            <input id="materi_image_input" name="materi_image" type="file"
                                                accept="image/*" onchange="previewImage(event, 'materi_image_preview')"
                                                class="hidden" />

                                            <!-- Upload Icon -->
                                            <label for="materi_image_input" class="cursor-pointer">
                                                <div
                                                    class="flex items-center justify-center w-10 h-10 text-white bg-blue-600 rounded-full hover:bg-blue-500">
                                                    <i class="fas fa-upload"></i> <!-- Upload icon (Font Awesome) -->
                                                </div>
                                            </label>

                                            <!-- Description -->
                                            <div class="ms-4 text-sm">
                                                <label for="materi_image_input"
                                                    class="font-medium leading-none text-gray-900 dark:text-white">
                                                    Profil Materi
                                                </label>
                                                <p class="mt-1 text-xs font-normal text-gray-500 dark:text-gray-400">
                                                    Sesuaikan ilustrasi dengan materi anda
                                                </p>
                                            </div>
                                        </div>

                                        <!-- Image Preview -->
                                        <div class="mt-4">
                                            <div
                                                class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 overflow-hidden">
                                                <img id="materi_image_preview"
                                                    src="{{ $studyMaterial->materi_image ? asset('storage/' . $studyMaterial->materi_image) : 'https://png.pngtree.com/thumb_back/fw800/background/20240106/pngtree-mountain-river-beautiful-nature-image_15576027.jpg' }}"
                                                    alt="Preview Ilustrasi Materi"
                                                    class="w-full h-full object-cover" />
                                            </div>
                                        </div>
                                    </div>


                                    <div
                                        class="rounded-lg border border-gray-200 bg-gray-50 p-4 ps-4 dark:border-gray-700 dark:bg-gray-800">
                                        <div class="flex items-start">
                                            <!-- File Input -->
                                            <input id="ilustrasi_materi_image_input" name="ilustrasi_materi_image"
                                                type="file" accept="image/*"
                                                onchange="previewImage(event, 'ilustrasi_materi_image_preview')"
                                                class="hidden" />

                                            <!-- Upload Icon -->
                                            <label for="ilustrasi_materi_image_input" class="cursor-pointer">
                                                <div
                                                    class="flex items-center justify-center w-10 h-10 text-white bg-blue-600 rounded-full hover:bg-blue-500">
                                                    <i class="fas fa-upload"></i> <!-- Upload icon (Font Awesome) -->
                                                </div>
                                            </label>

                                            <!-- Description -->
                                            <div class="ms-4 text-sm">
                                                <label for="ilustrasi_materi_image_input"
                                                    class="font-medium leading-none text-gray-900 dark:text-white">
                                                    Ilustrasi Materi 1
                                                </label>
                                                <p class="mt-1 text-xs font-normal text-gray-500 dark:text-gray-400">
                                                    Sesuaikan ilustrasi dengan materi anda
                                                </p>
                                            </div>
                                        </div>

                                        <!-- Image Preview -->
                                        <div class="mt-4">
                                            <div
                                                class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 overflow-hidden">
                                                <img id="ilustrasi_materi_image_preview"
                                                    src="{{ $studyMaterial->ilustrasi_materi_image ? asset('storage/' . $studyMaterial->ilustrasi_materi_image) : 'https://png.pngtree.com/thumb_back/fw800/background/20240106/pngtree-mountain-river-beautiful-nature-image_15576027.jpg' }}"
                                                    alt="Preview Ilustrasi Materi"
                                                    class="w-full h-full object-cover" />
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="rounded-lg border border-gray-200 bg-gray-50 p-4 ps-4 dark:border-gray-700 dark:bg-gray-800">
                                        <div class="flex items-start">
                                            <!-- File Input -->
                                            <input id="ilustrasi_materi_image_input2" name="ilustrasi_materi_image2"
                                                type="file" accept="image/*"
                                                onchange="previewImage(event, 'ilustrasi_materi_image_preview2')"
                                                class="hidden" />

                                            <!-- Upload Icon -->
                                            <label for="ilustrasi_materi_image_input2" class="cursor-pointer">
                                                <div
                                                    class="flex items-center justify-center w-10 h-10 text-white bg-blue-600 rounded-full hover:bg-blue-500">
                                                    <i class="fas fa-upload"></i> <!-- Upload icon (Font Awesome) -->
                                                </div>
                                            </label>

                                            <!-- Description -->
                                            <div class="ms-4 text-sm">
                                                <label for="ilustrasi_materi_image_input2"
                                                    class="font-medium leading-none text-gray-900 dark:text-white">
                                                    Ilustrasi Materi 2
                                                </label>
                                                <p class="mt-1 text-xs font-normal text-gray-500 dark:text-gray-400">
                                                    Sesuaikan ilustrasi dengan materi anda
                                                </p>
                                            </div>
                                        </div>

                                        <!-- Image Preview -->
                                        <div class="mt-4">
                                            <div
                                                class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 overflow-hidden">
                                                <img id="ilustrasi_materi_image_preview2"
                                                    src="{{ $studyMaterial->ilustrasi_materi_image2 ? asset('storage/' . $studyMaterial->ilustrasi_materi_image2) : 'https://png.pngtree.com/thumb_back/fw800/background/20240106/pngtree-mountain-river-beautiful-nature-image_15576027.jpg' }}"
                                                    alt="Preview Ilustrasi Materi"
                                                    class="w-full h-full object-cover" />
                                            </div>
                                        </div>
                                    </div>





                                </div>
                            </div>
                            <div class="sm:col-span-2 text-end">
                                <button type="submit"
                                    class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5">
                                    Update Materi
                                </button>
                            </div>


                        </div>
                    </div>
                </form>
            </div>
        </section>
        {{-- New Section End --}}

    </div>
</x-AdminLayout>
