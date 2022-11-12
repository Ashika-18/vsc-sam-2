<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href="{{ asset('css/style.css') }}">
    <title>–掲示板–</title>
</head>
<body>
    <h1>–掲示板–</h1>

    @foreach($posts as $post)
        <p><a href="{{ url('/posts', $post->id) }}">{{ $post->title }}</a>
    <a href="{{ url('/posts', [$post->id, 'edit']) }}">更新</a></p>

    <form action="{{ url('/posts', $post->id) }}" method="POST" onsubmit="if(confirm('削除しても良いですか？')) {return true} else {return false};">
        @method('delete')
        @csrf
        <button type="submit">削除</button>
    </form>
    @endforeach

    <a href="{{ url('/posts/create') }}">新規投稿</a>
</body>
</html>