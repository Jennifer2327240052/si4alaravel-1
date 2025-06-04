<?php

namespace App\Http\Controllers;

use App\Models\Sesi;
use Illuminate\Http\Request;

class SesiController extends Controller
{
    // Menampilkan daftar sesi
    public function index()
    {
        $sesis = Sesi::all();
        return view('Sesi.index', compact('sesis'));
    }

    // Menampilkan form tambah sesi
    public function create()
    {
        return view('Sesi.create');
    }

    // Menyimpan sesi baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        Sesi::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('sesi.index')->with('success', 'Sesi berhasil ditambahkan.');
    }

    // Menampilkan form edit sesi
    public function edit($id)
    {
        $sesi = Sesi::findOrFail($id);
        return view('Sesi.edit', compact('sesi'));
    }

    // Mengupdate data sesi
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        $sesi = Sesi::findOrFail($id);
        $sesi->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('sesi.index')->with('success', 'Sesi berhasil diupdate.');
    }

    // Menghapus sesi
    public function destroy($id)
    {
        $sesi = Sesi::findOrFail($id);
        $sesi->delete();

        return redirect()->route('sesi.index')->with('success', 'Sesi berhasil dihapus.');
    }
}