@extends('posts.master')

@section('content')
	<div class="row">
		<div class="col-lg-12">
			<div class="pull-left">
				<h3 align="center">Edit Barang</h3>
			</div>
		</div>
	</div>

	@if(count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Whoooppps!!</strong> there were some problem with your input.<br>
			<ul>
				@foreach($errors -> all() as $error)
					<li>  {{$error}} </li>
				@endforeach
			</ul>
		</div>
	@endif

	{!! Form::model($barang, ['method' => 'PATCH', 'route' => ['posts.update', $barang -> id]]) !!}
	@include('posts.form')

	{!! Form::close() !!}
@endsection