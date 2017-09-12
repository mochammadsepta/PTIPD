    <!-- Highlights - jumbotron -->
    <div class="jumbotron top-space">
        <div class="container">
            
            <div class="col-sm-12">
                <div class="form-group{{ $errors->has('profil') ? 'has-error' : '' }}">
                    <h2>PROFIL UMUM</h2>
                    <div>
                        {!! Form::textarea('profil',null,['class'=>'ckeditor', 'size'=>'50x20']) !!}
                        {!! $errors->first('profil', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Highlights -->

    <!-- container -->
    <div class="container">

        
        <br><br>

        <div class="row">
            <div class="col-sm-4">
        @if(isset($profils) && $profils->lokasi)
        <p>
            {!! Html::image(asset('img/'.$profils->lokasi),null,['class'=>'img-rounded img-responsive']) !!}
        </p>
        @endif
        {!! Form::file('lokasi',['class'=>'btn btn-warning btn-block']) !!}
        {!! $errors->first('lokasi', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="col-sm-7 col-sm-offset-1">
                <h2>SEJARAH SINGKAT</h2>
                <div>
                    {!! Form::textarea('sejarah',null,['class'=>'ckeditor', 'size'=>'50x20']) !!}
                    {!! $errors->first('sejarah', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </div> <!-- /row -->
    </div>  <!-- /container -->

    <div class="container">

        
        <br><br>

        <div class="row">
            
            <div class="col-sm-8">
                <h2>SAMBUTAN KEPALA SEKOLAH</h2>
                <div>
                    {!! Form::textarea('sambutan',null,['class'=>'ckeditor', 'size'=>'50x20']) !!}
                    {!! $errors->first('sambutan', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="col-sm-4">
        @if(isset($profils) && $profils->foto)
        <p>
            {!! Html::image(asset('img/'.$profils->foto),null,['class'=>'img-rounded img-responsive']) !!}
        </p>
        @endif
        {!! Form::file('foto',['class'=>'btn btn-warning btn-block']) !!}
        {!! $errors->first('foto', '<p class="help-block">:message</p>') !!}
            </div>
        </div> <!-- /row -->
    </div>  <!-- /container -->
    <div class="jumbotron top-space">
        <div class="container">
            <div class="col-md-12">
                <div class="col-md-6">
                    <h3>VISI</h3>
                    <div>
                    {!! Form::textarea('visi',null,['class'=>'ckeditor']) !!}
                    {!! $errors->first('visi', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <h3>MISI</h3>
                    <div>
                    {!! Form::textarea('misi',null,['class'=>'ckeditor']) !!}
                    {!! $errors->first('misi', '<p class="help-block">:message</p>') !!}
                    </div>
                </div> 
                <div class="form-group">
                    <div class="col-md-12" align="right"><br><br><br><br>
                        {!! Form::submit('Simpan Perubahan Profil', ['class'=>'btn btn-primary btn-block']) !!}
                    </div>
                </div>
            </div>  
        </div>
    </div>