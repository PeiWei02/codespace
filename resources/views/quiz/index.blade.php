<x-app-layout>


    <x-slot name="header">
        <div class="flex justify-between">

            <h2 class="font-semibold text-xl text-gray-800 leading-tight inline-block mt-5">
                {{ __('All Quizzes') }}
            </h2>

            <a href="/quiz/create" class="inline-block text-white bg-gradient-to-r from-green-500 via-green-600 to-green-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 my-2">
                Create Quiz
            </a>

        </div>

    </x-slot>


    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 px-5 py-8">
        @foreach ($quizzes as $quiz)
        <div class="w-full mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
            <div class="md:flex">
                <div class="p-8">
                    <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">{{ $quiz->title }}</div>
                    <p class="block mt-1 text-lg leading-tight font-medium text-black">{{ $quiz->description }}</p>

                    <a href="{{ route('quiz.answer', $quiz)}}" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 my-2">
                        Join Quiz
                    </a>

                    @if (auth()->user()->id == $quiz->user_id)

                    <a href="/quiz/{{ $quiz->id }}/question" class="inline-block text-white bg-gradient-to-r from-green-500 via-green-600 to-green-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 my-2">
                        Edit Quiz
                    </a>
                    @endif

                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-app-layout>