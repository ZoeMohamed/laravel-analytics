@extends('backend.auth.auth_master')

@section('auth_title')
    Login | User Panel
@endsection

@section('auth-content')
    <!-- Start Containerbar -->
    <div id="containerbar" class="containerbar authenticate-bguser">
        <!-- Start Container -->
        <div class="container">
            <div class="auth-box login-box">
                <!-- Start row -->
                <div class="row no-gutters align-items-center justify-content-center">
                    <!-- Start col -->
                    {{-- <div class="col-md-6 col-lg-5">
                        <div class="auth-box-left">
                            <div class="card">
                                <div class="card-body">
                                    <div class="auth-box-icon">
                                        <img src="{{asset('assets/images/authentication/auth-box-icon.svg')}}" class="img-fluid" alt="auth-box-icon">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- Start end -->
                    <!-- Start col -->
                    <div class="col-md-12 col-lg-5">
                        <!-- Start Auth Box -->
                        <div class="auth-box-right">
                            <div class="card p-4">
                                <div class="card-body shadow-sm p-3 mb-5 bg-white rounded">
                                    <form action="{{ route('login') }}" method="POST">
                                        @csrf

                                        <h4 class="text-primary mb-5 mt-2 text-center">Log in User !</h4>
                                        <div class="form-group mb-5">
                                            <input type="text" class="form-control" id="username" name="email"
                                                placeholder="Enter Username here" required>
                                        </div>

                                        <div class="form-group mb-5">
                                            <input type="password" class="form-control" id="password"
                                                name="password"placeholder="Enter Password here" required>
                                        </div>
                                        @include('backend.layouts.partials.messages')

                                        <div class="form-row mb-3">
                                            <div class="col-sm-6">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="rememberme">
                                                    <label class="custom-control-label font-14" for="rememberme">Remember
                                                        Me</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="forgot-psw">
                                                    <a id="forgot-psw" href="user-forgotpsw.html" class="font-14">Forgot
                                                        Password?</a>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-lg btn-block font-18">Log in
                                            Now</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- End Auth Box -->
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
        </div>
        <!-- End Container -->
    </div>
@endsection
