<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        
        <title>BlogReview</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
    </head>
    <body class="antialiased">
        <h1> Review name</h1>
        <form action="/URL-1/{{ $hensu5->id }}" method="POST">
            @csrf
            @method=("PUT")
            <div class="title">
                <h2> Title</h2>
                <input type="text" name=post[title] placeholder="タイトル" value={{ $hensu5->title}}>
            </div>
            
            <div class="body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="今日もお疲れ様でした">{{ $hensu5->body }}</textarea>
            </div>
            
            <input type="submit" value="update">
        </form>
        <div class="footer">
            <a href="/URL-1/{{ $hensu5->id }}">戻る</a>
        </div>
    </body>
</html>
