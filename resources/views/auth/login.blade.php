@extends('layouts.app')
@section('meta_title', isset($title) ? $title : 'Login')
@section('content')


    <section class="p-0 d-flex align-items-center position-relative overflow-hidden">

        <div class="container-fluid">
            <div class="row">

                <!-- Right -->
                <div class="col-12 col-lg-6 m-auto">
                    <div class="row my-5">
                        <div class="col-sm-10 col-xl-9 m-auto border p-5">
                            <!-- Title -->

                            <h1 class="fs-2">Login <span class="mb-0 fs-1 wave-emoji">👋</span></h1>
                            <p class="lead mb-4">Nice to see you! Please log in with your account.</p>

                            <!-- Form START -->
                            <form method="POST" action="{{ route('login') }}">
                                @csrf


                                <!-- Email -->
                                <div class="mb-4">
                                    <label for="exampleInputEmail1" class="form-label">{{ __('Email Address') }} *</label>
                                    <div class="input-group input-group-lg">
                                        <span
                                            class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                                class="bi bi-envelope-fill"></i></span>
                                        <input type="email"
                                            class="form-control border-0 bg-light rounded-end ps-1 @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email','admin@gmail.com') }}" required autocomplete="email"
                                            autofocus placeholder="E-mail" id="exampleInputEmail1" >

                                    </div>
                                    @error('email')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!-- Password -->
                                <div class="mb-4">
                                    <label for="inputPassword5" class="form-label">{{ __('Password') }} *</label>
                                    <div class="input-group input-group-lg">
                                        <span
                                            class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                                class="fas fa-lock"></i></span>
                                        <input type="password"
                                            class="form-control border-0 bg-light rounded-end ps-1 @error('password') is-invalid @enderror"
                                            name="password" required autocomplete="current-password" placeholder="password"
                                            id="inputPassword5" value="123456">
                                    </div>
                                    <div id="passwordHelpBlock" class="form-text">
                                        Your password must be 8 characters at least
                                    </div>

                                    @error('password')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                                <!-- Check box -->
                                <div class="mb-4 d-flex justify-content-between mb-4">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember"> {{ __('Remember Me') }}</label>
                                    </div>

                                    @if (Route::has('password.request'))
                                        <div class="text-primary-hover">
                                            <a href="{{ route('password.request') }}" class="text-secondary">
                                                <u>Forgot password?</u>
                                            </a>
                                        </div>
                                    @endif
                                </div>
                                <!-- Button -->
                                <div class="align-items-center mt-0">
                                    <div class="d-grid">
                                        <button class="btn btn-primary mb-0" type="submit">Login</button>
                                    </div>
                                </div>
                            </form>
                            <!-- Form END -->

                            <!-- Social buttons and divider -->
                            <div class="row">
                                <!-- Divider with text -->
                                <div class="position-relative my-4">
                                    <hr>
                                    <p class="small position-absolute top-50 start-50 translate-middle bg-body px-5">Or</p>
                                </div>

                                <!-- Social btn -->
                                <div class="col-xxl-6 d-grid">
                                    <a href="#" class="btn bg-google mb-2 mb-xxl-0"><i
                                            class="fab fa-fw fa-google text-white me-2"></i>Login with Google</a>
                                </div>
                                <!-- Social btn -->
                                <div class="col-xxl-6 d-grid">
                                    <a href="#" class="btn bg-facebook mb-0"><i
                                            class="fab fa-fw fa-facebook-f me-2"></i>Login with Facebook</a>
                                </div>
                            </div>

                            <!-- Sign up link -->
                            <div class="mt-4 text-center">
                                <span>Don't have an account? <a href="{{ route('register') }}">Signup here</a></span>
                            </div>
                        </div>
                    </div> <!-- Row END -->
                </div>
            </div> <!-- Row END -->
        </div>
    </section>




@endsection
