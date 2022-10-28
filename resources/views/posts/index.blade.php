<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        
        <title>Review</title>

        <!-- Fonts -->
       <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
    </head>
    <body class="antialiased">
        <h1>Review Name</h1>
        <div class="toko">
            @foreach( $posts as $hensu2)
                <div class="post">
                    <p class="id"> {{ $hensu2->id }}</p>
                    <h2 class='title'>{{ $hensu2->title }}</h2>
                    <p class='body'>{{ $hensu2->body }}</p>
                </div>
            @endforeach
        </div>
        <div class="paginate">{{ $posts->links()}}</div>
    </body>
</html> 