<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
    	$posts = Post::all();
    	return view('posts', compact('posts'));
    }

    public function showFormAddNew()
    {
    	return view('add_post');
    }

    public function store()
    {
    	$post = new Post;
    	$post->title = request('title');
    	$post->body = request('body');
    	$post->save();

    	return redirect('/');
    }

    public function showFormEditPost()
    {
    	return view('add_post');
    }
}
