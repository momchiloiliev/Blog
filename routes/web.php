<?php

use App\Models\Post;
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


    return view('posts', [
        'posts' => Post::all()
    ]);
});

Route::get('posts/{post}', function ($slug) {

    $post = Post::findOrFail($slug);
    //Find a post by its slug and pass it to a view called "post"
    return view('post', [
        'post' => $post
    ]);

});