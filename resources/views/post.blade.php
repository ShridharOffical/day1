<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
    @foreach($posts as $singlePost)
    <article>
        <h1>
            <a href="/post/{{ $singlePost->slug }}">Go to dedicated article page</a>
            <br>{{ $singlePost->title }}
            <br>
            <a href="/categories/{{$singlePost->category->slug}}">{{$singlePost->category->name}}</a>
            <br>
        </h1>
        <div>
            {!! $singlePost->excerpt !!}

            {!! $singlePost->body !!}
        </div>
    </article>
@endforeach
  <a href="/collection">Go back</a>
</body>
</html>