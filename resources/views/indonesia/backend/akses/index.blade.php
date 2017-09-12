@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <br><br><br><br><br><br><br><br>
            <div class="panel panel-default panel-table">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-12" ><br>
                            <div class="col-md-9">
                            <h2 class="panel-title"><b>HAK AKSES WEBSITE SMK ASSALAAM</b></h2>
                            </div>
                            <div class="col-md-3">
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <a href="{{ url('/admin/hak-akses/create') }}" class="btn btn-primary">Tambah Akun</a>
                            </div>

                        </div>
                       
                    </div>
                </div>
                <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>  
                        <th><center>No</center></th>
                        <th><center>Nama Pengguna</center></th>
                        <th><center>Alamat Email</center></th>
                        <th colspan="2"><center>Opsi</center></th>
                    </tr> 
                  </thead>
                  <tbody>
                  @php
                  $no = 1;
                  @endphp
                    @foreach($member as $a)
                    <tr>
                        <td><center>{{ $no }}</center></td>
                        <td><center>{{ $a->name }}</center></td>
                        <td><center>{{ $a->email }}</center></td>
                        @if($a->id != 1)
                        <td><center><a href="{{ route('hak-akses.edit',$a->id) }}" class="btn btn-warning btn-xs">Ubah</a></center></td>
                        <td><center><a href="{{ route('hak-akses.destroy',$a->id) }}" class="btn btn-danger btn-xs">Hapus</a></center></td>
                        @endif 
                        @if($a->id == 1)
                        <td><center><a href="{{ route('hak-akses.edit',$a->id) }}" class="btn btn-warning btn-xs">Ubah</a></center></td>
                        <td><center><button data-toggle="modal" data-target="#myModal" class="btn btn-default btn-xs">Hapus</a></center></td>
                        @endif 
                    </tr>
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Tidak Dapat Menghapus Data</h4>
                              </div>
                              <div class="modal-body">
                                <p>Anda tidak bisa menghapus akun <b>Admin Utama</b> dari daftar ini</p>
                              </div>
                            </div>
                        </div>
                    </div>
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