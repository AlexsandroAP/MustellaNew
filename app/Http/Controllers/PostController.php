<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('dashboard', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('postagem');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'caption' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $imagePath = $request->file('image')->store('images', 'public');

            Post::create([
                'title' => $request->title,
                'caption' => $request->caption,
                'image_path' => $imagePath,
            ]);

            return redirect()->route('dashboard')->with('success', 'Post created successfully.');
        } else {
            return back()->withErrors(['image' => 'Image upload failed.']);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post)
    {
        //
    }
}
