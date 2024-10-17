<x-AdminLayout>
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-4">Preview Soal</h1>

        @foreach ($soals as $soal)
            <div class="mb-4 p-4 border border-gray-300 rounded">
                <div class="flex mb-4 ">
                    <!-- Menampilkan nomor urut -->
                    <p scope="row" class="px-1 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $loop->iteration }}. <!-- Menampilkan angka 1, 2, 3, dan seterusnya -->
                    </p>
                    <!-- Menampilkan pertanyaan -->
                    <p><strong>Pertanyaan:</strong> {{ $soal->pertanyaan }}</p>
                </div>

                <!-- Menampilkan gambar jika ada -->
                <div class="px-4">
                    @if ($soal->gambar)
                        <div class="mb-2">
                            <img src="{{ asset('storage/' . $soal->gambar) }}" alt="Gambar Soal"
                                class="w-40 h-40 rounded">
                        </div>
                    @endif

                    <ul>
                        <li>A: {{ $soal->pilihan_a }}</li>
                        <li>B: {{ $soal->pilihan_b }}</li>
                        <li>C: {{ $soal->pilihan_c }}</li>
                        <li>D: {{ $soal->pilihan_d }}</li>
                        <li class="font-semibold">Kunci Jawaban: {{ $soal->jawaban_benar }}</li>
                    </ul>
                </div>
            </div>
        @endforeach


        @if ($soals->isEmpty())
            <p>Tidak ada soal tersedia untuk kategori ini.</p>
        @endif
    </div>
</x-AdminLayout>
