@extends('Backend.master')
@section('permission')
    active
@endsection
@section('title')
    edit Role
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card" >
                    <div class="card-header">
                        <h3>Edit Role</h3>
                        <div class="card-body">
                            <form action="{{url('/use/role/update')}}" method="POST">
                                @csrf
                                @if(session('success'))
                                    <div style="color: green ; font-size: 20px" class="alert-success">{{session('success')}}</div>
                                @endif
                                <div class="form-group mt-2">
                                    <label for="exampleInput">user Name</label>
                                    <input type="text" readonly class="mt-2 form-control" value="{{$user->name}}" name="user_id" >
                                   <input type="hidden" class="mt-2 form-control" value="{{$user->id}}" name="user_id" >
                                    @error('permission_name')
                                    <div style="color: red ; font-size: 20px" class="text-start mt-2 text-danger">{{$message}}</div>
                                    @enderror
                                </div>


                                <div class="form-group mt-2">
                                    <label for="exampleInput">assign permission</label>
                                    @foreach($permission_names as $permission_name)
                                        <br>
                                        <input type="checkbox" {{$user->hasPermissionTo($permission_name->name)?'checked':''}} class="mt-2" value="{{$permission_name->name}}" name="permission[]" >
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
        </div>
    </div>
@endsection
