@extends('admin/layout')

@section('container')

<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Add Book</h2>    
        </div>
        <hr>
    </div>
    <div class="col-lg-12">
	    <div class="card">
	        <div class="card-body card-block">
	        	<form action="{{ route('admin.create') }}" method="post">
	        		@if(Session::get('fail'))
                	<alert class="alert-danger">
                		{{ Session::get('fail') }}
                	</alert>
                	@endif
	        		@csrf
	        		<div class="form-group">
		                <label for="email" class=" form-control-label">Book Id</label>
		                <input type="text" name="bookid" value="{{$bookid}}" id="bookid" placeholder="Book id" class="form-control">
		                <span class="text-danger">@error('bookid') {{ $message }}@enderror</span>
		            </div>
		            <div class="form-group">
		                <label for="name" class=" form-control-label">Book Name</label>
		                <input type="text" name="bookname" value="{{$bookname}}" id="bookname" placeholder="Book Name" class="form-control">
		                <span class="text-danger">@error('bookname') {{ $message }}@enderror</span>
		            </div>
		            
		            <div class="form-group">
		                <label for="name" class=" form-control-label">Author Name</label>
		                <input type="text" name="authorname" value="{{$authorname}}" id="authorname" placeholder="Author Name" class="form-control">
		                <span class="text-danger">@error('authorname') {{ $message }}@enderror</span>
		            </div>
		            
		            <button type="submit" class="btn btn-lg btn-info btn-block">Add Book</button>
		            <input type="hidden" name="id" value="{{$id}}">
		        </form>
	        </div>
	    </div>
	</div>
</div>

@endsection