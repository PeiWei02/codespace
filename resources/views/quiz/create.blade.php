<x-app-layout>
    <h1>Create a Quiz</h1>

    <form method="POST" action="{{ route('quiz.store') }}">
        @csrf

        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" required>
        </div>

        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" required></textarea>
        </div>

        <div>
            <button type="submit">Create Quiz</button>
        </div>
    </form>
</x-app-layout>
