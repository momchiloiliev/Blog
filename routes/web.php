<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

Route::get('/', function () {
    //    $document = YamlFrontMatter::parseFile(
//        resource_path('posts/my-fourth-post.html')
//    );
//    ddd($document->date);
//    return view('posts', [
//        'posts' => Post::all()
//    ]);
//});

//    $posts = array_map(function ($file){
//        $document = YamlFrontMatter::parseFile($file);
//
//        return new Post(
//            $document->title,
//            $document->excerpt,
//            $document->date,
//            $document->body(),
//            $document->slug
//        );
//    }, $files);


//    foreach ($files as $file){
//        $document = YamlFrontMatter::parseFile($file);
//
//        $posts[] = new Post(
//            $document->title,
//            $document->excerpt,
//            $document->date,
//            $document->body(),
//            $document->slug
//        );
//    }


//    $document = YamlFrontMatter::parseFile(
//        resource_path('posts/my-fourth-post.html')
//    );

    \Illuminate\Support\Facades\DB::listen(function ($query) {
        logger($query->sql);
    });

    return view('posts', [
        'posts' => Post::with('category')->get()
    ]);
});
//tuka uf web delut posts/{post:slug}
Route::get('posts/{post:slug}', function (Post $post) {

//    $post = Post::findOrFail($post);
    //Find a post by its slug and pass it to a view called "post"
    return view('post', [
        'post' => $post
    ]);

});


Route::get('categories/{category:slug}', function(Category $category) {
    return view('posts', [
        'posts' => $category->posts
    ]);
});
