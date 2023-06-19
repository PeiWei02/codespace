<x-app-layout>
    <div class="my-3 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200 text-center">
                <h1 class="text-3xl font-bold mb-4">You scored {{ $score }} out of {{ count($quiz->questions) }}</h1>

                @php
                    $percentage = ($score / count($quiz->questions)) * 100;
                @endphp

                @if($percentage < 50)
                    <div>
                        <img src="{{ asset('img/meme_leavemealone.jpg')}}" alt="Low Score" class="mx-auto w-96">
                        <audio id="audioPlayer" src="{{ asset('audio/bing-chi.mp3') }}" autoplay></audio>

                    </div>
                @else
                    <div>
                        <img src="{{ asset('img/meme_success.jpg') }}" alt="High Score" class="mx-auto">
                        <audio id="audioPlayer" src="{{ asset('audio/happy.mp3') }}" autoplay></audio>

                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
