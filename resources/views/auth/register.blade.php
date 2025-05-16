@extends('layouts.auth')

@section('content')
<style>
    html, body {
        height: 100%;
    }
    body {
        min-height: 100vh;
        background: linear-gradient(120deg, #e0e7ff 0%, #f3f4f6 100%);
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .register-card {
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.10);
        padding: 2.5rem 2rem 2rem 2rem;
        max-width: 420px;
        width: 100%;
        margin: 0 auto;
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .register-logo {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 1.2rem;
    }
    .register-logo i {
        font-size: 2.8rem;
        color: #2563eb;
    }
    .register-title {
        font-size: 1.7rem;
        font-weight: 700;
        color: #22223b;
        margin-bottom: 1.2rem;
        text-align: center;
        letter-spacing: 0.5px;
    }
    .register-form {
        width: 100%;
    }
    .form-label {
        font-weight: 500;
        color: #374151;
        margin-bottom: 0.3rem;
    }
    .form-control {
        border-radius: 8px;
        border: 1px solid #cbd5e1;
        margin-bottom: 0.7rem;
        width: 100%;
        padding: 0.6rem 0.75rem;
        font-size: 1rem;
    }
    .register-btn {
        width: 100%;
        background: #2563eb;
        color: #fff;
        font-weight: 600;
        border: none;
        border-radius: 8px;
        padding: 0.75rem;
        margin-top: 0.2rem;
        font-size: 1.08rem;
        transition: background 0.2s;
    }
    .register-btn:hover {
        background: #1d4ed8;
    }
    .login-link {
        display: block;
        text-align: center;
        margin-top: 1.5rem;
        color: #2563eb;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.2s;
        font-size: 1rem;
    }
    .login-link:hover {
        color: #1d4ed8;
        text-decoration: underline;
    }
</style>
<div class="register-card">
    <div class="register-logo">
        <i class="bi bi-person-plus"></i>
    </div>
    <div class="register-title">Create your account</div>
    <form method="POST" action="{{ route('register') }}" class="register-form">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password-confirm" class="form-label">Confirm Password</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>
        <button type="submit" class="register-btn">Register</button>
    </form>
    <a href="{{ route('login') }}" class="login-link">Already have an account? Login here</a>
</div>
@endsection 