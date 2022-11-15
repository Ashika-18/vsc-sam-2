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
<h1>Edit</h1>
<p id="e-top" class="e-top" ><a href="{{ url('/posts') }}">TOPへ</a></p>
@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form  class="edit" method="POST" action="{{ url('/posts', $post->id) }}">
    @csrf
    @method('put')
    <input class="e-cnt" type="text" name="name" value="{{ old('name') == '' ? $post->name : old('name') }}">
    <input class="e-cnt" type="text" name="title" value="{{ old('title') == '' ? $post->title : old('title') }}">
    <input class="e-cnt" type="text" name="content" value="{{ old('content') == '' ? $post->content : old('content') }}">
    <input class="e-btn" type="submit">
</form>
<footer>
    <p>©Ashika-Work</p>
</footer>