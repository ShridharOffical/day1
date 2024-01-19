<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  
    <div >
    @foreach($posts as $singlePost)
    <article>
        <h1>
            <a href="/post/{{ $singlePost->slug }}">{{ $singlePost->slug }}</a>
            
          <br>
            <br>
            <p> <h3>By 
              <a href="/authors/{{$singlePost->author->username}}">{{ $singlePost->author->name }}</a>
              in &nbsp;<a href="/categories/{{$singlePost->category->slug}}">
                  {{$singlePost->category->name}}</a>
                </h3></p>            <br>
        </h1>
        <div>
           <p> {!! $singlePost->excerpt !!} </p>

      
        </div>
        <hr>
    </article>
@endforeach
  <a href="/collection">Go back</a>
</div>

 
</body>
</html>