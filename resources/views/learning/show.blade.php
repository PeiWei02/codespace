{{-- <x-app-layout>
    <div>

        <div class="w-4/5 m-auto text-left">
            <div class="py-15">
                <h1 class="text-6xl">
                    {{ $post->learningID }}
                </h1>
            </div>
        </div>

        <div class="w-4/5 m-auto pt-20">
            <span class="text-gray-500">
                By<span class="font-bold italic text-gray-800">{{
                    $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
            </span>

            <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                {{ $post->description }}
            </p>

    </div>
</x-app-layout> --}}


<x-app-layout>
    <div class="w-4/5 m-auto py-10">
        <button onclick="goBack()" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
            Go Back
        </button>
    </div>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    <div>

        <div class="w-4/5 m-auto text-left">
            <div class="py-15">
                <h1 class="text-6xl">
                    {{ $learning->title }}

                </h1>
            </div>
        </div>

        <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
            <div style="display: flex; justify-content: center; align-items: center;">
                <img src="{{ asset('images/' . $learning->image_path) }}" alt="" />
            </div>
            <div>

        <div class="w-4/5 m-auto pt-20">
            <span class="text-gray-500">
                By <span class="font-bold italic text-gray-800">{{
                    $learning->user->name }}</span>, Created on {{ date('jS M Y', strtotime($learning->updated_at)) }}
            </span>

            <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                {{ $learning->description }}
            </p>

    </div>
</x-app-layout>
