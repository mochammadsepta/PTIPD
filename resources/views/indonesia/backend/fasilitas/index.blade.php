@extends('layouts.app')
@section('content')
<div class="container text-center">
        <br> <br><br> <br><br> <br>
        <div align="left" class="col-md-9">
                <br><br>&nbsp&nbsp&nbsp&nbsp<a href="{{ route('kategori-fasilitas.index') }}" class="btn btn-primary">Kategori Fasilitas</a>
            </div>
            <div align="right" class="col-md-3">
                <br>&nbsp<a href="{{ url('/admin/fasilitas/create') }}" class="btn btn-primary">Tambah Fasilitas Baru</a><br><br>
            </div><br><br>
    </div>
    
        <div class="row">
            <div class="col-md-11 col-md-offset-1">
            <h1 class="page-header">FASILITAS RUANG KELAS</h1>
            @foreach($kejuruan as $data)
             <!-- Trigger the Modal -->
            <img id="myImg" src="{{asset('img/'.$data->foto)}}" alt="Trolltunga, Norway" width="350" height="250">
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            

            <!-- The Modal -->
            <div id="$data->id" class="modal">

              <!-- The Close Button -->
              <span class="close" onclick="document.getElementById('$data->id').style.display='none'">&times;</span>

              <!-- Modal Content (The Image) -->
              <img class="modal-content" id="{{$data->foto}}">

              <!-- Modal Caption (Image Text) -->
              <div id="caption"></div>
            </div>
            @endforeach
        </div> 
    </div>
@endsection