<?php

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use App\Http\Controllers\PostContoller;

Route::get('/', [PostContoller::class, 'index']);

Route::get('posts/{post:slug}', [PostController::class, 'show']);


Route::get('categories/{category:slug}', function(Category $category) {
    return view('posts', [
        'posts' => $category->posts,
        'currentCategory' => $category,
        'categories' => Category::all()
    ]);
});

Route::get('authors/{author:username}', function(User $author) {
    return view('posts', [
        'posts' => $author->posts,
        'categories' => Category::all()

    ]);
});
