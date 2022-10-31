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
        <a href="/URL-1/create">作成ボタン</a>
        <div class="toko">
            @foreach( $hensu1 as $hensu2)
                <div class="post">
                    <p class="id"> {{ $hensu2->id }}</p>
                    <a href="/URL-1/{{ $hensu2->id }}"><h2 class='title'>{{ $hensu2->title }}</h2></a>
                    <p class='body'>{{ $hensu2->body }}</p>
                    <form action="/URL-1/{{ $hensu2->id }}" id="form_{{ $hensu2->id }}" method="post">
                        @csrf
                        @method("DELETE")
                    <button type="button" onclick="deletePost({{ $hensu2->id }})">delete</button>
                    </form>
                </div>
            @endforeach
        </div>
        <div class="paginate">{{ $hensu1->links()}}</div>
        <script>
            function deletePost(id){
                "use strict"
                
                if(confirm("削除すると復元できません．\n本当に削除しますか？")){
                    document.getElementById(`form_${id}`).submit();
                }
            }
            
        </script>
    </body>
</html> 