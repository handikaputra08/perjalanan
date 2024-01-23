<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Bidang IAI",
        "email" => "bid3diskominfos@yahoo.com",
        "image" => "gambar.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Handika",
            "body" => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero illum quas explicabo praesentium 
                        nemo repellendus, eveniet, tenetur in beatae dicta fugit sapiente quidem, maxime voluptate incidunt corporis atque rerum distinctio."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Dika",
            "body" => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero illum quas explicabo praesentium."
        ]
    ];
    
    return view('posts',[
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Handika",
            "body" => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero illum quas explicabo praesentium 
                        nemo repellendus, eveniet, tenetur in beatae dicta fugit sapiente quidem, maxime voluptate incidunt corporis atque rerum distinctio."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Dika",
            "body" => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero illum quas explicabo praesentium."
        ]
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;

        }
    }
    return view('post',[
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
