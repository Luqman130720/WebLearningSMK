<x-UserLayout>
    <section class="mt-5">
        <div class="container mx-auto px-4 grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach ($quizzes as $quiz)
                <div
                    class="w-full max-w-sm bg-white border border-gray-200 rounded-2xl shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex flex-col items-center pb-10">
                        <img class="w-24 mt-5 h-24 mb-3 rounded-full shadow-lg"
                            src="https://i.pinimg.com/474x/66/1b/91/661b914bc662f3fb20bae6c9df97945f.jpg"
                            alt="Bonnie image" />
                        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $quiz->nama_quiz }}</h5>
                        <div class="flex mt-4 md:mt-6">
                            <a href="{{ $quiz->link_quiz }}" target="_blank"
                                class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Mulai
                                Quiz</a>
                        </div>
                    </div>
                </div>
            @endforeach
            @if ($quizzes->isEmpty())
                <p class="text-gray-700 dark:text-gray-400 col-span-1">Tidak ada kuis yang tersedia saat ini.</p>
            @endif


            {{-- <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ($quizzes as $quiz)
                    <div
                        class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img class="object-cover w-full rounded-t-lg h-52 md:h-auto md:w-32 md:rounded-none md:rounded-s-lg"
                            src="https://i.pinimg.com/474x/66/1b/91/661b914bc662f3fb20bae6c9df97945f.jpg"
                            alt="Quiz Image">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $quiz->nama_quiz }}</h5>
                            <a href="{{ $quiz->link_quiz }}" target="_blank"
                                class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800">
                                Mulai Kuis
                            </a>
                        </div>
                    </div>
                @endforeach

                @if ($quizzes->isEmpty())
                    <p class="text-gray-700 dark:text-gray-400 col-span-1">Tidak ada kuis yang tersedia saat ini.</p>
                @endif
            </div> --}}
        </div>
    </section>

    </section>



</x-UserLayout>
