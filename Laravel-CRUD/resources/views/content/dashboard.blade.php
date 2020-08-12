@extends('layouts.app')


<style> 

	body{

		background-image: url({{asset("/media/edu3.jpg")}});
	}

</style>


	<title> Laravel 7 CRUD</title>

@section('content')


	<div class="container">
		<div style="text-align: center;">
		<h1 style=" margin-top: 300px; font-family: Lucida Bright; color: white">Laravel CRUD Content Management System</h1>
		</div>

		<div style="text-align: center;"> <br>
		<a class="btn btn-info" href="{{ route('content.category') }}"> Manage Category </a>	
		<a class="btn btn-info" href="{{ route('content.article') }}"> Manage Article </a>
		</div>

	</div>


@endsection