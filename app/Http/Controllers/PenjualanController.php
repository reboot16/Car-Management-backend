<?php

namespace App\Http\Controllers;

use App\Penjualan;
use App\Mobil;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Penjualan::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        $penjualan = new Penjualan;
        $penjualan->nama_pembeli = $request->nama_pembeli;
        $penjualan->email = $request->email;
        $penjualan->nomor_telepon = $request->nomor_telepon;
        $penjualan->mobil_id = $request->mobil_id;

        $mobil = Mobil::find($request->mobil_id);
        $mobil->stock--;

        $mobil->save();
        $penjualan->save();

        return $penjualan;
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penjualan = Penjualan::find($id);
        return $penjualan;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $penjualan = Penjualan::find($id);
        $penjualan->nama_pembeli = $request->nama_pembeli;
        $penjualan->email = $request->email;
        $penjualan->nomor_telepon = $request->nomor_telepon;
        $penjualan->mobil_id = $request->mobil_id;

        $penjualan->save();

        return $penjualan;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $penjualan = Penjualan::find($id);
        $penjualan->delete();

        return "Data dihapus";
    }
}
