@extends('Backend.master')
@section('admin')
    active
@endsection
@section('title')
    Admin Teacher
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card" >
                    <div class="text-center card-header">
                        <h3>Teacher List</h3>
                        @if(session('Delete'))
                            <div style="color: red ; font-size: 20px" class="alert-danger">{{session('Delete')}}</div>
                        @endif
                        <table class="mt-4 table table-striped table-dark">

                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">user Name</th>
                                <th scope="col">user Email</th>
                                <th scope="col">phone number</th>
                                <th scope="col">Status</th>
                                <th scope="col">user added</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($teachers as $teacher)
                                <tr>
                                    <th scope="row">{{$loop->index+1}}</th>
                                    <td>{{$teacher->name}}</td>
                                    <td>{{$teacher->email}}</td>
                                    <td>{{$teacher->phone_no}}</td>
                                    <td>{{$teacher->category}}</td>
                                    <td>{{$teacher->created_at->diffForHumans()}}</td>
                                    <td>
                                        <a style="height:auto; width: 80px" href="{{url('/category/delete')}}/{{$teacher->id}}" class="btn btn-danger">Delete</a>
                                        <a style="height:auto; width: 80px" href="{{url('/category/edit')}}/{{$teacher->id}}" class="btn btn-success">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
