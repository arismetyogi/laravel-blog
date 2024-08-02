<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;

class Post extends Model // default: terhubung ke tabel 'posts', jika nama tabel berbeda, maka harus distate di dalam class: {protected $table = 'other_name'}, untuk menimpa nama kolom primary key: {protected $primaryKey = 'post_id'}
{
	//// tidak perlu data array disini
// $fillable : agar bisa diinsert data dari php artisan tinker dengan syntax: App\Models\Post::create([
// 'title'=>'Title 1',
// 'author' => 'Author Name',
// 'slug' => 'slug-link',
// 'body' => 'loremXX'
// ]);
	protected $fillable = ['title', 'author', 'slug', 'body'];
}
