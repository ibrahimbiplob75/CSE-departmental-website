@extends('Backend.master')
@section('permission')
    active
@endsection
@section('title')
    permission
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card" >
                    <div class="text-center card-header">
                        <h3>Permission category</h3>
                        @if(session('Delete'))
                            <div style="color: red ; font-size: 20px" class="alert-danger">{{session('Delete')}}</div>
                        @endif
                        <table class="mt-4 table table-striped table-dark">

                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">permission Name</th>
                                <th scope="col">Created at</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($permission_names as $permission_name)
                                <tr>
                                    <th scope="row">{{$loop->index+1}}</th>
                                    <td>{{$permission_name->name}}</td>
                                    <td>{{$permission_name->created_at->diffForHumans()}}</td>
                                    <td>
                                        <a href="{{url('/category/delete')}}/{{$permission_name->id}}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card mt-5" >
                    <div class="text-center card-header">
                        <h3>Role's Permission</h3>
                        @if(session('Delete'))
                            <div style="color: red ; font-size: 20px" class="alert-danger">{{session('Delete')}}</div>
                        @endif
                        <table class="mt-4 table table-striped table-dark">

                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Role Name</th>
                                <th scope="col">permission</th>

                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($roles as $role)
                                <tr>
                                    <th scope="row">{{$loop->index+1}}</th>
                                    <td>{{$role->name}}</td>
                                    <td>
                                   @foreach($role->getPermissionNames() as $permission)
                                            <span class="badge badge-success">{{$permission.','}}</span>
                                        @endforeach
                                    </td>

                                    <td>
                                        <a href="{{url('/category/delete')}}/{{$role->id}}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="text-center card" >
                    <div class="card-header">
                        <h3>Add Permission</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{url('/role/permission')}}" method="POST">
                            @csrf
                            @if(session('success'))
                                <div style="color: green ; font-size: 20px" class="alert-success">{{session('success')}}</div>
                            @endif
                            <div class="form-group mt-2">
                                <label for="exampleInput">permission Name</label>
                                <input type="text" class="mt-2 form-control" name="permission_name">
                                @error('permission_name')
                                <div style="color: red ; font-size: 20px" class="text-start mt-2 text-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group mt-3">
                                <button type="submit"  class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card mt-5" >
                    <div class="card-header">
                        <h3 class="text-center">Add Role</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{url('/role/assign')}}" method="POST">
                            @csrf
                            @if(session('success'))
                                <div style="color: green ; font-size: 20px" class="alert-success">{{session('success')}}</div>
                            @endif
                            <div class="form-group mt-2">
                                <label for="exampleInput">Role Name</label>
                                <input type="text" class="mt-2 form-control" name="role_name" >
                                @error('permission_name')
                                <div style="color: red ; font-size: 20px" class="text-start mt-2 text-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group mt-2">
                                <label for="exampleInput">assign permission</label>
                                @foreach($permission_names as $permission_name)
                                    <br>
                                <input type="checkbox" class="mt-2" value="{{$permission_name->name}}" name="permission[]" >
                                    {{$permission_name->name}}
                                @endforeach
                                @error('permission_name')
                                <div style="color: red ; font-size: 20px" class="text-start mt-2 text-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group mt-3">
                                <button type="submit"  class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
@endsection
