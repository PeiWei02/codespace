<x-app-layout>
  <div class="my-3 max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
      <div class="p-6 bg-white border-b border-gray-200">
        <h1 class="text-3xl font-bold mb-4">{{ $quiz->title }}</h1>

        <a href="/quiz/{{ $quiz->id }}/question/create" class="inline-block text-white bg-blue-500 hover:bg-blue-700 px-4 py-2 rounded transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 mb-6">
          Add Question
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
        </div>
        @endforeach

      </div>
    </div>
  </div>
</x-app-layout>