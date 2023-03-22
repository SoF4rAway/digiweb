<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$posts = posts::latest()->get();
        //return view('admin.post.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|max:255',
            'excerpt' => 'required',
            'body' => 'required',
        ],[
            'title.required' => 'Judul Wajib Diisi',
            'excerpt.required' => 'Ringkasan Wajib Diisi',
            'body.required' => 'Isi Berita Wajib Diisi',
        ]);
        $data =[
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'body' => $request->body,

        ];
        posts::create($data);
        return redirect()->to('admin')->with('success','Berita Berhasil Ditambahkan');
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
