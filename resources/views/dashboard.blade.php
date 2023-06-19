<x-app-layout>


    <!-- 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> -->


    <!-- Hero Section Starts Here -->
    <section class="relative">
        <!-- Image -->
        <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('img/galaxy.jpg') }}" alt="hero">
        <!-- Content -->
        <div class="relative h-screen flex items-center justify-center text-center">
            <div class="bg-black bg-opacity-70 text-white p-10 rounded">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium">Code With Ur Own Space</h1>
                <p class="mb-8 leading-relaxed">CodeSpace is P2P learning where user get to interact with others user in the learning platform to learn new things about coding</p>
                <div class="flex justify-center">
                    <a href="/learning" class="inline-block text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-xl px-5 py-2.5 text-center mr-2 my-2">
                        Start Learning !
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section Ends Here -->




    <div class="p-10 flex flex-wrap justify-between">
        <!--Card 1-->
        <div class="max-w-sm rounded overflow-hidden shadow-lg mb-6">
            <img class="w-full" src="{{ asset('img/coding.png') }}" alt="Mountain">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Coding</div>
                <p class="text-gray-700 text-base">
                    Where u learn to code ur first ever program in the CodeSpace learning platform!
                </p>
            </div>
            <div class="px-6 pt-4 pb-2">
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#coding</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#coffee</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#whatIsSleep</span>
            </div>
        </div>

        <!--Card 2-->
        <div class="max-w-sm rounded overflow-hidden shadow-lg mb-6">
            <img class="w-full" src="{{ asset('img/java.jpg') }}" alt="Mountain">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Java Programming Language</div>
                <p class="text-gray-700 text-base">
                    Java is the programming which has the concept of OOPs and is used in many applications.
                </p>
            </div>
            <div class="px-6 pt-4 pb-2">
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#coding</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#coffee</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#whatIsSleep</span>
            </div>
        </div>

        <!--Card 3-->
        <div class="max-w-sm rounded overflow-hidden shadow-lg mb-6">
            <img class="w-full" src="{{ asset('img/mll.jpg') }}" alt="Mountain">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Machine Learning</div>
                <p class="text-gray-700 text-base">
                    Machine Learning is the study of computer algorithms that improve automatically through experience.
                </p>
            </div>
            <div class="px-6 pt-4 pb-2">
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#coding</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#AIDOMYJOB</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#kenaReplace</span>
            </div>
        </div>
    </div>

    <div class="flex justify-center items-center">

        <!--Card 4-->
        <div class="max-w-sm rounded overflow-hidden shadow-lg mb-6 mx-12">
            <img class="w-full" src="{{ asset('img/meme_leavemealone.jpg') }}" alt="Mountain">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Let's Go, Let's Study LAH</div>
                <p class="text-gray-700 text-base">
                    Do not procrastinate, start learning now!
                </p>
            </div>
            <div class="px-6 pt-4 pb-2">
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
            </div>
        </div>

        <!--Card 5-->
        <div class="max-w-sm rounded overflow-hidden shadow-lg mb-6 mx-12">
            <img class="w-full" src="{{ asset('img/laravel.jpg') }}" alt="Mountain">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Laravel</div>
                <p class="text-gray-700 text-base">
                    Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller architectural pattern and based on Symfony.
                </p>
            </div>
            <div class="px-6 pt-4 pb-2">
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
            </div>
        </div>


    </div>

</x-app-layout>