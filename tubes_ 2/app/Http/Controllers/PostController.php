<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangs = Post::latest() -> paginate(5);
        return view('posts.index', compact('barangs'))->with('i', (request()->input('page', 1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request() -> validate([
            'nama_barang' => 'required',
            'kategori' => 'required',
            'harga' => 'required',
        ]);

        Post::create($request -> all());
        return redirect() -> route('posts.index') ->with('success', 'barang created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang = Post::find($id);
        return view('posts.show' , compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = Post::find($id);
        return view('posts.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       request() -> validate([
            'nama_barang' => 'required',
            'kategori' => 'required',
            'harga' => 'required',
        ]);

        Post::find($id) -> update($request -> all());
        return redirect() -> route('posts.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::find($id) -> delete();
        return redirect() -> route('posts.index') -> with('success', 'barang deleted successfully');
    }
}
