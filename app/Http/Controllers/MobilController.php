<?php

namespace App\Http\Controllers;

use App\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Mobil::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        $mobil = new Mobil;
        $mobil->nama_mobil = $request->nama_mobil;
        $mobil->harga_mobil = $request->harga_mobil;
        $mobil->stock = $request->stock;
        $mobil->save();

        return "Data berhasil di input";
    }

    public function show($id)
    {
        $mobil = Mobil::find($id);
        return $mobil;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $mobil = Mobil::find($id);
        $mobil->nama_mobil = $request->nama_mobil;
        $mobil->harga_mobil = $request->harga_mobil;
        $mobil->stock = $request->stock;
        $mobil->save();
        
        
        return "Data berhasil di input";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $mobil = Mobil::find($id);
        $mobil->delete();

        return "Data berhasil di hapus";
    }
}
