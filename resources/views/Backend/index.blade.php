@extends('Backend.master')
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card" >
                        <div class="card-header">
                            <h3>Welcome  {{$user_name}} <span class="float-right"> Total-> {{$user_no}}</span></h3>
                            @if(session('Delete'))
                                <div style="color: red ; font-size: 20px" class="alert-danger">{{session('Delete')}}</div>
                            @endif
                            <table class="mt-4 table table-striped table-dark">

                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">user Name</th>
                                    <th scope="col">user Email</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">photo</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($admin_users as $admin_user)
                                    <tr>
                                        <th scope="row">{{$loop->index+1}}</th>
                                        <td>{{$admin_user->name}}</td>
                                        <td>{{$admin_user->email}}</td>
                                        <td>{{$admin_user->category}}</td>
                                        <td>
                                            <img src="{{asset('/backend_assets/admin_photo')}}/{{$admin_user->profile_photo}}" class="wd-90 rounded-circle" alt="">
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
@section('footer_script')
    @if($message = Session::get('status'))
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: '{{session('status')}}',
                showConfirmButton: false,
                timer: 2500
            })
        </script>
    @endif
    @if($message = Session::get('block'))
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: '{{session('block')}}',
                showConfirmButton: false,
                timer: 2500
            })
        </script>
    @endif
    @if($message=Session::get('restore'))
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: '{{session('restore')}}',
                showConfirmButton: false,
                timer: 2500
            })
        </script>
    @endif
    @if($message=Session::get('delete'))
        <script>
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                }
            })
        </script>
    @endif
    @if($message=Session::get('login'))
        <script>
            Swal.fire({
                title: 'Congratulations NITER Cse dept Admin panel.',
                width: 600,
                padding: '3em',
                color: '#716add',
                background: '#fff url("backend_assets/sweetAlert/congrats.png")',
                backdrop: `
            rgba(0,0,123,0.4)
            url("backend_assets/sweetAlert/code.gif")
            left top
            no-repeat`
            })
        </script>
    @endif
@endsection
