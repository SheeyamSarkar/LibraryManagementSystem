@extends('admin/layout')

@section('container')

<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Add Member</h2>    
        </div>
        <hr>
    </div>
    <div class="col-lg-12">
	    <div class="card">
	        <div class="card-body card-block">
	        	<form action="{{ route('admin.insert') }}" method="post">
	        		@if(Session::get('fail'))
                	<alert class="alert-danger">
                		{{ Session::get('fail') }}
                	</alert>
                	@endif
	        		@csrf
		            <div class="form-group">
		                <label for="name" class=" form-control-label">Name</label>
		                <input type="text" name="name" value="{{$name}}" id="name" placeholder="Name" class="form-control">
		                <span class="text-danger">@error('name') {{ $message }}@enderror</span>
		            </div>
		            <div class="form-group">
		                <label for="email" class=" form-control-label">Email</label>
		                <input type="text" name="email" value="{{$email}}" id="email" placeholder="Email" class="form-control">
		                <span class="text-danger">@error('email') {{ $message }}@enderror</span>
		            </div>
		            <div class="form-group">
		                <label for="phone" class=" form-control-label">Phone Number</label>
		                <input type="text" name="phone" value="{{$phone}}" id="phone" placeholder="Phone Number" class="form-control">
		                <span class="text-danger">@error('phone') {{ $message }}@enderror</span>
		            </div>
		            <div class="row form-group">
		                <div class="col-12">
		                    <div class="form-group">
		                        <label for="address" class=" form-control-label">Address</label>
		                        <textarea name="address" name="address" value="{{$address}}" id="address" placeholder="Address" class="form-control"></textarea>
		                        <span class="text-danger">@error('address') {{ $message }}@enderror</span>
		                    </div>
		                </div>
		            </div>
		            <button type="submit" class="btn btn-lg btn-info btn-block">Add Member</button>
		            <input type="hidden" name="id" value="{{$id}}">
		        </form>
	        </div>
	    </div>
	</div>
</div>

@endsection