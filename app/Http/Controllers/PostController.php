<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller {


    public function __construct() {
        $this->middleware(['auth'])->only(['store', 'destroy']);            
    }


    public function index() {

        // $posts = Post::orderBy('created_at', 'desc')->with(['user', 'likes'])->paginate(6);
        $posts = Post::latest()->with(['user', 'likes'])->paginate(6);

        return view('posts.index', [
            'posts' => $posts
        ]);        
    }

    public function show(Post $post) {
        return view('posts.show', [
            'post' => $post
        ]);
    }


    public function store(Request $request) {
        //dd('ok');
        $this->validate($request, [
            'body' => 'required'
        ]);

        // Post::create([
        //     'user_id' => auth()->id(),
        //     'body' => $request->body
        // ]);

        //auth()->user()->posts()->create();
        //$request->user()->posts()->create([
        //    'body' => $request->body
        //]);

        $request->user()->posts()->create($request->only('body'));

        return back();
    }

    public function destroy(Post $post) {
         //dd($post);

        // if (!$post->ownedBy(auth()->user())) {
        //     dd('no');
        // }

        $this->authorize('delete', $post);

        $post->delete();


        return back();
    }

}

