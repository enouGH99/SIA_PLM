<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post pertama",
            "author" => "Sundaya",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis blanditiis facere dignissimos voluptates consequatur delectus nemo, aut impedit ipsa libero nihil maiores! Nesciunt aspernatur dignissimos dolorum nam doloremque. Itaque neque et voluptatem, nemo, aut nisi earum pariatur eum fugit, a possimus quae vero quibusdam maxime dolores nihil architecto rerum officia qui natus illo laboriosam? Quisquam tenetur neque, hic, voluptate ut nesciunt aspernatur ratione earum magnam corporis excepturi. Accusantium nulla iure voluptatum veniam minima, amet enim dolorem sequi, rem doloremque distinctio?",
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post kedua",
            "author" => "Dimas",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis blanditiis facere dignissimos voluptates consequatur delectus nemo, aut impedit ipsa libero nihil maiores! Nesciunt aspernatur dignissimos dolorum nam doloremque. Itaque neque et voluptatem, nemo, aut nisi earum pariatur eum fugit, a possimus quae vero quibusdam maxime dolores nihil architecto rerum officia qui natus illo laboriosam? Quisquam tenetur neque, hic, voluptate ut nesciunt aspernatur ratione earum magnam corporis excepturi. Accusantium nulla iure voluptatum veniam minima, amet enim dolorem sequi, rem doloremque distinctio?",
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
