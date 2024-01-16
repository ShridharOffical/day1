<?php

use App\Models\Post;
use Illuminate\Support\Facades\File;
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
    return view('collection', [
        'post' => Post::find($slug)
    ]);
});

Route::get('/collect', function () {

    return view('collection');
});


Route::get('/collection', function () {

    $files = File::files(resource_path("posts/"));

    $posts=collect($files)->map(function ($file){
        $document = YamlFrontMatter::parseFile(resource_path('posts/my-first-post.html'));
        return new Post(
            $document->title,
            $document->date,
            $document->body(),
            $document->slug
        );
    });
    return view('post', ['posts' => $posts]);
});

