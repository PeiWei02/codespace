<x-app-layout>
  <h1>
    {{$quiz->title}}
  </h1>

  <form action="{{route('quiz.submit', $quiz)}}" method="POST">
    @csrf

    @foreach ($quiz->questions as $question)
    <div>
      <h2>{{$question->question}}</h2>

      @foreach ($question->options as $option)
      <div>
        <input type="radio" id="option{{$option->id}}" name="question{{$question->id}}" value="{{$option->id}}">
        <label for="option{{$option->id}}">{{$option->option_text}}</label>
      </div>
      @endforeach

    </div>
    @endforeach

    <button type="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 my-2">
      Submit Answer
    </button>

  </form>
</x-app-layout>