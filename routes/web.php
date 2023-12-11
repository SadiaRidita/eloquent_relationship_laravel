<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Phone;
use App\Models\Post;
use App\Models\Comment;

Route::get('/', function () {
    $phone = User::find(1);
    $phone = User::find(2)->phone;
//    return $phone;
    $user = Phone::find(2);
    $user = Phone::find(2)->user;
//    return $user;

    $users = User::all();
    $phones = Phone::all();
    //return $users;
    $comments = Post::find(1);
    $comments = Post::find(2)->comments;
    $post = Comment::find(1);
    $post = Comment::find(5)->post;
    //return $post;
    $posts = Post::with('comments')->get();
    $comments = Comment::all();

    $posts = Post::with('catagories')->get();
    //return $posts;
    return view('welcome', compact('posts'));
});

