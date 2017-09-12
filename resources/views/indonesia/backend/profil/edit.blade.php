@extends('layouts.app')

@section('content')
<!-- Header -->
    <br><br><br><br><br><br>
    <center>
        <h1>UBAH PROFIL SMK ASSALAAM BANDUNG</h1>
    </center>
    <!-- /Header -->
    {!! Form::model($profils, ['url'=>route('profil-sekolah.update', $profils->id), 'method'=>'put', 'files'=>'true','class'=>'form-horizontal']) !!}
    @include('indonesia.backend.profil._form')
    {!! Form::close() !!}
@endsection