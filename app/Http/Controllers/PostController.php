<?php

namespace App\Http\Controllers;

use App\Models\posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'excerpt' => 'required',
            'body' => 'required',
        ]);

        $post = new posts();
        $post->title = $validatedData['title'];
        $post->excerpt = $validatedData['excerpt'];
        $post->body = $validatedData['body'];
        $post->save();

        return redirect()->route('admin.index')->with('success', 'Post created successfully!');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
