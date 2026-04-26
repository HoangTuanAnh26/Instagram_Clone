<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投稿一覧</title>
</head>
<body>
    <h1>投稿一覧</h1>
    @foreach ($posts as $post)
    <div>
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->body }}</p>
    </div>
    @endforeach
    
</body>
</html> -->

@extends('layouts.app')

@section('title', '投稿一覧')

@section('content')
<h1>投稿一覧</h1>
@foreach ($posts as $post)
<div>
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->body }}</p>
</div>
@endforeach
@endsection