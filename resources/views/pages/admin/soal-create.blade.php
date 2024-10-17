<x-AdminLayout>

    <div class="container mx-auto px-4 py-6">
        <h1 class="text-2xl font-bold mb-4">Create Soal Ujian</h1>

        @if (session('success'))
            <div class="mb-4 text-green-600">
                {{ session('success') }}
            </div>
        @endif


        <form action="{{ route('admin.soal.store') }}" method="POST" class="space-y-4" enctype="multipart/form-data">
            @csrf

            <!-- Question -->
            <div class="mb-6">
                <label for="pertanyaan"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pertanyaan</label>
                <textarea id="pertanyaan" name="pertanyaan" rows="4" required
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Tulis pertanyaan di sini..."></textarea>
            </div>

            <!-- Gambar (Optional) -->
            {{-- <div class="mb-6">
                <label for="gambar" class="block mb-2 text-sm font-medium text-gray-700">Gambar</label>
                <input type="file" id="gambar" name="gambar"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    accept="image/*" />
            </div> --}}
            <div class="mb-2">
                <label for="gambar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto
                    Profil</label>
                <input
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    id="gambar" name="gambar" type="file" accept="image/*"
                    onchange="previewImage(event, 'imagePreview')">
            </div>
            <!-- Image Preview -->
            <div class="mt-4">
                <div
                    class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 overflow-hidden">
                    <img id="imagePreview"
                        src="https://png.pngtree.com/thumb_back/fw800/background/20240106/pngtree-mountain-river-beautiful-nature-image_15576027.jpg"
                        alt="gambar image" class="w-full h-full object-cover" />
                </div>
            </div>
    </div>

    <!-- Options -->
    <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
            <label for="pilihan_a" class="block mb-2 text-sm font-medium text-gray-700">Pilihan A</label>
            <input type="text" id="pilihan_a" name="pilihan_a" required
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Masukkan pilihan A" />
        </div>

        <div>
            <label for="pilihan_b" class="block mb-2 text-sm font-medium text-gray-700">Pilihan B</label>
            <input type="text" id="pilihan_b" name="pilihan_b" required
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Masukkan pilihan B" />
        </div>

        <div>
            <label for="pilihan_c" class="block mb-2 text-sm font-medium text-gray-700">Pilihan C</label>
            <input type="text" id="pilihan_c" name="pilihan_c" required
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Masukkan pilihan C" />
        </div>

        <div>
            <label for="pilihan_d" class="block mb-2 text-sm font-medium text-gray-700">Pilihan D</label>
            <input type="text" id="pilihan_d" name="pilihan_d" required
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Masukkan pilihan D" />
        </div>
    </div>

    <!-- Correct Answer -->
    <div class="mb-6">
        <label for="jawaban_benar" class="block text-sm font-medium text-gray-700">Jawaban Benar</label>
        <select id="jawaban_benar" name="jawaban_benar" required
            class="bg-green-200 border rounded-md px-3 py-2 w-full">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
        </select>
    </div>

    <!-- Category -->
    <div class="mb-6">
        <label for="kategori_id" class="block text-sm font-medium text-gray-700">Kategori</label>
        <select id="kategori_id" name="kategori_id" required class="bg-green-200 border rounded-md px-3 py-2 w-full">
            @foreach ($kategori as $category)
                <option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>
            @endforeach
        </select>
    </div>

    <!-- Submit Button -->
    <div class="mb-6 flex justify-end">
        <button type="submit"
            class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Buat
            Soal</button>
    </div>
    </form>
    </div>
</x-AdminLayout>
