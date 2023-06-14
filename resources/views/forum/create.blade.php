<x-app-layout>

    @auth
    <main class="container py-4">
        <div class="row">
            <div class="col-md-4">
                @php
                    $selectedChannel = $forum->channel_id ?? null;
                @endphp

                <a href="{{ route('forum.create') }}" style="width: 100%; color:#fff" class = "btn btn-info my-2">Add Discussion</a>
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
                <div class="flex justify-content-end mb-2">
                </div>
                <div class="card">
                    <div class="card-header">Add Discussion</div>
                    <div class="card-body">
                        <form action="{{ route('forum.store') }}" method='POST'>
                            @csrf
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name='title' value="">
                                </div>

                                <div class="form-group">
                                    <label for="content">Content</label>
                                    <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="channel">Channel</label>
                                    <select name="channel" id="" class="form-control">
                                        {{-- loop through each of the channel available --}}
                                        @foreach ($channels as $channel)
                                            <option value="{{ $channel -> id }}">{{ $channel -> name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-success">Create discussion</button>
                            </form>
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