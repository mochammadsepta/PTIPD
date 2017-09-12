<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fasilitas;
use Session;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kejuruan = Fasilitas::all();
        return view('indonesia.backend.fasilitas.index', compact('kejuruan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('indonesia.backend.fasilitas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul'=>'required',
            'kategori'=>'required|exists:kategori_fasilitas,id',
            'keterangan'=>'required',
            'foto'=>'image|max:20048']);
        $fasilitas= new Fasilitas;
        $fasilitas->judul = $request->judul;
        $fasilitas->kategori = $request->kategori;
        $fasilitas->keterangan = $request->keterangan;

        if ($request->hasFile('foto')) {
        $file = $request->file('foto');
        $destinationPath = public_path().'/img/';
        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $uploadSuccess = $file->move($destinationPath, $filename);
        $fasilitas->foto = $filename;
        }
 
        $fasilitas->save();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Menyimpan $fasilitas->judul"]);
        return redirect()->route('fasilitas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
