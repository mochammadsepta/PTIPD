<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriFasilitas;
use Session;

class KategoriFasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $member = KategoriFasilitas::all();
        return view('indonesia.backend.kategori_fasilitas.index')->with(compact('member'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, ['nama'=>'required|unique:kategori_fasilitas']);
        $author = KategoriFasilitas::create($request->only('nama'));
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Menyimpan $author->name"]);
        return redirect()->route('kategori-fasilitas.index');
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
        $member = KategoriFasilitas::find($id);
        $member->delete();
        return redirect()->route('kategori-fasilitas.index');

    }
}
