@extends('posts.master')

@section('content')
		<div class="row">
			<div class="col-lg-12">
				<div class="pull-left">
					<h3>Show Barang</h3> <a class="btn btn-xs btn-primary" href="{{ route('posts.index') }} ">Back</a>
				</div>
			</div>
		</div>

			<div class="col-xs-12">
				<div class="form-group">
					<strong>Nama Barang : </strong>
					{{ $barang -> nama_barang }}
				</div>
			</div>  

			<div class="col-xs-12">
				<div class="form-group">
					<strong>Kategori : </strong>
					{{ $barang -> kategori }}
				</div>
			</div>

			<div class="col-xs-12">
				<div class="form-group">
					<strong>Harga : </strong>
					{{ $barang -> harga }}
				</div>
			</div>


		</div>		


@endsection