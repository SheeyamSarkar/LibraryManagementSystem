@extends('admin/layout')

@section('container')

<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Issue Book List</h2>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#smallmodal">Add Book</button>    
        </div> 
        <hr>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive table--no-card m-b-10">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Book Id</th>
                        <th>Issue Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach($data as $list)
                    <tr>
                        <td>{{$list->name}}</td>
                        <td>{{$list->bookid}}</td>
                        <td>{{$list->issueid}}</td>
                        <td>{{$list->status}}</td>
                        <td>
                            
                        </td>
                        <td>
                            <a href="{{url('admin/issue/issuebook/')}}/{{$list->id}}"><button type="button" class="btn btn-success">Edit</button></a>
                            <a href="{{url('admin/issue/issuebooklist/delete/')}}/{{$list->id}}"><button type="button" class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection