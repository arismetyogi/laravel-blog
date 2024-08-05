<?php

use App\Models\Category;
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
	// $posts = Post::simplePaginate(5); //limit per page 5 data -> mengurangi query

	//eager loading: load semua tabel di awal, bukan per record
	// $posts = Post::with(['author', 'category'])->latest()->get();

		$posts = Post::latest()->get();
	return view('posts', ['title' => 'Blogs', 'posts' => $posts]);
});

// route model binding: bing slug pada route
Route::get('/posts/{post:slug}', function(Post $post) {
	// $post = Post::find($slug);
	return view('post', ['title' => 'Single Post', 'post' => $post]);
});

// filter view post berdasarkan user yang diklik
Route::get('/authors/{user:username}', function(User $user) {
	// Lazy Eager Loading -> load setelah parentnya dipanggil
	// $posts = $user->posts->load(['category', 'author']);
	return view('posts', ['title' => count($user->posts) . ' Articles by ' . $user->name, 'posts' => $user->posts]);
});

// route model binding: bing slug pada route
Route::get('/categories/{category:slug}', function(Category $category) {
	// $post = Post::find($slug);
	// $posts = $category->posts->load(['category', 'author']);
	return view('posts', ['title' => 'Articles on: ' .  $category->name, 'posts' => $category->posts]);
});

Route::get('contact', function (){
	return view('contact', ['title' => 'Contact Page',]);
});
