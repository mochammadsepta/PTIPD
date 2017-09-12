@extends('layouts.app')

@section('content')
<!-- Header -->
    
    <!-- /Header -->
    @foreach($profils as $profil)
<div class="container text-center">
        <br> <br><br> <br><br> <br>
        <h2 class="thin"><b>PROFIL P T I P D UIN SGD BANDUNG</b></h2>
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
            <div class="col-sm-5">
                {!! Html::image(asset('img/'.$profil->lokasi),null,['class'=>'img-rounded img-responsive']) !!}
            </div>
            <div class="col-sm-6">
                <h2>SEJARAH SINGKAT</h2>
                <p align="justify">
                    {!! $profil->sejarah !!}
                </p>
            </div>
        </div> <!-- /row -->
    </div>  <!-- /container -->
    
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