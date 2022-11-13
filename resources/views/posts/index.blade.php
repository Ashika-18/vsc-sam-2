<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/reset.css')}}">
    <link rel='stylesheet' href="{{ asset('/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP&display=swap" rel="stylesheet">
    <title>–掲示板–</title>
</head>
<body>
    <h1>–掲示板サイトへようこそ–</h1>

    <a class="new-post" href="{{ url('/posts/create') }}">新規投稿</a>
    <main id="content">
        @foreach($posts as $post)
        <div class="post">
            <p>{{ $post->name }}</p>
            <p class="title"><a href="{{ url('/posts', $post->id) }}">{{ $post->title }}</a>
            <p>{{ $post->content }}</p>
            <a href="{{ url('/posts', [$post->id, 'edit']) }}">更新</a></p>
        </div>
            <form action="{{ url('/posts', $post->id) }}" method="POST" onsubmit="if(confirm('削除しても良いですか？')) {return true} else {return false};">
                @method('delete')
                @csrf
                <button type="submit">削除</button>
            </form>
        @endforeach
    </main>
</body>
</html>