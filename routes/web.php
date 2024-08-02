<?php

use Illuminate\Support\Facades\Route;
use App\models\post;

Route::get('/', function () {
    return view('perkenalan',[
        'title' => 'about me',
        "name" => "Hai, aku fahryan akbar",
        "email" => "email: ryan1234@gmail.com",
        "image" => "fahryan.jpg"
    ]);
});

Route::get('/post', function () {
    
    return view('post',[
        'title' => 'post',
        'posts' => post::all()    
    ]);
});

Route::get('/home', function () {
    return view('home',[
        'title' => 'home'
    ]);
});


// single post
Route::get('post/{slug}',function($slug) {

    return view('postingan',[
        'title' => 'single post',
        'view' => post::find($slug) //ht docs kok gabisa 
    ]);
});

