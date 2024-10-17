<x-AdminLayout>

    {{-- Kategori Create Success Alert Modal Start --}}
    @if (session('kategoriSucces'))
        <div id="kategoriSucces"
            class="fixed inset-0 flex items-center justify-center z-50 bg-gray-900 bg-opacity-75 transition-opacity duration-500 ease-in-out">
            <div
                class="p-4 text-white border border-green-300 rounded-xl bg-gradient-to-r from-green-400 via-teal-500 to-green-600 shadow-lg dark:bg-gray-800 dark:border-green-800 transition-transform duration-300 ease-in-out transform hover:scale-105 max-w-sm w-full">
                <div class="flex items-center">
                    <svg class="flex-shrink-0 w-6 h-6 mr-2 text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 18a8 8 0 1 1 8-8 8.009 8.009 0 0 1-8 8Zm-1-13h2v6h-2V5Zm0 8h2v2h-2v-2Z" />
                    </svg>
                    <h3 class="text-lg font-semibold text-white tracking-wide">Kategori Berhasil Dibuat!</h3>
                </div>
                <div class="mt-2 mb-4 text-sm text-white leading-relaxed">
                    {{ session('kategoriSucces') }}
                </div>
                <div class="flex justify-end">
                    <button type="button"
                        class="text-white bg-gradient-to-br from-cyan-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-xs px-4 py-2 transition-transform duration-300 ease-in-out hover:scale-110 shadow-md"
                        onclick="document.getElementById('kategoriSucces').style.display='none'">
                        Close
                    </button>
                </div>
            </div>
        </div>
    @endif
    {{-- Kategori Create Success Alert Modal End --}}

    {{-- Kategori Delete Success Alert Modal Start --}}
    @if (session('kategoriDelete'))
        <div id="kategoriDelete"
            class="fixed inset-0 flex items-center justify-center z-50 bg-gray-900 bg-opacity-75 transition-opacity duration-500 ease-in-out">
            <div
                class="p-4 text-white border border-green-300 rounded-xl bg-gradient-to-r from-green-400 via-teal-500 to-green-600 shadow-lg dark:bg-gray-800 dark:border-green-800 transition-transform duration-300 ease-in-out transform hover:scale-105 max-w-sm w-full">
                <div class="flex items-center">
                    <svg class="flex-shrink-0 w-6 h-6 mr-2 text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 18a8 8 0 1 1 8-8 8.009 8.009 0 0 1-8 8Zm-1-13h2v6h-2V5Zm0 8h2v2h-2v-2Z" />
                    </svg>
                    <h3 class="text-lg font-semibold text-white tracking-wide">Kategori Berhasil Dihapus!</h3>
                </div>
                <div class="mt-2 mb-4 text-sm text-white leading-relaxed">
                    {{ session('kategoriDelete') }}
                </div>
                <div class="flex justify-end">
                    <button type="button"
                        class="text-white bg-gradient-to-br from-cyan-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-xs px-4 py-2 transition-transform duration-300 ease-in-out hover:scale-110 shadow-md"
                        onclick="document.getElementById('kategoriDelete').style.display='none'">
                        Close
                    </button>
                </div>
            </div>
        </div>
    @endif
    {{-- Kategori Delete Success Alert Modal End --}}

    <div class="container mx-auto p-6">
        <div class="relative overflow-x-auto shadow-2xl sm:rounded-2xl">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <div class="mb-5 mx-auto px-4">
                    <form action="{{ route('categories.store') }}" method="POST" class="mb-6 mx-auto px-4 mt-5">
                        @csrf
                        <label for="nama_kategori"
                            class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Buat Soal
                            Ujian</label>

                        <!-- Nama Kategori -->
                        <div class="relative mb-4">
                            <label for="nama_kategori"
                                class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Kategori Soal
                                Ujian</label>
                            <input type="text" name="nama_kategori" id="nama_kategori"
                                class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Nama Kategori" required />
                        </div>

                        <!-- Deskripsi -->
                        <div class="relative mb-4">
                            <label for="nama_kategori"
                                class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Deskripsi
                                Ujian</label>
                            <textarea name="deskripsi" id="deskripsi" rows="4"
                                class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Deskripsi Ujian" required></textarea>
                        </div>

                        <!-- Tanggal Ujian -->
                        <label for="nama_kategori"
                            class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Tanggal
                            Ujian</label>
                        <div class="relative mb-4">
                            <input type="date" name="tanggal_ujian" id="tanggal_ujian"
                                class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required />
                        </div>
                        <!-- Waktu Ujian -->
                        <div class="relative mb-4">
                            <label for="waktu_ujian"
                                class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Waktu
                                Ujian</label>
                            <input type="time" id="waktu_ujian" name="waktu_ujian"
                                class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="00:00" required />
                        </div>








                        <!-- Submit Button -->
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>
                    </form>

                </div>

                <thead class="text-xs mt-5 text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kategori Soal
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal Ujian
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Waktu Ujian
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Option
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $index => $category)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $index + 1 }}
                            </th>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $category->nama_kategori }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $category->tanggal_ujian }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $category->waktu_ujian }}
                            </td>
                            <td class="px-6 py-4">
                                <form action="{{ route('categories.destroy', $category->id) }}" method="POST"
                                    class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

</x-AdminLayout>
