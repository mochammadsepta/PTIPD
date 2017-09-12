@extends('layouts.app')

@section('content')

    @foreach($profils as $profil)
<div class="container text-center">
        <br> <br><br> <br><br> <br>
        <h2 class="thin"><b>PROFIL SMK ASSALAAM BANDUNG</b></h2>
        <a class="btn btn-action btn-lg" href="{{ route('profil-sekolah.edit',$profil->id) }}" role="button">UBAH PROFIL SEKOLAH</a>
    </div>
    <!-- /Intro-->
        
    <!-- Highlights - jumbotron -->
    <div class="jumbotron top-space">
        <div class="container">
            
            <div class="col-sm-12">
                <h2>PROFIL UMUM</h2>
                <p align="justify">
                    {!! $profil->profil !!}
                </p>
            </div>
        
        </div>
    </div>
    <!-- /Highlights -->

    <!-- container -->
    <div class="container">
        
        <br><br>

        <div class="row">
            <div class="col-sm-4">
                {!! Html::image(asset('img/'.$profil->lokasi),null,['width'=>'600', 'height'=>'700']) !!}
            </div>
            <div class="col-sm-7 col-sm-offset-1">
                <h2>SEJARAH SINGKAT</h2>
                <p align="justify">
                    {!! $profil->sejarah !!}
                </p>
            </div>
        </div> <!-- /row -->
    </div>  <!-- /container -->
    <div class="container">
    <div class="row"> <br><br><br><br>
            <div class="col-sm-7">
                <h2>SAMBUTAN KEPALA SEKOLAH</h2>
                <p align="justify">
                    {!! $profil->sambutan !!}
                </p>
            </div>
            <div class="col-sm-5">
                {!! Html::image(asset('img/'.$profil->foto),null,['width'=>'600', 'height'=>'500']) !!}
            </div>
        </div> <!-- /row -->
    </div>
    <div class="jumbotron top-space">
        <div class="container">
            <div class="col-md-12">
                <div class="col-md-6">
                    <h3>VISI</h3>
                    <p align="justify">
                        {!! $profil->visi !!}
                    </p>
                </div>
                <div class="col-md-6">
                    <h3>MISI</h3>
                    <p align="justify">
                        {!! $profil->misi !!}
                    </p>
                </div>
            </div>  
        </div>
    </div>
    @endforeach
@endsection