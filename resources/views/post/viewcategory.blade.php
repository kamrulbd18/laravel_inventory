@extends('welcome')
@section('content')
    <div class="container">
      <div class="row">
  	        <div class="contact-form-box w-100">            	
					<a href="{{ route('addcategory') }}" class="btn btn-info">Add Category</a>
					<a href="{{ route('allcategories') }}" class="btn btn-danger">All Category</a>
            	<hr/>
                <ul type="square">
                    <li>Category Name: {{ $category->name }}</li>
                    <li>Category Slug: {{ $category->slug }}</li>
                    <li>Created at: {{ $category->created_at }}</li>
                </ul>
            </div>
      </div>
    </div>
@endsection