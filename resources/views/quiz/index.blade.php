<x-app-layout>
    <h1>All Quizzes</h1>
    @foreach ($quizzes as $quiz)
        <div>
            <h2>{{ $quiz->title }}</h2>
            <p>{{ $quiz->description }}</p>
        </div>
    @endforeach
</x-app-layout>
