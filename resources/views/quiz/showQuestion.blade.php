<x-app-layout>


  <h1>{{ $quiz->title }}</h1>

  <a href="/quiz/{{ $quiz->id }}/question/create" class="inline-block text-white bg-blue-500 hover:bg-blue-700 px-4 py-2 rounded">
    Add Question
  </a>

  @foreach ($quiz->questions as $question)
  <div>
    <h2>{{ $question->question }}</h2>

    @foreach ($question->options as $option)
    <div>
      <input type="radio" id="option{{ $option->id }}" name="question{{ $question->id }}" value="{{ $option->id }}">
      <label for="option{{ $option->id }}">{{ $option->option_text }}</label>
    </div>
    @endforeach
  </div>
  @endforeach

</x-app-layout>