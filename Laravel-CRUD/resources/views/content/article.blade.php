@extends('layouts.app')


@section('content')

<style>

	body{

		/*background-image: url({{asset("/media/art.jpg")}});*/
	}

</style>


 

<h1 style="text-decoration:underline; font-family: Times New Roman; font-style:italic; font-weight:bold; text-align:center; color:#290812"> Write an Article</h1>



<div class="container" style="display:block;"> 
	<div class="row justify-content-center">

		<div class="col-md-10 col-lg-8 col-sm-12">
			<div class="card  mt-5 p-3">

				<form> 

					
					<div class="form-group">
						<label for="title"><b>Title</label>
						<input type="text" id="" class="form-control">
					</div>
					<div class="form-group">
						<label for="slug">Slug</label>
						<input type="text" id="" class="form-control">
					</div>

					<div class="form-group">
						<label for="slug"> Short Description</label>
						<input type="text" id="" class="form-control">
					</div>

					<div class="form-group">
                            <textarea name="content" id="content" class="form-control" cols="30" rows="10"></textarea>
                        </div>

				
						<div class="form-group">

							<label for="Company logo">Featured Image</label>

                     <input type="file" name="image" id="image" />  
                    

					</div>

					<div class="form-group">

							<label for="Company logo">Thumbnail</label>

                     <input type="file" name="image" id="image" />  
                     

					</div>	

				</form>  

			</div>
			 <hr>
			<button style="margin-top: 15px;" type="button" class="btn btn-primary mx-auto d-block">Save</button> <br>
			<table>
			<tr>
			<td style="width: 10%; text-align:center"> 
				 <button class= "btn btn-info" > <i class="fa fa-edit" ></i> Edit </button> &nbsp&nbsp
				 <button class= "btn btn-danger" onclick="return confirm('Are You Sure?')"><i class="fa fa-trash"></i> Delete </button>

			</td>
			</tr>
			</table>
			 <hr>
			 <div style="margin-left: 90%">
				<a style="font-size:14px" class="btn btn-success" href="{{route('content.dashboard')}}"><i class="fa fa-arrow-circle-left"></i> Back </a>
			</div>
		</div>
	</div>
</div>



@endsection

@section('javascript')


@endsection