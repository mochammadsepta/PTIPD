<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kejuruan;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class KejuruanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kejuruans = Kejuruan::all();
        return view('indonesia.backend.kejuruan.index', compact('kejuruans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('indonesia.backend.kejuruan.create');
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
            'nama'=>'required|unique:kejuruans,nama',
            'kategori'=>'required',
            'profil'=>'required',
            'program'=>'required',
            'ruangan'=>'image|max:20048',
            'siswa'=>'image|max:20048']);
        

        $kejuruan= new Kejuruan;
        $kejuruan->nama = $request->nama;
        $kejuruan->profil = $request->profil;
        $kejuruan->kategori = $request->kategori;
        $kejuruan->program = $request->program;

        if ($request->hasFile('ruangan')) {
        $file = $request->file('ruangan');
        $destinationPath = public_path().'/img/';
        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $uploadSuccess = $file->move($destinationPath, $filename);
        $kejuruan->ruangan = $filename;
        }

        if ($request->hasFile('siswa')) {
        $file = $request->file('siswa');
        $destinationPath = public_path().'/img/';
        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $uploadSuccess = $file->move($destinationPath, $filename);
        $kejuruan->siswa = $filename;
        }
 
        $kejuruan->save();
        // dd($kejuruan);
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Menyimpan $kejuruan->nama"]);
        return redirect()->route('kejuruan.index');
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
        $kejuruan = Kejuruan::find($id);
        return view('indonesia.backend.kejuruan.edit',compact('kejuruan'));
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
        $kejuruan = Kejuruan::find($id);
        $kejuruan->update($request->all());
        if($request->hasFile('ruangan'))
        {
            $filename=null;
            $uploaded_ruangan=$request->file('ruangan');
            $extension=$uploaded_ruangan->getClientOriginalExtension();
            $filename=md5(time()).'.'.$extension;
            $destinationPath=public_path().DIRECTORY_SEPARATOR.'img';
            $uploaded_ruangan->move($destinationPath, $filename);
            if($kejuruan->ruangan)
            {
                $old_ruangan=$kejuruan->ruangan;
                $filepath=public_path().DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR.$kejuruan->ruangan;
                try {
                    File::delete($filepath);
                } catch(FileNotFoundException $e) {

                }
            }
            $kejuruan->ruangan=$filename;
            $kejuruan->save();
        }

        if($request->hasFile('siswa'))
        {
            $filename=null;
            $uploaded_siswa=$request->file('siswa');
            $extension=$uploaded_siswa->getClientOriginalExtension();
            $filename=md5(time()).'.'.$extension;
            $destinationPath=public_path().DIRECTORY_SEPARATOR.'img';
            $uploaded_siswa->move($destinationPath, $filename);
            if($kejuruan->siswa)
            {
                $old_siswa=$kejuruan->siswa;
                $filepath=public_path().DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR.$kejuruan->siswa;
                try {
                    File::delete($filepath);
                } catch(FileNotFoundException $e) {

                }
            }
            $kejuruan->siswa=$filename;
            $kejuruan->save();
        }
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Menyimpan $kejuruan->nama"]);
        return redirect()->route('kejuruan.index');
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
