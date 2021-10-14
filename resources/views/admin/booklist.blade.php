@extends('admin/layout')

@section('container')

<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Book List</h2>
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
                        <th>Book ID</th>
                        <th>Book Name</th>
                        <th>Author</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach($data as $list)
                    <tr>
                        <td>{{$list->bookid}}</td>
                        <td>{{$list->bookname}}</td>
                        <td>{{$list->authorname}}</td>
                        <td>
                            <a href="{{url('admin/book/addbook/')}}/{{$list->id}}"><button type="button" class="btn btn-success">Edit</button></a>
                            <a href="{{url('admin/book/booklist/delete/')}}/{{$list->id}}"><button type="button" class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection