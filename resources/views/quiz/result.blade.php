<x-app-layout>
    <div class="my-3 max-w-7xl mx-auto sm:px-6 lg:px-8 rounded-lg">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200 text-center">
                <h1 class="text-3xl font-bold mb-4">You scored {{ $score }} out of {{ count($quiz->questions) }}</h1>

                @php
                $percentage = ($score / count($quiz->questions)) * 100;
                @endphp

                <h1 class="text-3xl font-bold mb-4">Final Result: {{ $percentage }}% out of 100%</h1>


                @if($percentage < 50) 
                <div>
                    <img src="{{ asset('img/meme_leavemealone.jpg')}}" alt="Low Score" class="mx-auto w-96">
                    <audio id="audioPlayer" src="{{ asset('audio/sad_violin.mp3') }}" autoplay></audio>

                 </div>
            @else
            <div>
                <img src="{{ asset('img/meme_success.jpg') }}" alt="High Score" class="mx-auto">
                <audio id="audioPlayer" src="{{ asset('audio/happy.mp3') }}" autoplay></audio>

            </div>
            @endif
        </div>

        <div class="flex justify-center items-center space-x-4">
            <a href="{{ route('quiz.answer', $quiz)}}" class="inline-block text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 my-2">
                Retake Quiz
            </a>


            <a href="/quiz/" class="inline-block text-white bg-gradient-to-r from-red-500 via-red-600 to-red-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 my-2">
                Go Back to Quizzes
            </a>

        </div>


    </div>
    </div>
</x-app-layout>