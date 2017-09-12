<div class="form-group{{ $errors->has('judul') ? 'has-error' : '' }}">
	{!! Form::label('judul','Judul Fasilitas',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-5">
		{!! Form::text('judul',null,['class'=>'form-control']) !!}
		{!! $errors->first('judul', '<p class="help-block">:message</p>') !!}
	</div>
	{!! Form::label('kategori','Kategori',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-2">
		{!! Form::select('kategori',App\KategoriFasilitas::pluck('nama','id')->all(),null,['class'=>'js-selectize','placeholder'=>'Pilih Kategori']) !!}
		{!! $errors->first('title', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('keterangan') ? 'has-error' : '' }}">
	{!! Form::label('keterangan','Keterangan',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-9">
		{!! Form::textarea('keterangan',null,['class'=>'form-control']) !!}
		{!! $errors->first('keterangan', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('cover') ? 'has-error' : '' }}">
	{!! Form::label('foto','Foto Fasilitas',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::file('foto',['class'=>'btn btn-warning']) !!} <br>
		@if(isset($book) && $book->foto)
		<p>
			{!! Html::image(asset('img/'.$book->foto),null,['class'=>'img-rounded img-responsive']) !!}
		</p>
		@endif
		{!! $errors->first('foto', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<hr>

<div class="form-group">
	<div class="col-md-12" align="right">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>