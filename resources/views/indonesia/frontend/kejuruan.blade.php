@extends('layouts.app')

@section('content')
<div class="container text-center">
        <br> <br><br> <br><br> <br>
        <h2 class="thin"><b>Struktur Organisasi PTIPD UIN SGD BANDUNG</b></h2>
    </div>
    <!-- /Intro-->
        
    <!-- Highlights - jumbotron -->
    <div class="jumbotron top-space">
        <div class="container">
            
            <div class="row">
                @foreach($kejuruans as $kejuruan)
                <div class="col-sm-4" align="center">
                <a href="">
                    <div class="pic">
                    <br><br>
                        <img src="{{asset('img/'.$kejuruan->ruangan)}}" class="img-responsive img-circle" alt="" style="width: 225px; height: 225px;">
                        </a>
                        <center><h4>{{ $kejuruan->kategori }}</h4>
                        <p class="text-muted">{{ $kejuruan->nama }}</p></center>
                        <a href="{{ url('/detail-kejuruan', $kejuruan->id) }}" class="btn btn-primary btn-block">Lihat Detail</a>
                    </div>
                </div>
                @endforeach
            </div>
        
        </div>
    </div>
    <!-- /Highlights -->
@endsection