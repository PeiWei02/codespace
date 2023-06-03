<!-- resources/views/layouts/app.blade.php -->
 
<html>
    <head>
        <title>Forum Discussion</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body>
        {{-- if user auth then it will yield this part --}}
        @auth 
        <main class="py-4">
            <ul class="list-group">
                {{ $channels  }}
            </ul>
        </main>
        {{-- if user didnt auth it will just yield the content --}}
        @else 
        @endauth
    </body>
</html>