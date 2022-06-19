<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    public function create()
    {
        return view('buku.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'pengarang' => 'required',
            'tahun' => 'required|numeric',
        ]);
        $query = DB::table('buku')->insert([
            'judul' => $request['judul'],
            'deskripsi' => $request['deskripsi'],
            'pengarang' => $request['pengarang'],
            'tahun' => $request['tahun']
        ]);

        return redirect('/buku')->with('success', 'Data Buku berhasil ditambahkan');
    }

    public function index()
    {
        $posts = DB::table('buku')->get();
        // dd($posts);
        return view('buku.index', compact('posts'));
    }

    public function show($id)
    {
        $post = DB::table('buku')->where('id', $id)->first();
        // dd($post);
        return view('buku.show', compact('post'));
    }

    public function edit($id)
    {
        $post = DB::table('buku')->where('id', $id)->first();
        // dd($post);
        return view('buku.edit', compact('post'));
    }

    public function update($id, Request $request)
    {
        // dd($request->all());
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'pengarang' => 'required',
            'tahun' => 'required|numeric',
        ]);
        $query = DB::table('buku')->where('id', $id)->update([
            'judul' => $request['judul'],
            'deskripsi' => $request['deskripsi'],
            'pengarang' => $request['pengarang'],
            'tahun' => $request['tahun']
        ]);

        return redirect('/buku')->with('success', 'Data Buku berhasil diupdate');
    }

    public function destroy($id)
    {
        $query = DB::table('buku')->where('id', $id)->delete();
        return redirect('/buku')->with('success', 'Data Buku berhasil dihapus');
    }
}
