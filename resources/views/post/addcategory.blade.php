@extends('welcome')
@section('content')
    <div class="container">
      <div class="row">
  	        <div class="contact-form-box w-100">            	
					<a href="{{ route('addcategory') }}" class="btn btn-info">Add Category</a>
					<a href="{{ route('allcategories') }}" class="btn btn-danger">All Category</a>
            	<hr/>
                <form action="{{ route('storecategory') }}" method="post">
                	@csrf
					<div class="form-selector">
						<label for="">Category Name</label>
						<input type="text" class="form-control" name="name"/>
					</div><br>
					<div class="form-selector">
						<label for="">Slug Name</label>
						<input type="text" class="form-control" name="slug"/>
					</div><br>
					<div class="form-selector">
						<button class="btn btn-primary" type="submit">Save</button>
					</div>
                </form>
            </div>
      </div>
    </div>
@endsection