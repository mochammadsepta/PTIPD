@extends('layouts.app')

@section('content')
<!-- Header -->
    <header id="head">
        <div class="container">
            <div class="row">
                <h1 class="lead"><b>PTIPD UIN SGD BANDUNG</b></h1>
                <p class="tagline">{{ $komponen->alamat }} <b>{{ $komponen->akreditasi }}</b></p>
            </div>
        </div>
    </header>
    <!-- /Header -->
<div class="container text-center">
        <br> <br>
        <h2 class="thin"><font color="green"><b>Pusat Teknologi Informasi Pangkalan Data</b></font></h2>
    </div>
    <!-- /Intro-->
        
    <!-- Highlights - jumbotron -->
    
    <!-- /Highlights -->

    <!-- container -->
    <div class="container">

        
        <br><br>
        @foreach($profils as $profil)
        <div class="row">
            <div class="col-sm-5">
                {!! Html::image(asset('img/'.$profil->foto),null,['class'=>'img-rounded img-responsive']) !!}
            </div>
            <div class="col-sm-7">
                <h2>SAMBUTAN KEPALA P T I P D</h2>
                <p align="justify">
                    {{ $profil->sambutan }}
                </p>
            </div>
        </div> <!-- /row -->
        @endforeach
    </div>  <!-- /container -->
    <div class="jumbotron top-space">
        <div class="container">
            <div class="header">
                <h3 class="text-center"><b>INFORMASI TERBARU</b></h3>
                <br>
            </div>
            
            <div class="row">
                <div class="col-md-12 col-md-offset-1">
                    <div id="news-slider" class="owl-carousel col-md-12">
                        <div class="post-slide col-md-3">
                            <div class="post-header">
                                <a href="#" class="subtitle">Lorem ipsum</a>
                                <h3 class="post-title"><a href="#">Latest News Post</a></h3>
                            </div>
                            <div class="pic">
                                <img src="assets/images/1.jpg" alt="">
                            </div>
                            <ul class="post-bar">
                                <li><i class="fa fa-users"></i> <a href="#">Admin</a></li>
                                <li><i class="fa fa-clock-o"></i> March 5,2016</li>
                                <li><i class="fa fa-comments"></i> <a href="#">2 Comment</a></li>
                            </ul>
                        </div>
                        <div class="post-slide col-md-3">
                            <div class="post-header">
                                <a href="#" class="subtitle">Lorem ipsum</a>
                                <h3 class="post-title"><a href="#">Latest News Post</a></h3>
                            </div>
                            <div class="pic">
                                <img src="assets/images/1.jpg" alt="">
                            </div>
                            <ul class="post-bar">
                                <li><i class="fa fa-users"></i> <a href="#">Admin</a></li>
                                <li><i class="fa fa-clock-o"></i> March 5,2016</li>
                                <li><i class="fa fa-comments"></i> <a href="#">2 Comment</a></li>
                            </ul>
                        </div>
                        <div class="post-slide col-md-3">
                            <div class="post-header">
                                <a href="#" class="subtitle">Lorem ipsum</a>
                                <h3 class="post-title"><a href="#">Latest News Post</a></h3>
                            </div>
                            <div class="pic">
                                <img src="assets/images/1.jpg" alt="">
                            </div>
                            <ul class="post-bar">
                                <li><i class="fa fa-users"></i> <a href="#">Admin</a></li>
                                <li><i class="fa fa-clock-o"></i> March 5,2016</li>
                                <li><i class="fa fa-comments"></i> <a href="#">2 Comment</a></li>
                            </ul>
                        </div>
                        <br><br>
                        <div class="col-sm-10">
                        <button class="btn btn-block btn-lg">Baca Informasi Lainnya</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection