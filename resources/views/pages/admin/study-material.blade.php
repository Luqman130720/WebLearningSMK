<x-AdminLayout>
    {{-- Login Success Alert Modal Start --}}
    @if (session('materiSuccess'))
        <div id="materiModal"
            class="fixed inset-0 flex items-center justify-center z-50 bg-gray-900 bg-opacity-75 transition-opacity duration-500 ease-in-out">
            <div
                class="p-4 text-white border border-green-300 rounded-xl bg-gradient-to-r from-green-400 via-teal-500 to-green-600 shadow-lg dark:bg-gray-800 dark:border-green-800 transition-transform duration-300 ease-in-out transform hover:scale-105 max-w-sm w-full">
                <div class="flex items-center">
                    <svg class="flex-shrink-0 w-6 h-6 mr-2 text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 18a8 8 0 1 1 8-8 8.009 8.009 0 0 1-8 8Zm-1-13h2v6h-2V5Zm0 8h2v2h-2v-2Z" />
                    </svg>
                    <h3 class="text-lg font-semibold text-white tracking-wide">Materi Berhasil di buat!</h3>
                </div>
                <div class="mt-2 mb-4 text-sm text-white leading-relaxed">
                    {{ session('materiSuccess') }}
                </div>
                <div class="flex justify-end">
                    <button type="button"
                        class="text-white bg-gradient-to-br from-cyan-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-xs px-4 py-2 transition-transform duration-300 ease-in-out hover:scale-110 shadow-md"
                        onclick="document.getElementById('materiModal').style.display='none'">
                        Close
                    </button>
                </div>
            </div>
        </div>
    @endif
    {{-- Login Success Alert Modal End --}}

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


        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($studyMaterials as $showMateri)
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-2xl shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="/admin/materi/show/{{ $showMateri->id }}">
                        <img class="rounded-t-2xl" src="{{ asset('storage/' . $showMateri->materi_image) }}"
                            alt="materi image" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $showMateri->judul_materi }}</h5>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


</x-AdminLayout>
