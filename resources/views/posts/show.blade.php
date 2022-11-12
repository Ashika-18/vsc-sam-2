<h1>Show</h1>

@if (session('message'))
    <p>{{ session('message') }}</p>
@endif

<p>{{ $post->name }}<br>
{{ $post->title }}<br>
{{ $post->content }}</p>

<p><a href="{{ url('/posts', [$post->id, 'edit']) }}">Edit</a></p>
<p><a href="{{ url('/posts') }}">TOPへ</a></p>