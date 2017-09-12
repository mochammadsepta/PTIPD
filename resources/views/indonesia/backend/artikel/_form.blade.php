<div class="form-group{{ $errors->has('judul') ? 'has-error' : '' }}">
	{!! Form::label('judul','Judul Artikel',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-5">
		{!! Form::text('judul',null,['class'=>'form-control']) !!}
		{!! $errors->first('judul', '<p class="help-block">:message</p>') !!}
	</div>
	{!! Form::label('kategori','Kategori',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-2">
		{!! Form::select('kategori',App\Kategori_Artikel::pluck('nama','id')->all(),null,['class'=>'js-selectize','placeholder'=>'Pilih Kategori']) !!}
		{!! $errors->first('title', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('konten') ? 'has-error' : '' }}">
	{!! Form::label('konten','Konten / Isi',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-9">
		{!! Form::textarea('konten',null,['class'=>'form-control']) !!}
		{!! $errors->first('konten', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('cover') ? 'has-error' : '' }}">
	{!! Form::label('cover','Foto Artikel',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::file('cover',['class'=>'btn btn-warning']) !!} <br>
		@if(isset($book) && $book->cover)
		<p>
			{!! Html::image(asset('img/'.$book->cover),null,['class'=>'img-rounded img-responsive']) !!}
		</p>
		@endif
		{!! $errors->first('cover', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<hr>

<div class="form-group">
	<div class="col-md-12" align="right">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>