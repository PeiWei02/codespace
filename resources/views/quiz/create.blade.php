<x-app-layout>
    <div class="my-3 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <h1 class="mb-6 text-3xl font-bold">Create a Quiz</h1>

                <form method="POST" action="{{ route('quiz.store') }}" class="space-y-4">
                    @csrf

                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" name="title" id="title" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                    </div>

                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea name="description" id="description" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md h-20"></textarea>
                    </div>

                    <div>
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700 transition duration-200">Create Quiz</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
