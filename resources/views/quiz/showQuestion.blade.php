<x-app-layout>
  <div class="my-3 max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
      <div class="p-6 bg-white border-b border-gray-200">
        <h1 class="text-3xl font-bold mb-4">{{ $quiz->title }}</h1>

        <a href="/quiz/{{ $quiz->id }}/question/create" class="inline-block text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 my-2">
          Add Question
        </a>


        <a href="/quiz/" class="inline-block text-white bg-gradient-to-r from-red-500 via-red-600 to-red-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 my-2">
          Go Back to Quizzes
        </a>

        @foreach ($quiz->questions as $question)
        <div class="mb-4 p-4 bg-blue-100 shadow-lg">
          <h2 class="text-xl font-bold mb-2">{{ $question->question }}</h2>

          @foreach ($question->options as $option)
          <div class="flex items-center mb-2">
            <input type="radio" id="option{{ $option->id }}" name="question{{ $question->id }}" value="{{ $option->id }}" class="mr-2 h-4 w-4 text-blue-600">
            <label for="option{{ $option->id }}" class="text-sm text-gray-700">{{ $option->option_text }}</label>
          </div>
          @endforeach

          <!-- Delete Button -->
          <!-- <form method="POST" action="{{ route('quiz.question.destroy', ['quiz' => $quiz, 'question' => $question]) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="inline-block text-white bg-gradient-to-r from-red-500 via-red-600 to-red-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 my-2">Delete</button>
          </form> -->
        </div>
        @endforeach

      </div>
    </div>
  </div>
</x-app-layout>