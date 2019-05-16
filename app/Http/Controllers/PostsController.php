<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    function index(){
        $posts = Post::latest()->get();

        return view('post.index', compact('posts'));
    }

    function create(){
        return view('post.create');
    }

    function store(Request $request){

        $request->validate([
            'title' => 'required|unique:posts',
            'body' => 'required',
        ]);

        $store = Post::create($request->all());

        if ($store){
            return redirect(route('posts.index'))->with('success', 'Post save successfully');
        }else{
            return back()->with('warning', 'Post could not be save');
        }
    }

    function edit(Post $post){
        return view('post.edit', compact('post'));
    }

    function update(Request $request, Post $post){

        $request->validate([
            'title' => 'required|unique:posts,title,' .$post->id,
            'body' => 'required',
        ]);

        $update = $post->update($request->all());

        if ($update){
            return redirect(route('posts.index'))->with('success', 'Post update successfully');
        }else{
            return back()->with('warning', 'Post could not be update');
        }
    }

    function destroy(Post $post){

        if ($post->delete()){
            return back()->with('success', 'Post delete successfully');
        }else{
            return back()->with('warning', 'Post could not be delete');
        }
    }
}
