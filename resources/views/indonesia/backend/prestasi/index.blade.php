@extends('layouts.app')
@section('content')
    <div class="jumbotron top-space">
        <div class="container">
            <div align="left" class="col-md-8">
                <br><br>&nbsp&nbsp&nbsp&nbsp<a href="{{ route('kategori-fasilitas.index') }}" class="btn btn-primary">Kategori Prestasi</a>
            </div>
            <div align="right" class="col-md-4">
                <br><br>&nbsp<a href="{{ url('/admin/fasilitas/create') }}" class="btn btn-primary">Tambah Prestasi Baru</a><br><br>
            </div><br><br>
        </div>
    </div>
        <div class="row">
            <div class="col-md-11 col-md-offset-1">
            <h1 class="page-header"></h1>
            @foreach($kejuruan as $data)
             <!-- Trigger the Modal -->
            <img id="myImg" src="{{asset('img/'.$data->foto)}}" alt="Trolltunga, Norway" width="350" height="250">
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            

            <!-- The Modal -->
            <div id="myModal" class="modal">

              <!-- The Close Button -->
              <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>

              <!-- Modal Content (The Image) -->
              <img class="modal-content" id="img01">

              <!-- Modal Caption (Image Text) -->
              <div id="caption"></div>
            </div>
            @endforeach
        </div> 
    </div>
@endsection