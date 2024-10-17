<x-AdminLayout>
    <div class="grid grid-cols-2 gap-4 mb-4">
        <div class="">

            <form method="POST" action="{{ url('/user-register') }}" enctype="multipart/form-data">
                @csrf
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="nama_lengkap"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap</label>
                        <input type="text" id="nama_lengkap" name="nama_lengkap"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Nama Lengkap" required />
                    </div>
                    <div>
                        <label for="username"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                        <input type="text" id="username" name="username"
                            class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Username" required />
                    </div>
                    <div>
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" id="email" name="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="email@example.com" required />
                    </div>
                    <div>
                        <label for="nomor_telepon"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Telepon</label>
                        <input type="tel" id="nomor_telepon" name="nomor_telepon"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Nomor Telepon" />
                    </div>
                    <div>
                        <label for="tanggal_lahir"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Lahir</label>
                        <input type="date" id="tanggal_lahir" name="tanggal_lahir"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    </div>

                </div>

                <div class="mb-6">
                    <label for="password"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <input type="password" id="password" name="password"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="•••••••••" required />
                </div>

                {{-- <div class="mb-2">
                    <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto
                        Profil</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="image" name="image" type="file" accept="image/*" onchange="previewImage(event)">

                </div> --}}
                <div class="mb-2">
                    <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto
                        Profil</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="image" name="image" type="file" accept="image/*"
                        onchange="previewImage(event, 'imagePreview')">
                </div>

                <input type="hidden" id="role" name="role" value="2"> <!-- Hidden field for role -->

                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Submit
                </button>
            </form>


        </div>
        {{-- <div class="">
            <img class="flex mx-auto rounded-full w-80 h-80"
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREoRGyXmHy_6aIgXYqWHdOT3KjfmnuSyxypw&s"
                alt="Extralarge avatar">
        </div> --}}
        <div class="">
            <img id="imagePreview" class="flex mx-auto rounded-full w-80 h-80"
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREoRGyXmHy_6aIgXYqWHdOT3KjfmnuSyxypw&s"
                alt="Extralarge avatar">
        </div>
    </div>
</x-AdminLayout>
