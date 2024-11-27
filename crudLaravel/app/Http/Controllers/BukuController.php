<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        return view("index", compact("buku"));
    }
    public function formAdd()
    {
        return view("add");
    }

    public function store(Request $request)
    {
        Buku::create([
            'isbn' => $request->isbn,
            'judul' => $request->judul,
            'genre' => $request->genre,
            'jumlah_halaman' => $request->jumlah_halaman,
            'tahun_terbit' => $request->tahun_terbit,
            'stok' => $request->stok
        ]);

        return redirect()->route('index');
    }
    public function formEdit($isbn)
    {
        $buku = Buku::find(id: $isbn);
        // dd($buku);
        return view("edit",compact("buku"));
    }

    public function update(Request $request, $isbn)
    {
        $buku = Buku::find(id: $isbn);
        $buku->update([
            'isbn' => $request->isbn,
            'judul' => $request->judul,
            'genre' => $request->genre,
            'jumlah_halaman' => $request->jumlah_halaman,
            'tahun_terbit' => $request->tahun_terbit,
            'stok' => $request->stok
        ]);
        return redirect()->route('index');
    }

    public function delete( $isbn)
    {
        $buku = Buku::find(id: $isbn);
        $buku->delete();
        return redirect()->route('index');
        
    }
}
