@extends('layouts.app')

@section('content')
    <style>
        body {
            background-color: #f2f2f2;
        }
        .signup-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card {
            border: none;
            border-radius: 20px;
            overflow: hidden;
        }
        .form-section {
            padding: 40px;
        }
        .form-control {
            font-size: 14px;
        }
        .form-control:focus {
            box-shadow: none;
        }
    </style>

    <div class="container signup-container">
        <div class="card shadow-lg w-100" style="max-width: 900px;">
            <div class="row g-0">

                <!-- Left Side Image -->
                <div class="col-md-6 d-none d-md-block p-0">
                    <img src="{{ asset('assets/img/download2.jpg') }}" alt="HITEC University" class="img-fluid h-100 w-100" style="object-fit: cover; border-top-left-radius: 20px; border-bottom-left-radius: 20px;">
                </div>

                <!-- Right Side Form -->
                <div class="col-md-6 bg-white">
                    <div class="form-section">
                        <div class="text-center mb-4">
                            <img src="{{ asset('assets/img/download.jpg') }}" alt="Logo" width="50">
                            <h6 class="mt-2 fw-bold">HITEC UNIVERSITY</h6>
                            <p class="text-muted">Welcome to Join HITEC University</p>
                        </div>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input id="name" type="text"
                                       class="form-control @error('name') is-invalid @enderror"
                                       name="name" value="{{ old('name') }}" required autofocus>
                                @error('name')
                                <span class="invalid-feedback d-block"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input id="email" type="email"
                                       class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required>
                                @error('email')
                                <span class="invalid-feedback d-block"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror"
                                       name="password" required>
                                @error('password')
                                <span class="invalid-feedback d-block"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password-confirm" class="form-label">Confirm Password</label>
                                <input id="password-confirm" type="password"
                                       class="form-control"
                                       name="password_confirmation" required>
                            </div>

                            <div class="d-grid mb-2">
                                <button type="submit" class="btn btn-primary">Create Account</button>
                            </div>

                            <div class="text-center mt-3">
                                <small class="text-muted">Already have an account? <a href="{{ route('login') }}">Sign in now</a></small>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
