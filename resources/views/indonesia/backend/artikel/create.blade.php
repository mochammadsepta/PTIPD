@extends('layouts.app')
@section('content')
<header id="head" class="secondary"></header>

    <!-- container -->
    <div class="container">


        <div class="row">
            
            <!-- Article main content -->
            <article class="col-xs-12 maincontent">
                <header class="page-header">
                    <h1 class="page-title"><center><b>TAMBAH ARTIKEL BARU</b></center></h1>
                </header>
                
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                       
					{!! Form::open(['url'=>route('artikel.store'), 'method'=>'post', 'files'=>'true','class'=>'form-horizontal']) !!}
					@include('indonesia.backend.artikel._form')
					{!! Form::close() !!}
				</div>
                    </div>

                </div>
                
            </article>
            <!-- /Article -->

        </div>
    </div>  <!-- /container -->
@endsection