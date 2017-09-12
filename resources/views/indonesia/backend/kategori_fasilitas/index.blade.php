@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-7">
        <br><br><br><br><br><br><br><br>
        {!! Form::open(['url'=>route('kategori-fasilitas.store'), 'method'=>'post', 'files'=>'true','class'=>'form-horizontal']) !!}
        <div class="form-group{{ $errors->has('nama') ? 'has-error' : '' }}">
        {!! Form::label('nama','Tambah Kategori',['class'=>'col-md-4 control-label']) !!}
            <div class="col-md-5">
                {!! Form::text('nama',null,['class'=>'form-control']) !!}
                {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="col-md-2">
        {!! Form::submit('Tambah', ['class'=>'btn btn-primary btn-xs']) !!}
    </div>
        </div>
        
        {!! Form::close() !!}
            <div class="panel panel-default panel-table">
                <div class="panel-heading">
                    
                </div>
                <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>  
                        <th><center>No</center></th>
                        <th><center>Nama Kategori</center></th>
                        <th><center>Opsi</center></th>
                    </tr> 
                  </thead>
                  <tbody>
                  @php
                  $no = 1;
                  @endphp
                    @foreach($member as $a)
                    <tr>
                        <td><center>{{ $no }}</center></td>
                        <td><center>{{ $a->nama }}</center></td>
                        <td><center><a href="{{ route('kategori-fasilitas.destroy',$a->id) }}" class="btn btn-warning btn-xs">Hapus</a></center></td>
                    </tr>
                    @php
                        $no++;
                    @endphp
                    @endforeach
                  </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection