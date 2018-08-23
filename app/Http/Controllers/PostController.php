<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post as Post;
class PostController extends Controller{
    
    public function __contruct(){
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index(){

        $posts = Post::orderBy('created_at', 'desc')->get();
        // $posts = Post::latest()->get(); otra manera
        return view('posts.index', compact('posts'));
    }

    public function create(){
        return view('posts.create');
    }

    public function show($id){
        $posts = Post::find($id);
        return view('posts.show', compact('posts'));
    }

    public function store(){
        // $post = new Post;

        // $post->title = request('title');
        // $post->body = request('body');
        // $post->save();

        // dos manera de hacerlo con mismos resultados 

        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        $post = new Post(request(['title', 'body']));
        auth()->user()->publish($post);
        // Post::create([
        //     'title' => request('title'), 
        //     'body' => request('body'), 
        //     'user_id' => auth()->id()
        // ]);

        return redirect('/');
        
    }
}
