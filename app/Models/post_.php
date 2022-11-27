<?php

namespace App\Models;

class post
{
    private static $blog_posts = [
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
