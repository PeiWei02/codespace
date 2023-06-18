
<x-app-layout>
<div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl m-4">
  <div class="p-8">
    <form method="POST" action="/quiz/{{ $quiz->id }}/question" class="space-y-4">
        @csrf

        <div>
            <label for="question" class="block text-sm font-medium text-gray-700">Question:</label>
            <input type="text" id="question" name="question" class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
        </div>

        <!-- Repeat this for each option -->
        @foreach(range(0, 3) as $option)
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label for="options[{{$option}}][text]" class="block text-sm font-medium text-gray-700">Option:</label>
                <input type="text" id="options[{{$option}}][text]" name="options[{{$option}}][text]" class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
            </div>
            <div class="flex items-center">
                <input type="checkbox" id="options[{{$option}}][is_correct]" name="options[{{$option}}][is_correct]" class="mr-2 h-4 w-4 text-blue-600">
                <label for="options[{{$option}}][is_correct]" class="block text-sm font-medium text-gray-700">Is this option correct?</label>
            </div>
        </div>
        @endforeach

        <!-- Add more option inputs as needed -->

        <div>
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">Create Question</button>
        </div>
    </form>
  </div>
</div>


</x-app-layout>
