<x-AdminLayout>

    {{-- Quiz Create Success Alert Modal Start --}}
    @if (session('createQuizSuccess'))
        <div id="createQuizSuccess"
            class="fixed inset-0 flex items-center justify-center z-50 bg-gray-900 bg-opacity-75 transition-opacity duration-500 ease-in-out">
            <div
                class="p-4 text-white border border-green-300 rounded-xl bg-gradient-to-r from-green-400 via-teal-500 to-green-600 shadow-lg dark:bg-gray-800 dark:border-green-800 transition-transform duration-300 ease-in-out transform hover:scale-105 max-w-sm w-full">
                <div class="flex items-center">
                    <svg class="flex-shrink-0 w-6 h-6 mr-2 text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 18a8 8 0 1 1 8-8 8.009 8.009 0 0 1-8 8Zm-1-13h2v6h-2V5Zm0 8h2v2h-2v-2Z" />
                    </svg>
                    <h3 class="text-lg font-semibold text-white tracking-wide">Quiz Berhasil Dibuat!</h3>
                </div>
                <div class="mt-2 mb-4 text-sm text-white leading-relaxed">
                    {{ session('createQuizSuccess') }}
                </div>
                <div class="flex justify-end">
                    <button type="button"
                        class="text-white bg-gradient-to-br from-cyan-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-xs px-4 py-2 transition-transform duration-300 ease-in-out hover:scale-110 shadow-md"
                        onclick="document.getElementById('createQuizSuccess').style.display='none'">
                        Close
                    </button>
                </div>
            </div>
        </div>
    @endif
    {{-- Quiz Create Success Alert Modal End --}}

    <div class="container mx-auto p-6">
        <div class="relative overflow-x-auto shadow-2xl sm:rounded-2xl">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <div class="mb-5 mx-auto px-4">
                    <form action="{{ route('admin.quiz.store') }}" method="POST" class="mb-6 mx-auto px-4 mt-5"
                        enctype="multipart/form-data">
                        @csrf
                        <label for=""
                            class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Tambahkan
                            Kuis</label>

                        <!-- Judul Quiz -->
                        <div class="relative mb-4">
                            <label for="nama_quiz"
                                class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Judul
                                Kuis</label>
                            <input type="text" name="nama_quiz" id="nama_quiz"
                                class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Nama Quiz" required />
                        </div>

                        {{-- Link Url Quiz --}}
                        <div class="relative mb-4">
                            <label for="link_quiz"
                                class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Link Kuis</label>
                            <input type="text" name="link_quiz" id="link_quiz"
                                class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukkan Link Kuis" required />
                        </div>
                        <!-- Preview Iframe -->
                        <div class="relative mb-4">
                            <label for="preview_kuis"
                                class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Preview
                                Kuis</label>
                            <iframe id="preview_kuis" src="" width="100%" height="500" frameborder="0"
                                style="max-width:100%" allowfullscreen></iframe>
                        </div>

                        <script>
                            document.getElementById('link_quiz').addEventListener('input', function() {
                                var link = this.value;
                                var iframe = document.getElementById('preview_kuis');
                                iframe.src = link;
                            });
                        </script>

                        <!-- Submit Button -->
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>
                    </form>

                </div>
                <table class="min-w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">No</th>
                            <th scope="col" class="px-6 py-3">Nama Quiz</th>
                            <th scope="col" class="px-6 py-3">Link Quiz</th>
                            <th scope="col" class="px-6 py-3">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($quizzes as $index => $quiz)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4">{{ $index + 1 }}</td>
                                <td class="px-6 py-4">{{ $quiz->nama_quiz }}</td>
                                <td class="px-6 py-4">
                                    <a href="{{ $quiz->link_quiz }}" class="text-blue-500"
                                        target="_blank">{{ $quiz->link_quiz }}</a>
                                </td>
                                <td class="px-6 py-4">

                                    <form action="{{ route('admin.quiz.destroy', $quiz->id) }}" method="POST"
                                        class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500"
                                            onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </table>
        </div>

    </div>
</x-AdminLayout>
