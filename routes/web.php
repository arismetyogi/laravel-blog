<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return view('home', ['title' => 'Home Page']);
});

Route::get('about', function (){
//    mengirimkan data berupa array associative pada view about
	return view('about' ,['title' => 'About Page', 'name' => 'Yogi Arismet']);
});

// mengambil data dari model Post dengan method all()
Route::get('posts', function (){
	return view('posts', ['title' => 'Blogs', 'posts' => Post::all()]);
});

// route model binding: bing slug pada route
Route::get('/posts/{post:slug}', function(Post $post) {
	// $post = Post::find($slug);
	return view('post', ['title' => 'Single Post', 'post' => $post]);
});

// filter view post berdasarkan user yang diklik
Route::get('/authors/{user}', function(User $user) {
	// $user = user::find($slug);
	return view('posts', ['title' => 'Articles by ' . $user->name, 'posts' => $user->posts]);
});

Route::get('contact', function (){
	return view('contact', ['title' => 'Contact Page',]);
});
