<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
<?php foreach($posts as $post):?>
    <article>
        <h1>
            <h1>this is access by yamal lib </h1>
            <a href="/posts/<?= $post->slug?>"> goto dedicated artical seperate</a>
            <?= $post->title;?>
        </h1>
         <div>
            <?= $post->body;?>
         </div>
    </article>
<?php endforeach; ?>
  <a href="/">Go back</a>
</body>
</html>