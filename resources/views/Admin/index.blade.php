@extends('Backend.master')
@section('admin')
    active
@endsection
@section('title')
    Admin User
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card" >
                    <div class="text-center card-header">
                        <h3>Active Admin User</h3>
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
                            @foreach($admin_users as $admin_user)
                                <tr>
                                    <th scope="row">{{$loop->index+1}}</th>
                                    <td>{{$admin_user->name}}</td>
                                    <td>{{$admin_user->email}}</td>
                                    <td>{{$admin_user->phone_no}}</td>
                                    <td>{{$admin_user->category}}</td>
                                    <td>{{$admin_user->created_at->diffForHumans()}}</td>
                                    <td>
                                        <a style="height:auto; width: 80px" href="{{url('/admin/user/block')}}/{{$admin_user->id}}" class="btn btn-indigo">Block</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="card" >
                    <div class="text-center card-header">
                        <h3>Block Admin User</h3>
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
                            @foreach($block_users as $block_user)
                                <tr>
                                    <th scope="row">{{$loop->index+1}}</th>
                                    <td>{{$block_user->name}}</td>
                                    <td>{{$block_user->email}}</td>
                                    <td>{{$block_user->phone_no}}</td>
                                    <td>{{$block_user->category}}</td>
                                    <td>{{$block_user->created_at->diffForHumans()}}</td>
                                    <td>
                                        <a style="height:auto; width: 80px" href="{{url('/admin/user/unblock')}}/{{$block_user->id}}" class="btn btn-indigo">Unblock</a>
                                        <a style="height:auto; width: 80px" href="{{url('/admin/user/delete')}}/{{$block_user->id}}" class="btn btn-danger">Delete</a>
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
