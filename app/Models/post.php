<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class post 
{
    private static $blogspot = [
        [
            'title' => 'Post Pertama',
            'slug' => 'post-pertama',
            'author' => 'Fahryan Akbar',
            'body' => 'Postingan pertama dari artikel akan ditampilkan disini. karena ini hanyalah portofolio sederhana dan saya masih dalam proses belajar, maka saya mohon
            maaf apabila isi dari post pertama ini masih kurang lengkap ataupun jauh dari kata lengkap. terimakasih '
        ],
        [
            'title' => 'Post Kedua',
            'slug' => 'post-kedua',
            'author' => 'Fahryan Akbar',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur tempore recusandae omnis similique quasaspernatur molestias beatae tempora! Deserunt, aut.
            Nihil autem, vero maxime est quis corrupti culpa eligendi vitae? Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Tempora, non. Sint odit quos laudantium voluptates, 
            illo at sequi architecto atque, necessitatibus laboriosam sunt! Ad sequi, incidunt neque repellat sed at.'
        ]
    ];

    public static function all(){
        return collect(self::$blogspot);
    }

    public static function find($slug){
        $posts = static::all();

        // $new_post = [];
        // foreach($posts as $p){
        //     if($p['slug'] === $slug){
        //         $new_post = $p;
        //     }
        // }

        return $posts -> firstWhere('slug',$slug);
    }
}
