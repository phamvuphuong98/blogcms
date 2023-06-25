<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with(['category', 'user'])->whereStatus(true)->orderBy('id','desc')->get();
        return view('blog', compact('posts'));
    }

    public function getPostBySlug($slug)
    {
        $post = Post::with(['category', 'user'])->whereStatus(true)->whereSlug($slug)->firstOrFail();
        $post_like_cats = Post::whereStatus(true)->whereCatId($post->cat_id)->limit(3)->get();
        $tags = Tag::orderBy('id','desc')->get();
        $categries = Category::orderBy('id','desc')->get();
        return view('blog-detail', compact('post', 'tags', 'categries', 'post_like_cats'));
    }
}
