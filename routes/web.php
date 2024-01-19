<?php

use App\Models\Student;
use App\Models\User;
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

Route::get('/', function () {

    return view('components/layout');
});


// Route::get('/collection', function () {
//     // Use caching through the Post class.
//     $posts = Post::all();

//     return view('post', ['posts' => $posts]);
// });

// ------- end frist one STUF ------------//

Route::get('/collection',function(){ 

// \Illuminate\Support\Facades\DB::listen(function ($query){

//      logger($query->sql,$query->bindings);
// });


    return view('post',['posts'=>Student::latest()->with(['category','author'])->get()
        ]);
});


Route::get('post/{post:slug}',function(Student $post){ 
  
    
    return view('collection',['post'=>$post]);
});

Route::get('categories/{category:slug}', function(Category $category) {
    return view('post', ['posts' => $category->student]);
}); 

Route::get('authors/{authors:username}', function(User $authors) {

    return view('post', ['posts' => $authors->student]);
}); 

