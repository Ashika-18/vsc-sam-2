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
<h1>Show</h1>

@if (session('message'))
    <p>{{ session('message') }}</p>
@endif

<p>{{ $post->name }}<br>
{{ $post->title }}<br>
{{ $post->content }}</p>

<p><a href="{{ url('/posts', [$post->id, 'edit']) }}">Edit</a></p>
<p><a href="{{ url('/posts') }}">TOPへ</a></p>

<footer>
    <p>©Ashika-Work</p>
</footer>