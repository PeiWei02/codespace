<x-app-layout>
    <html>
        <head>
            <title>Forum Discussion</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        </head>
        <body>
            {{-- if user auth then it will yield this part --}}
            @auth 
            <main class="container py-4 px-5">
                <div class="row">
                    {{-- this part is to see the channel/topic --}}
                    <div class="col-md-4">
                        <ul class="list-group">
                            @foreach ($Channels as $channel)
                                <li class="list-group-item">
                                 {{ $channel->name }}
                                </li>
                            @endforeach
                         </ul>
                    </div>
                    {{-- this part is to show and add discussion --}}
                    <div class="col-md-8">
                        <div class="flex justify-content-end mb-2">
                            <a href="{{ route('forum.create') }}" class="btn btn-success">Add Discussion</a>
                        </div>
                        <div class="card">
                            <div class="card-header">Add Discussion</div>
                            <div class="card-body"></div>
                        </div>
                    </div>
                </div>
            </main>
            {{-- if user didnt auth it will just yield the content --}}
            @else 
            <div class="py-4">
                @yield('content')
            </div>
            @endauth

            @foreach ($forums as $forum)
                <div class="card">
                    <div class="card-header">
                        {{ $forum -> title }}
                    </div>
                    <div class="card-body">
                        {!! $forum -> content !!}
                    </div>
                </div>
                
            @endforeach

            {{ $forums->links()}}
        </body>

    </html>
</x-app-layout>