<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <article>

<h1>{{ $post->slug }}</h1>
<p> By 
<a href="/authors/{{$post->author->username}}">{{ $post->author->name }}</a>
in &nbsp;<a href="/categories/{{$post->category->slug}}">
    {{$post->category->name}}</a>
</p>


<br>
<div>{{ $post->body }}</div>
       

    </article>
  <a href="/collection">Go back</a>
</body>
</html>