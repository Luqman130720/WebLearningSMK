<x-AdminLayout>
    <div class="container mx-auto mt-8">
        <h1 class="text-3xl font-semibold text-gray-700 mb-6">Rekap Nilai Ujian</h1>

        <div class="overflow-x-auto">
            <table class="min-w-full table-auto bg-white shadow-md rounded-lg border border-gray-200">
                <thead>
                    <tr class="bg-gray-200 text-gray-700 text-sm uppercase tracking-wider">
                        <th class="py-3 px-5 text-left">No</th>
                        <th class="py-3 px-5 text-left">Nama</th>
                        <th class="py-3 px-5 text-left">Mapel Ujian</th>
                        <th class="py-3 px-5 text-left">Nilai</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm">
                    @foreach ($nilaiUjians as $index => $nilaiUjian)
                        <tr class="hover:bg-gray-100 border-t border-gray-200">
                            <td class="py-3 px-5">{{ $index + 1 }}</td>
                            <td class="py-3 px-5">{{ $nilaiUjian->nama_lengkap }}</td>
                            <td class="py-3 px-5">{{ $nilaiUjian->nama_kategori }}</td>
                            <td class="py-3 px-5">{{ $nilaiUjian->nilai }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-AdminLayout>
