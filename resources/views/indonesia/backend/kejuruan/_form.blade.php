
                            <div>
                                {!! Form::label('nama','Nama Program Keahlian *',['class'=>'col-md-6']) !!}
                                {!! Form::label('kategori','Kategori Program Keahlian *',['class'=>'col-md-6']) !!}
                            </div>
                            <div class="form-group{{ $errors->has('nama','kategori') ? 'has-error' : '' }}">
                                <div class="col-md-6">
                                    {!! Form::text('nama',null,['class'=>'form-control','placeholder'=>'Contoh : Teknik Sepeda Motor']) !!}
                                    {!! $errors->first('nama','<p class="help-block">:message</p>') !!}
                                </div>
                                <div class="col-md-6">
                                    {!! Form::text('kategori',null,['class'=>'form-control','placeholder'=>'Contoh : Otomotif']) !!}
                                    {!! $errors->first('kategori','<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                            <br>
                            <div class="form-group{{ $errors->has('profil') ? 'has-error' : '' }}">
                            {!! Form::label('profil','Profil Umum *',['class'=>'col-md-6']) !!}
                                <div class="col-md-12">
                                    {!! Form::textarea('profil',null,['class'=>'ckeditor']) !!}
                                    {!! $errors->first('profil','<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                            <br>
                            <div class="form-group{{ $errors->has('program') ? 'has-error' : '' }}">
                            {!! Form::label('program','Program Belajar *',['class'=>'col-md-6']) !!}
                                <div class="col-md-12">
                                    {!! Form::textarea('program',null,['class'=>'ckeditor']) !!}
                                    {!! $errors->first('program','<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                            <br>
                            <div>
                                {!! Form::label('ruangan','Foto Ruang Praktik *',['class'=>'col-md-6']) !!}
                                {!! Form::label('siswa','Foto Siswa *',['class'=>'col-md-6']) !!}
                            </div>
                            <div class="form-group{{ $errors->has('ruangan','siswa') ? 'has-error' : '' }}">
                                <div class="col-md-6">
                                @if(isset($kejuruan) && $kejuruan->ruangan)
                                <p>
                                    {!! Html::image(asset('img/'.$kejuruan->ruangan),null,['class'=>'img-rounded img-responsive']) !!}
                                </p>
                                @endif
                                    <input type="file" name="ruangan" class="btn btn-default btn-block" required=""></input>
                                    {!! $errors->first('ruangan','<p class="help-block">:message</p>') !!}
                                </div>
                                <div class="col-md-6">
                                @if(isset($kejuruan) && $kejuruan->siswa)
                                <p>
                                    {!! Html::image(asset('img/'.$kejuruan->siswa),null,['class'=>'img-rounded img-responsive']) !!}
                                </p>
                                @endif
                                    <input type="file" name="siswa" class="btn btn-default btn-block" required=""></input>
                                    {!! $errors->first('siswa','<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <div class="col-md-12" align="right">
                                {!! Form::submit('Simpan Kejuruan', ['class'=>'btn btn-primary btn-block']) !!}
                                </div>
                            </div>