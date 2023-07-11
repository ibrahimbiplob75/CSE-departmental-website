@extends('Backend.master')
@section('permission')
    active
@endsection
@section('title')
    Roles permission
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
                                <th scope="col">user</th>
                                <th scope="col">Role</th>
                                <th scope="col">permission</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <th scope="row">{{$loop->index+1}}</th>
                                    <th scope="row">{{$user->name}}</th>
                                    <td>
                                        @if(count($user->getRoleNames()) !=0)
                                        @foreach($user->getRoleNames() as $permission)
                                            <span class="badge badge-success">{{$permission}}</span>
                                        @endforeach
                                        @else
                                            "Role not assigned Yet"
                                        @endif

                                    </td>
                                    <td>
                                            @foreach($user->getAllPermissions() as $permission)
                                                <span class="badge badge-success">{{$permission->name}}</span>
                                            @endforeach

                                    </td>

                                    <td>
                                        <a style="height:auto; width: 80px"  href="{{url('/role/edit')}}/{{$user->id}}" class="btn btn-primary">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <div class="col-lg-4">
                <div class="card mt-2" >
                    <div class="card-header">
                        <h3 class="text-center">user Role</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{url('/use/role/assign')}}" method="POST">
                            @csrf
                            @if(session('success'))
                                <div style="color: green ; font-size: 20px" class="alert-success">{{session('success')}}</div>
                            @endif
                            <div class="form-group mt-2">
                                <label for="exampleInput">user Name</label>
                                <select type="text" class="mt-2 form-control" name="user_id" >
                                    <option > -- select user -- </option>
                                    @foreach($users as $user)
                                        <option value="{{$user->id}}"> {{$user->name}} </option>
                                    @endforeach
                                </select>

                                @error('permission_name')
                                <div style="color: red ; font-size: 20px" class="text-start mt-2 text-danger">{{$message}}</div>
                                @enderror
                            </div>


                            <div class="form-group mt-2">
                                <label for="exampleInput">user Role</label>
                                <select type="text" class="mt-2 form-control" name="user_role" >
                                    <option > -- select user -- </option>
                                    @foreach($roles as $role)
                                        <option value="{{$role->id}}"> {{$role->name}} </option>
                                    @endforeach
                                    @error('permission_name')
                                    <div style="color: red ; font-size: 20px" class="text-start mt-2 text-danger">{{$message}}</div>
                                @enderror
                                </select>
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
