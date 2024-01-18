<?php

use App\Models\Post;
use App\Models\Student;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\Cache;

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

// --- THAT STUF IS ALL IN aPosta --- //

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/article', function () {
//     return view('article');
// });

// Route::get('posts/{post}', function ($slug) {
//     //find a post by its slug and pass it to a view called "post"
//     return view('collection', [
//         'post' => Post::find($slug)
//     ]);
// });

// Route::get('/collect', function () {

//     return view('collection');
// });


// Route::get('/collection', function () {
//     // Use caching through the Post class.
//     $posts = Post::all();

//     return view('post', ['posts' => $posts]);
// });

// ------- end frist one STUF ------------//

Route::get('/collection',function(){ 
    $posts=Student::all();
    return view('post',['posts'=>$posts]);});



Route::get('post/{post:slug}',function(Student $post){
    
    return view('collection',['post'=>$post]);});

  Route::get('categories/{category}',function(Category $category){
    
    
    
    return view('post',['posts'=>$category->posts]);


  });  