@extends('welcome')
@section('content')
    <div class="container">
      <div class="row">
  	        <div class="contact-form-box w-100">            	
					<a href="" class="btn btn-danger">All Post</a>
					<a href="{{ route('addcategory') }}" class="btn btn-info">Add Category</a>
            	<hr/>
                <form action="" method="post">
					<div class="form-selector">
						<label for="">Title</label>
						<input type="text" class="form-control" placeholder="Post tile" name="title"/>
					</div><br>
					<div class="form-selector">
						<label for="">Category</label>
						<select name="categories_id" class="form-control">
							<option value="">dddd</option>
							<option value="">cccc</option>
						</select>
					</div><br>
					<div class="form-selector">
						<label for="">Image</label>
						<input type="file" class="form-control" placeholder="Mobile" name="image"/>
					</div><br>
					<div class="form-selector">
						<label for="">Post Details</label>
						<textarea class="form-control" rows="8" name="details"></textarea>
					</div><br>
					<div class="form-selector">
						<button class="btn btn-primary" type="submit">Save</button>
					</div>
                </form>
            </div>
      </div>
    </div>
@endsection