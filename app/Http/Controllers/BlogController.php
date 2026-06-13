<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\KategoriArtikel;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $kategori = KategoriArtikel::withCount('artikel')->get();

        $query = Artikel::with(['penulis', 'kategori'])->latest();

        if ($request->has('kategori')) {
            $query->where('id_kategori', $request->kategori);
        }

        $artikel = $query->take(5)->get();

        return view('pengunjung.index', compact('artikel', 'kategori'));
    }

    public function show(int $id)
    {
        $artikel = Artikel::with(['penulis', 'kategori'])->findOrFail($id);

        $artikel_terkait = Artikel::query()
            ->where('id_kategori', $artikel->id_kategori)
            ->where('id', '!=', $id)
            ->latest()
            ->take(5)
            ->get();

        return view('pengunjung.show', compact('artikel', 'artikel_terkait'));
    }
}
