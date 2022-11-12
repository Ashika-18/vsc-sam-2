<h1>Edit</h1>

@if ($errors->any())
    <ul>
        @foreach
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ url('/posts', $post->id) }}">
    @csrf
    @method('put')
    <input type="text" name="name" value="{{ old('name') == '' ? $post->name : old('name') }}">
    <input type="text" name="title" value="{{ old('title') == '' ? $post->title : old('title') }}">
    <input type="text" name="content" value="{{ old('content') == '' ? $post->content : old('content') }}">
    <input type="submit">
</form>