
@extends('Frontend.master')

@section('content')

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb-title">Student</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="{{url("/home")}}">Home</a></li>
                        <li class="breadcrumb-item active">Login</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>

    <!-- breadcrumb-area end -->

    <!-- login area start -->
    <div class="login-register-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                    <div class="login-register-wrapper">
                        <div class="login-register-tab-list nav">
                            <a class="active" data-bs-toggle="tab" href="#lg1">
                                <h4>login</h4>
                            </a>
                            <a data-bs-toggle="tab" href="#lg2">
                                <h4>register</h4>
                            </a>
                        </div>
                        <div class="tab-content">
                            <div id="lg1" class="tab-pane active">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <input type="email" name="email" placeholder="Email" />
                                            <input type="password" name="password"
                                                   required autocomplete="current-password" placeholder="Password" />
                                            <div class="button-box">
                                                <div class="login-toggle-btn">
                                                    <input type="checkbox" />
                                                    <a class="flote-none" href="javascript:void(0)">Remember me</a>
                                                    @if (Route::has('password.request'))
                                                    <a href="{{ route('password.request') }}">Forgot Password?</a>
                                                    @endif
                                                </div>
                                                <button type="submit"><span>Login</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="lg2" class="tab-pane">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <input type="text" name="name" placeholder="name" />
                                            <input type="text" name="class_id" placeholder="class Id" />
                                            <input type="hidden" name="category" value="student" />
                                            <div class="pb-4">
                                            <select name="batch_no" class="form-control"  >
                                                <option  > <<--Select Batch -->> </option>
                                                <option value="1" class="">1st Batch</option>
                                                <option value="2" class="">2nd Batch</option>
                                                <option value="3" class="">3rd Batch</option>
                                                <option value="4" class="">4th Batch</option>
                                            </select>
                                            </div>
                                            <input name="phone_no" placeholder="phone Number" type="number" />
                                            <input name="email" placeholder="Email" type="email" />
                                            <input type="password" name="password"
                                                   required autocomplete="new-password" placeholder="Password" />
                                            <input type="password"
                                                   name="password_confirmation" placeholder="Confirm Password" />

                                            <div class="panel-body">
                                                <input style="height: 15px;width: 15px" type="radio" class="charge" name="gender" value="male" ><span style="font-size: 20px;color: black; padding-left: 10px">Male</span> <br>
                                                <input style="height: 15px;width: 15px" type="radio" class="charge" name="gender" value="female" ><span style="font-size: 20px;color: black; padding-left: 10px">Female</span> <br>
                                            </div>
                                            <div class="button-box">

                                                <button type="submit"><span>Register</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login area end -->



@endsection
