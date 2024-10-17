<x-AdminLayout>

    @foreach ($aspirasi as $item)
        <div class="flex items-start gap-2.5 w-full px-4 mb-5 mt-5">
            <img class="w-8 h-8 rounded-full"
                src="https://marketplace.canva.com/EAFxwV1WnyE/1/0/1600w/canva-black-and-gold-elegant-facebook-profile-picture-pRHweav1H0c.jpg"
                alt="Jese image">
            <div class="flex flex-col gap-2 w-full">
                <div class="flex flex-col w-full">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-1">
                        <div class="">
                            <div>
                                <span
                                    class="text-sm font-semibold text-gray-900 dark:text-white">{{ $item->nama_lengkap }}</span>
                                <span
                                    class="text-xs font-normal text-gray-500 dark:text-gray-400">{{ $item->created_at->diffForHumans() }}</span>
                            </div>
                            <div>
                                <span
                                    class="text-sm font-normal text-gray-500 dark:text-gray-400">{{ $item->email }}</span>
                            </div>
                        </div>
                        <div class="flex sm:justify-end lg:justify-end">
                            <form action="/aspirasi/delete/{{ $item->id }}" method="POST">
                                @method('delete')
                                @csrf
                                <button
                                    class="sm:bg-blue-500 lg:bg-blue-500 sm:text-white lg:text-white rounded-full p-1 text-xs font-semibold dark:text-gray-400 cursor-pointer"
                                    onclick="return confirm('Apakah kamu yakin?')">
                                    <i class="bx bx-trash"></i> Hapus Aspirasi
                                </button>
                            </form>
                        </div>
                    </div>

                    {{-- <div class="flex items-center space-x-2 rtl:space-x-reverse">
                        <span
                            class="text-sm font-semibold text-gray-900 dark:text-white">{{ $item->nama_lengkap }}</span>
                        <span class="text-sm font-normal text-gray-500 dark:text-gray-400">{{ $item->email }}</span>
                        <span class="text-red-500 text-xs font-semibold dark:text-gray-400 cursor-pointer">
                            <form action="/aspirasi/delete/{{ $item->id }})" method="POST">
                                @method('delete')
                                @csrf
                                <button class="btn btn-link text-danger text-gradient mb-0" type="submit"
                                    onclick="return confirm('Apakah kamu yakin?')">
                                    <i class="bx bx-trash"></i> Hapus Aspirasi
                                </button>
                            </form>
                        </span>

                    </div> --}}
                    {{-- <span
                        class="text-xs font-normal text-gray-500 dark:text-gray-400">{{ $item->created_at->format('d-m-Y | H:i') }}</span>
                    <span class="text-red-500 text-xs font-semibold dark:text-gray-400 cursor-pointer">
                        <form action="/aspirasi/delete/{{ $item->id }})" method="POST">
                            @method('delete')
                            @csrf
                            <button class="btn btn-link text-danger text-gradient mb-0" type="submit"
                                onclick="return confirm('Apakah kamu yakin?')">
                                <i class="bx bx-trash"></i> Hapus Aspirasi
                            </button>
                        </form>
                    </span> --}}

                </div>


                <div
                    class="flex flex-col leading-1.5 p-4 border-gray-200 bg-gray-200 rounded-e-xl rounded-es-xl dark:bg-gray-700">
                    <p class="text-sm font-normal text-gray-900 dark:text-white">{{ $item->pesan_aspirasi }}</p>
                </div>
            </div>
        </div>
    @endforeach


</x-AdminLayout>
