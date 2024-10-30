<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;
use App\Models\Pelanggan;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penjualan = Penjualan::all();
        return view('home.penjualan.index', compact('penjualan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pelanggan = Pelanggan::all();
        return view('home.penjualan.tambah', compact('pelanggan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'total' => 'required|numeric',
            'id_pelanggan' => 'required|numeric',
        ]);

        Penjualan::create([
            'tanggal' => $request->tanggal,
            'total' => $request->total,
            'id_pelanggan' => $request->id_pelanggan,
        ]);

        return redirect('/penjualan')->with('success', 'Penjualan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $penjualan = Penjualan::find($id);
        $pelanggan = Pelanggan::all();
        return view('home.penjualan.edit', compact('penjualan', 'pelanggan'));
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
        $request->validate([
            'tanggal' => 'required|date',
            'total' => 'required|numeric',
            'id_pelanggan' => 'required|numeric',
        ]);

        $penjualan = Penjualan::find($id);
        $penjualan->update([
            'tanggal' => $request->tanggal,
            'total' => $request->total,
            'id_pelanggan' => $request->id_pelanggan,
        ]);
        return redirect('/penjualan')->with(['success' => 'Data Berhasil Diubah!!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
