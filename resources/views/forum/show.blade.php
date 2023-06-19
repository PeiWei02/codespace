<x-app-layout>

    @auth
    <main class="container py-4">
        <div class="row">
            <div class="col-md-4">
                @php
                $selectedChannel = $forum->channel_id ?? null;
                @endphp

                <!-- <a href="{{ route('forum.create') }}" style="width: 100%; color:#fff" class = "btn btn-info my-2">Add Discussion</a> -->

                <a href="{{ route('forum.create') }}" class="no-underline inline-block text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center my-2">
                    Add Discussion
                </a>

                <div class="card">
                    <div class="card-header">
                        Channels
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="{{ route('forum.index') }}" class="{{ !$selectedChannel ? 'active' : '' }}">All Channels</a>
                        </li>
                        @foreach ($channels as $channel)
                        <li class="list-group-item">
                            <a href="{{ route('forum.index', ['channel' => $channel->id]) }}" class="{{ $selectedChannel == $channel->id ? 'active' : '' }}">{{ $channel->id }}</a>
                        </li>
                        @endforeach
                    </ul>
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
                                <a href="{{ route('forum.show', $forum->slug) }}" class="no-underline inline-block text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2 text-center">
                                    View
                                </a>
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
                                    <button type="submit" class="no-underline inline-block text-white bg-gradient-to-r from-green-500 via-green-600 to-green-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2 my-2 text-center">
                                        Add reply
                                    </button>
                                </div>
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
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