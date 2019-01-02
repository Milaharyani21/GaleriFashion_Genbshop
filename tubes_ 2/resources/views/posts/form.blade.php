		<div class="container" style="background-color: #5F9EA0"><br><br>
	<div class="col-xs-12">
		<div class="form-group">
			<strong>Nama Barang : </strong>
			{!! Form::text('nama_barang', null, ['placeholder' => 'Nama Barang', 'class' => 'form-control']) !!}
		</div>
	</div>

	<div class="col-xs-12">
		<div class="form-group">
			<strong>Kategori : </strong>
			{!! Form::text('kategori', null, ['placeholder' => 'Kategori', 'class' => 'form-control']) !!}
		</div>
	</div>

	<div class="col-xs-12">
		<div class="form-group">
			<strong>Harga : </strong>
			{!! Form::text('harga', null, ['placeholder' => 'Harga', 'class' => 'form-control']) !!}
		</div>
	</div>
	
	<div class="col-xs-12">
		<a class="btn btn-xs btn-success" href=" {{ route('posts.index') }} ">Back</a>
		<button type="submit" class="btn btn-xs btn-primary" name="button" >Submit</button>
	</div>	
</div>
</div>
</div>