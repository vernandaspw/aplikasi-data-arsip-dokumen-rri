<?php

namespace App\Http\Controllers;

use App\Models\KategoriArsip;
use Illuminate\Http\Request;

class KategoriArsipController extends Controller
{
    public function index()
    {
        $datas = KategoriArsip::latest()->get();
        return view('kategori.kategori', compact('datas'));
    }

    public function create()
    {
        return view('kategori.kategori_create');
    }

    public function store(Request $request)
    {
        KategoriArsip::create([
            'Nama' => $request->nama,
        ]);
        session()->flash('success', 'berhasil tambah kategori arsip');
        return redirect()->back();
    }

    public function delete($id)
    {
        KategoriArsip::find($id)->delete();
        session()->flash('success', 'berhasil hapus');
        return redirect()->back();
    }
}
