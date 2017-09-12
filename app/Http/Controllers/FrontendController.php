<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profil;
use App\Kejuruan;
use App\Komponen;

class FrontendController extends Controller
{
	public function index()
    {
        $komponen = Komponen::find(1);
    	$profils = Profil::all();
        return view('indonesia.frontend.index', compact('profils','komponen'));
        //return view('layouts.admin');
    }
    public function profil()
    {
    	$profils = Profil::all();
        return view('indonesia.frontend.profil', compact('profils'));
    }
    public function kejuruan()
    {
        $kejuruans = Kejuruan::all();
        return view('indonesia.frontend.kejuruan', compact('kejuruans'));
    }
    public function detail($id)
    {
        $kejuruans = Kejuruan::find($id);
        return view('indonesia.frontend.detail_kejuruan', compact('kejuruans'));
    }
}
