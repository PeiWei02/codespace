<x-app-layout>

    @auth
    <main class="container py-4">
        <div class="row">
            <div class="col-md-4">
                <a href="{{ route('forum.create') }}" style="width: 100%; color:#fff" class = "btn btn-info my-2">Add Discussion</a>
                <div class="card">
                    <div class="card-header">
                        Channels
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach ($channels as $channel)
                                <li class="list-group-item">
                                    {{ $channel -> name }}
                                </li>
                            @endforeach
                         </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div>
                                <strong class="ml-2">{{ $forum->author->name}}</strong>
                            </div>
                            <div>
                                <a href="{{ route('forum.show', $forum->slug) }}" class="btn btn-success btn-sm">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <strong>
                            {{$forum->title }} 
                        </strong>
                        <p class="my-2">
                            {{$forum->content }}
                        </p>
                    </div>
                </div>

                @foreach ($forum->replies()->paginate(3) as $reply)
                <div class="card my-1">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <span>{{ $reply->owner->name }}</span>
                        </div>
                    </div>
                    <div class="card-body">
                        {!! $reply->content!!}
                    </div>
                </div>
                @endforeach
                {{ $forum->replies()->paginate(3)->links() }}

                <div class="div">
                    <div class="card">
                        <div class="card-header">
                            Add a reply 
                        </div>
                        <div class="card-body">
                            <form action="{{ route('replies.store', $forum->slug )}}" method='POST'>
                                @csrf
                                <div class="form-group">
                                    {{-- <label for="reply">Reply</label> --}}
                                    <input type="text" class="form-control" name='content' id="content" value="">
                                    <button type="submit" class="btn btn-success btn-sm mt-2 py-2">
                                        Add reply
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
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