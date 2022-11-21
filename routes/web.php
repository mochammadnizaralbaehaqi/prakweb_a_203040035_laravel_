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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Mochammad Nizar Albaehaqi",
        "email" => "mochammadnizar10@gmail.com"
    ]);
});

Route::get('/blog', function () {

    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Mochammad Nizar Albaehaqi",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui maxime sunt ullam veniam officia, distinctio ratione vitae molestiae deleniti perferendis doloribus at dignissimos repellat esse similique debitis iusto tempore, neque dolorum quod! Porro, eos ut beatae optio ipsum cum, odit officia ullam labore quas placeat aperiam! Labore est cupiditate voluptatum, voluptas distinctio corrupti eum, cum impedit maiores illum dolorum atque inventore pariatur, voluptatibus commodi velit sint soluta. Error qui ad, explicabo accusantium sint optio perspiciatis quis iure, magnam placeat ea."
        ],

        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Mochammad Nizar Albaehaqi",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui maxime sunt ullam veniam officia, distinctio ratione vitae molestiae deleniti perferendis doloribus at dignissimos repellat esse similique debitis iusto tempore, neque dolorum quod! Porro, eos ut beatae optio ipsum cum, odit officia ullam labore quas placeat aperiam! Labore est cupiditate voluptatum, voluptas distinctio corrupti eum, cum impedit maiores illum dolorum atque inventore pariatur, voluptatibus commodi velit sint soluta. Error qui ad, explicabo accusantium sint optio perspiciatis quis iure, magnam placeat ea."
        ]
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Mochammad Nizar Albaehaqi",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui maxime sunt ullam veniam officia, distinctio ratione vitae molestiae deleniti perferendis doloribus at dignissimos repellat esse similique debitis iusto tempore, neque dolorum quod! Porro, eos ut beatae optio ipsum cum, odit officia ullam labore quas placeat aperiam! Labore est cupiditate voluptatum, voluptas distinctio corrupti eum, cum impedit maiores illum dolorum atque inventore pariatur, voluptatibus commodi velit sint soluta. Error qui ad, explicabo accusantium sint optio perspiciatis quis iure, magnam placeat ea."
        ],

        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Mochammad Nizar Albaehaqi",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui maxime sunt ullam veniam officia, distinctio ratione vitae molestiae deleniti perferendis doloribus at dignissimos repellat esse similique debitis iusto tempore, neque dolorum quod! Porro, eos ut beatae optio ipsum cum, odit officia ullam labore quas placeat aperiam! Labore est cupiditate voluptatum, voluptas distinctio corrupti eum, cum impedit maiores illum dolorum atque inventore pariatur, voluptatibus commodi velit sint soluta. Error qui ad, explicabo accusantium sint optio perspiciatis quis iure, magnam placeat ea."
        ]
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
