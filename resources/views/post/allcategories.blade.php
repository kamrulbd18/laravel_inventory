@extends('welcome')
@section('content')
    <div class="container">
      <div class="row">
  	        <div class="contact-form-box w-100">            	
					<a href="{{ route('addcategory') }}" class="btn btn-info">Add Category</a>
					<a href="{{ route('allcategories') }}" class="btn btn-danger">All Category</a>
            	<hr/>
                <table class="table table-responsive">
                	<tr>
                		<th>Sr</th>
                		<th>Category Title</th>
                		<th>Slug</th>
                		<th>Create At</th>
                		<th>Action</th>
                	</tr>
                	@foreach($category as $row)
                	<tr>
                		<td>{{ $row->id }}</td>
                		<td>{{ $row->name }}</td>
                		<td>{{ $row->slug }}</td>
                		<td>{{ $row->created_at }}</td>
                		<td>
                			<a href="" class="btn btn-xs btn-info">Edit</a>
                			<a href="" class="btn btn-xs btn-danger">Delete</a>
                			<a href="{{ URL::to('viewCategory/'.$row->id) }}" class="btn btn-xs btn-success">View</a>
                		</td>
                	</tr>
                	@endforeach
                </table>
            </div>
      </div>
    </div>
@endsection