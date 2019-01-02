@extends('posts.master')

@section('content')
	<div class="row">
		<div class="col-lg-12">
			<br>
			<h3 align="center">Data Barang</h3>
		</div>
	</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="pull-right">
					<a style="margin-left: 967px" class="btn btn-xs btn-default" href="{{ route('posts.create') }} " align="left">Create Barang</a>
				</div>
				<br>
			</div>
		</div>

<table class="table table-bordered">
	<tr style="background-color: #DEB887">
		<th>No.</th>
		<th>Nama</th>
		<th>Kategori</th>
		<th>Harga</th>
		<th width="225px">Aksi</th>
	</tr>

	@foreach($barangs as $barang)
		<tr>
			<td> {{++$i}} </td>
			<td> {{$barang -> nama_barang}} </td>
			<td> {{$barang -> kategori}} </td>
			<td> {{$barang -> harga}} </td>
			<td>
				<a class="btn btn-xs btn-info" href=" {{route('posts.show', $barang -> id)}} ">Show</a>

				<a class="btn btn-xs btn-primary" href=" {{route('posts.edit', $barang -> id)}} ">Edit</a>

				{!! Form::open(['method' => 'DELETE', 'route' => ['posts.destroy', $barang -> id], 'style' => 'display:inline']) !!}

				{!! Form::submit('Delete', ['class' => 'btn btn-xs btn-danger']) !!}

				{!! Form::close() !!}
			</td> 
		</tr>
	@endforeach
</table>

{!! $barangs -> links() !!}

@endsection