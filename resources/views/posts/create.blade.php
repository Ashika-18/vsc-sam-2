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
<h1>Create</h1>
<p id="c-top" class="c-top" ><a href="{{ url('/posts') }}">TOPへ</a></p>
@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<div>
    <form class="create" action="{{ url('/posts') }}" method="POST">
        @csrf
        <input class="c-cnt" type="text" name="name" placeholder="名前" value="{{ old('name') }}">
        <input class="c-cnt" type="text" name="title" placeholder="タイトル" value="{{ old('title') }}">
        <input class="c-cnt" type="text" name="content" placeholder="本文" value="{{ old('content') }}">
        <input class="c-btn" type="submit">
    </form>
</div>

<footer>
    <p>©Ashika-Work</p>
</footer>