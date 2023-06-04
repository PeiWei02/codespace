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