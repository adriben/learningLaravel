<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {


        $posts = Post::all();

        return view('articles', [
            'posts' => $posts
        ]);
    }

    public function show($id)
    {

        $post = Post::findOrFail($id);

        // $post = Post::where('title', 'Beatat nam et et necessitatibus.')->firstOrFail();
        // dd($post);

        // $posts = [
        //     1 => 'Mon titre 1',
        //     2 => 'Mon titre 2'
        // ];

        // $post = $posts[$id] ?? 'pas de titre';

        return view('article', [
            'post' => $post

        ]);
    }

    public function store(Request $request)
    {

        // $post = new Post();
        // $post->title = $request->title;
        // $post->content = $request->content;
        // $post->save();

        Post::create([
            'title' => $request->title,
            'content' => $request->content
        ]);


        dd('Post created');
    }

    public function create()
    {
        return view('form');
    }

    public function contact()
    {
        return view('contact');
    }
}
