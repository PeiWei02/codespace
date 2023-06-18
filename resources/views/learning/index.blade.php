<x-app-layout>
    <div>

        @if (session()->has('message'))
            <div class="w-4/5 m-auto mt-10 pl-2">
                <p class="w-1/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
                    {{session()->get('message')}}
                </p>"
        @endif


    @if (Auth::check())
        <div class="pt-15 w-4/5 m-auto">
            <a
                href="/learning/create"
                class="bg-blue-500 uppercase bg-transparent text-gray-100
                text-xs font-extrabold py-3 px-5 roundered-3xl">
                Create Post
            </a>
        </div>
    @endif

        <div class="w-4/5 m-auto text-center">
            <div class="py-15 border-b border-gray-200">
                <h1 class="text-6xl">
                    Learning Posts
                </h1>

                

                @foreach ($posts as $post)
                    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
                        <div>
                            <img src="{{ asset('images/' . $post->image_path) }}" alt="" />
                        </div>
                        <div>
                            <h2 class="text-gray-700 font-bold tex-5xl pb-4">
                                {{ $post->title }}
                            </h2>

                            <span class="text-gray-500">
                                By <span class="font-bold italic text-gray-800"> {{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
                            </span>

                            <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                                {{$post->description }}
                            </p>

                            <a href="/learning/{{ $post->learningID }}" class="uppercase bg-blue-500 text-gray-100 text-lgfont-extrabold py-4 px-8 rounded-3xl">
                                More Info
                            </a>


                            @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                                <span class="float-right">
                                    <a 
                                        href="/learning/{{ $post->learningID}}/edit"
                                        class="text-gray-700 italic hover:text-gray-900
                                        pb-1 border-b-2">
                                        Edit
                                    </a>
                                </span>

                                <span class="float-right">
                                    <form 
                                        action="{{ route('learning.destroy', ['learning' => $post->learningID]) }}"
                                        method="POST">
                                        @csrf
                                        @method('delete')

                                        <button
                                            class="text-red-500 pr-3"
                                            type="submit">
                                            Delete
                                        </button>
                                    </form>
                                </span>
                            @endif
                        </div>
                    </div>
                @endforeach


    </div>
</x-app-layout>