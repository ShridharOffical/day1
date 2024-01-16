<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/article', function () {
    return view('article');
});

Route::get('posts/{post}', function ($slug) {
    //find a post by its slug and pass it to a view called "post"

    // $post = Post::find($slug);
    return view('post', [
        'post' => Post::find($slug)
    ]);

    Route::get('/collection', function () {

       $document= YamlFrontMatter::parseFile(resource_path('posts/my-first-post.html'));
        // $files = File::files(resource_path("posts"));

         ddd($document);


        //    $posts =collect($files)->map(function($file){

        //     $document = YamlFrontMatter::parseFile($file);
        //     return new Post(

        //         $document->title,
        //         $document->date,
        //         $document->body(),
        //         $document->slug
        //     );
        //    });



        // });
        // if(! file_exists($path=__DIR__ . "/../resources/posts/{$slug}.html")){

        //     return view('/');
        // }
        // // return $slug;
        // $posts=cache()->remember("posts.{$slug}", 5, function () use ($path) {
        //     var_dump('file_get_contents');
        //     return file_get_contents($path);

    });
    // return view('post',['post'=>$posts]);

});
