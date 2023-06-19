<x-app-layout>
    <div>

        <div class="w-4/5 m-auto text-left">
            <div class="py-15">
                <h1 class="text-6xl">
                    Update Posts
                </h1>
            </div>
        </div>

        <div class="w-4/5 m-auto py-10">
            <button onclick="goBack()" 
            class="text-white bg-gradient-to-r from-cyan-500 via-cyan-600 to-cyan-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                Go Back
            </button>
        </div>
    
        <script>
            function goBack() {
                window.history.back();
            }
        </script>
        <div>

        @if ($errors->any())
            <div class="w-4/5 m-auto">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                            {{ $error }}
                    @endforeach
                </ul>
        @endif

        <div class="w-4/5 m-auto">
            <form
                action="/learning/{{ $learning->learningID }}"
                method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <input
                    type="text"
                    name="title"
                    value="{{ $learning->title}}"
                    class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none">

                    <textarea
                    name="description"
                    placeholder="Description"
                    class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none">{{ $learning->description }}</textarea>

                    <button \
                        type="submit"
                        class="my-3 text-white bg-gradient-to-r from-teal-500 via-teal-600 to-teal-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Update Post

                    </button>
            </form>

    </div>
</x-app-layout>