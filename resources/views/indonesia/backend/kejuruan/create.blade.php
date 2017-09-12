 @extends('layouts.app')

@section('content')
<div class="container text-center">
        <br> <br><br> <br><br> <br>
        <h2 class="thin"><b>TAMBAH PROGRAM KEAHLIAN</b></h2>
    </div>
    <!-- /Intro-->
    <div class="container">
        <div class="row">
            <!-- Article main content -->
            <article class="col-xs-12 maincontent">
                <header class="page-header">
                    <h1 class="page-title"></h1>
                </header>
                
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                             
                    {!! Form::open(['url'=>route('kejuruan.store'), 'method'=>'post', 'files'=>'true', 'enctype'=>'multipart/form-data', 'class'=>'form-horizontal']) !!}
                    @include('indonesia.backend.kejuruan._form')
                    {!! Form::close() !!}      
                        </div>
                    </div>

                </div>
                
            </article>
            <!-- /Article -->
        </div>
    </div>
    <!-- Highlights - jumbotron -->
    
    <!-- /Highlights -->
@endsection