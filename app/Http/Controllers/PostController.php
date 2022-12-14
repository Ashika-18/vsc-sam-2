<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function index() {
        $posts = Post::all();
        $posts = Post::all()->sortByDesc('created_at');
        return view('posts.index', compact('posts'));
    }

    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name'    => 'required',
            'title'   => 'required',
            'content' => 'required',
        ]);

        $post = new Post();
        $post->name     = $request->input('name');
        $post->title    = $request->input('title');
        $post->content  = $request->input('content');
        $post->save();

        return redirect()->route('posts.show', ['id' => $post->id])->with('message', '登録しました！');
    }

    public function show(Post $post, $id) {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    public function edit($id) {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name'    => 'required',
            'title'   => 'required',
            'content' => 'required',
        ]);

        $post = Post::where('id', $id)->firstOrFail();
        $post->name     = $request->input('name');
        $post->title    = $request->input('title');
        $post->content  = $request->input('content');
        $post->save();

        return redirect()->route('posts.show', ['id'  => $post->id])->with('message', '更新しました！');
    }

    public function destroy($id) {
        $post = Post::where('id', $id)->firstOrFail();
        $post->delete();

        return redirect()->route('posts.index');
    }
}
