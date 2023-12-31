<?php

use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\File;

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
//    \Illuminate\Support\Facades\DB::listen(function ($query) {
//        logger($query->sql,$query->bindings);
//    });

    return view('posts',[
        "posts"=>Post::latest()->get(),
        "categories"=>Category::all()
    ]);
})->name('home');

Route::get('posts/{post}',function(Post $post){
    return view("post",[
        'post'=> $post,
    ]);
});

Route::get('categories/{category:slug}',function (Category $category){
   return view('posts',[
        "posts"=> $category->posts,
       "currentCategory"=>$category,
       "categories"=>Category::all()
   ]);
})->name('category');

Route::get('authors/{user:username}',function (User $user){
    return view('posts',[
        "posts"=> $user->posts,
        "categories"=>Category::all()
    ]);
});
