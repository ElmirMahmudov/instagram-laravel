<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
            'caption' => 'required',
            'image' => 'required|image',
        ]);

        $imgPath = request('image')->store('uploads', 'public');

        $image = Image::make(public_path("storage/{$imgPath}"))->fit(1200, 1200);
        $image->save();
        
        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imgPath,
        ]);
        // \App\Post::create($data);

        return redirect('/profile/'.auth()->user()->id);
        dd(request()->all());
    }
    public function show(\App\Post $post)
    {
        // dd($post_id);
        return view('posts.show', compact('post'));
    }
}
