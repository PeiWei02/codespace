<x-app-layout>
    <div>

        <div class="w-4/5 m-auto text-left">
            <div class="py-15">
                <h1 class="text-6xl">
                    Create Posts
                </h1>
            </div>
        </div>

        <div class="w-4/5 m-auto py-10">
            <button onclick="goBack()" class="text-white bg-gradient-to-r from-cyan-500 via-cyan-600 to-cyan-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
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
                        <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4 pl-3">
                            {{ $error }}
                    @endforeach
                </ul>
        @endif

        <div class="w-4/5 m-auto">
            <form
                class="rounded-lg"
                action="/learning"
                method="POST"
                enctype="multipart/form-data">
                @csrf

                <input
                    type="text"
                    name="title"
                    placeholder="Title..."
                    class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none">

                    <textarea
                    name="description"
                    placeholder="Description"
                    class="py-5 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"></textarea>

                    <div class="bg-grey-lighter pt-15">
                        <label class="my-3 w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                            <span class="mt-2 text-base leading-normal">
                                Select a file
                            </span>
                            <input 
                            type="file"
                            name="image"
                            class="hidden"
                           />
                        </label>

                    </div>

                    <button
                        type="submit"
                        class="text-white bg-gradient-to-r from-green-500 via-green-600 to-green-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Submit Post

                    </button>
            </form>
        </div>

    </div>
</x-app-layout>