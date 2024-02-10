@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4">

                <div class="text-center mb-4">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="DealDay Logo" class="img-fluid"
                        style="max-width: 150px;">
                </div>
                <div class="text-center">
                    <h1 class="page-title">Start Saving Today!</h1>
                    <h2 class="page-subtitle">Log in to access exclusive deals</h2>
                </div>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="card p-4 border rounded">
                    <form method="POST" action="{{ route('login') }}" class="form-horizontal">
                        @csrf
                        <!-- Email Address -->
                        <div class="form-group mb-4">
                            <label for="email" class="form-label">Email</label>
                            <input id="email" type="email" class="form-control" name="email" required>
                        </div>
                        <!-- Password -->
                        <div class="form-group mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input id="password" type="password" class="form-control" name="password" required>
                        </div>
                        <!-- Remember Me -->
                        <div class="form-group mb-3 form-check">
                            <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                            <label class="form-check-label" for="remember_me">Remember Me</label>
                        </div>

                        <!-- Submit Button -->
                        <div class="form-group text-center mb-3">
                            <button type="submit" class="btn btn-primary w-100">Log in</button>
                        </div>
                        <!-- Links -->
                        <div class="text-center">
                            <a href="{{ route('password.request') }}">Forgot Your Password?</a>
                            <p>Don't have an account? <a href="{{ route('register') }}">Register</a></p>
                        </div>
                        <!-- Social Login -->
                        <div class="mb-3">
                            <div class="d-flex justify-content-between">
                                <a href="{{ url('login/google') }}" class="btn btn-outline-danger">
                                    <i class="fab fa-google"></i>
                                </a>
                                <a href="{{ url('login/facebook') }}" class="btn btn-outline-primary">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="{{ url('login/apple') }}" class="btn btn-outline-dark">
                                    <i class="fab fa-apple"></i>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
