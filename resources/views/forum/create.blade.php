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
                        <div class="card">
                            <div class="card-header">Add Discussion</div>
                            <div class="card-body">
                                <form action="{{ route('forum.store') }}" method='POST'>
                                @csrf
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="from-control" name='tittle' value="">
                                    </div>

                                    <div class="form-group">
                                        <label for="content">Content</label>
                                        <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="channel">Channel</label>
                                        <select name="channel" id="" class="form-control">
                                            {{-- loop through each of the channel available --}}
                                            @foreach ($Channels as $channel)
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
            {{-- if user didnt auth it will just yield the content --}}
            @else 
            <div class="py-4">
                @yield('content')
            </div>
            @endauth
        </body>
    </html>

</x-app-layout>
{{-- 
@section('content')
<div class="card">
    <div class="card-header">Add Discussion</div>
    <div class="card-body"></div>
</div>
 --}}