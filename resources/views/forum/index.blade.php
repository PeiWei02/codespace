<x-app-layout>

    @auth
    <main class="container py-4">
        <div class="row">
            <div class="col-md-4">
                <ul class="list-group">
                    @foreach ($channels as $channel)
                        <li class="list-group-item">
                            {{ $channel -> name }}
                        </li>
                    @endforeach
                 </ul>
            </div>
            <div class="col-md-8">
                <div class="flex justify-content-end mb-2">
                    <a href="{{ route('forum.create') }}" class="btn btn-success">Add Discussion</a>
                    {{-- <a href="{{ route('discussions.create') }}" class="btn btn-success">Add Discussion</a> --}}
                </div>
                <div class="card">
                    <div class="card-header">Add Discussion</div>
                    <div class="card-body"></div>
                </div>
            </div>
        </div>
    </main>

    @else
        <div class="py-4">
             @yield('content')
        </div>
    @endauth

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</x-app-layout>