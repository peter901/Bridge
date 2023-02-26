@extends('layouts.public')

@section('title', 'Register')

@section('content')

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form class="user" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" name="first_name" value="{{ old('first_name') }}"
                                        class="form-control form-control-user @error('first_name') is-invalid" @enderror id="exampleFirstName"
                                        placeholder="First Name">
                                        @error('first_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="last_name" value="{{ old('last_name') }}"
                                        class="form-control form-control-user @error('last_name') is-invalid" @enderror"
                                         placeholder="Last Name">
                                         @error('last_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" value="{{ old('email') }}"
                                    class="form-control form-control-user @error('email') is-invalid" @enderror"
                                     placeholder="Email Address">
                                     @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" name="password"
                                        class="form-control form-control-user @error('password') is-invalid" @enderror"
                                        placeholder="Password">
                                        @error('password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" name="password_confirmation" class="form-control form-control-user @error('password_confirmation') is-invalid" @enderror"
                                         placeholder="Repeat Password">
                                         @error('password_confirmation')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                </div>
                            </div>
                            <button type='submit' class="btn btn-primary btn-user btn-block">
                                Register Account
                            </button>
                            <hr>
                            <a href="index.html" class="btn btn-google btn-user btn-block">
                                <i class="fab fa-google fa-fw"></i> Register with Google
                            </a>
                            <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                            </a>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
