<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
    @foreach($posts as $post)
    <article>
        <h1>
            <a href="/post/{{ $post->slug }}">Go to dedicated article page</a>
           <br> {{ $post->title }}
           <br>
           <a href="#">{{$post->category->name}}</a>
        </h1>
        <div>
            {!! $post->body !!}
        </div>
    </article>
@endforeach
  <a href="/collection">Go back</a>
</body>
</html>