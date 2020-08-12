@extends('content.layout')

@section('content')

<style>

body{
	background:  radial-gradient(circle, #c7c6d2, #c6c6d7, #c4c7db, #c2c8e0, #bfc9e5, #bacdeb, #b4d1f1, #add6f5, #a4def8, #9ce6f8, #99edf5, #9cf4ee);
}

td{
	font-family: Times New Roman;
	font-size: 16px;
}

.table-hover{
	background-color: white;
}

</style>

<br><br>
<div class="row">
	
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
		    <h1 style="font-family: Garamond; font-weight: bold"> Categories </h1>
		</div>

		<div class="pull-right">
			<button class="btn btn-success"> Add a New Category </button>
		</div>
	</div>
</div>

	@if($message = Session::get('success'))
	<div class="alert alert-success" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  		<strong>{{$message}}</strong>
	</div>
	@endif

	<table class="table table-bordered table-hover" style="width:100%">

		<tr>
			<th style="width: 15%;"> Category Name</th>
			<th style="width: 50%;"> Category Slug</th>
			<th style="width: 30%; text-align:center"> Function </th>
		</tr>

	

		<tr>
			<td> <b>Science Fiction</td>
			<td> <b>science-fiction</td>
			<td style="width: 25%; text-align:center"> 
				 <button class= "btn btn-info" > <i class="fa fa-edit" ></i> Edit </button> &nbsp&nbsp
				 <button class= "btn btn-danger" onclick="return confirm('Are You Sure?')"><i class="fa fa-trash"></i> Delete </button>

			</td>			
		</tr>

		<tr>
			<td> <b>Novel</td>
			<td> <b>novel</td>
			<td style="width: 25%; text-align:center"> 
				 <button class= "btn btn-info" > <i class="fa fa-edit" ></i> Edit </button> &nbsp&nbsp
				 <button class= "btn btn-danger" onclick="return confirm('Are You Sure?')"><i class="fa fa-trash"></i> Delete </button>

			</td>			
		</tr>
	
		
	</table>

	<div class="pull-right">
				<a style="font-size:18px" class="btn btn-success" href="{{route('content.dashboard')}}"><i class="fa fa-arrow-circle-left"></i> Back </a>
			</div>

	

@endsection

@section('javascript')

<script type="text/javascript">

</script>

@endsection