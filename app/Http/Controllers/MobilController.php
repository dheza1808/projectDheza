<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    public function index()
    {
        $mobil = Mobil::all();
        return view('mobil', compact('mobil'));
    }

    public function create()
    {
        return view('mobil.create');
    }

    public function store(Request $request)
    {
        $mobil = new Mobil();
        $mobil->nama_mobil = $request->input('nama_mobil');
        $mobil->jenis_mobil = $request->input('jenis_mobil');
        $mobil->tanggal_masuk = $request->input('tanggal_masuk');
        $mobil->status_pembayaran = $request->input('status_pembayaran');
        $mobil->save();
        return redirect()->route('mobil.index')->with('success', 'Mobil berhasil ditambahkan');
    }

    public function edit($id)
    {
        $mobil = Mobil::find($id);
        return view('mobil.edit', compact('mobil'));
    }

    public function update(Request $request, $id)
    {
        $mobil = Mobil::find($id);
        $mobil->nama_mobil = $request->input('nama_mobil');
        $mobil->jenis_mobil = $request->input('jenis_mobil');
        $mobil->tanggal_masuk = $request->input('tanggal_masuk');
        $mobil->status_pembayaran = $request->input('status_pembayaran');
        $mobil->save();
        return redirect()->route('mobil.index')->with('success', 'Mobil berhasil diupdate');
    }

    public function destroy($id)
    {
        $mobil = Mobil::find($id);
        $mobil->delete();
        return redirect()->route('mobil.index')->with('success', 'Mobil berhasil dihapus');
    }
}
