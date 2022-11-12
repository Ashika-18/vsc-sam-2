<h1>Create</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ url('/posts') }}" method="POST">
    @csrf
    <input type="text" name="name" value="{{ old('name') }}">
    <input type="text" name="title" value="{{ old('title') }}">
    <input type="text" name="content" value="{{ old('content') }}">
    <input type="submit">
</form>