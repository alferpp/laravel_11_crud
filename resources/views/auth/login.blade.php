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
    .login-card {
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.10);
        padding: 2.5rem 2rem 2rem 2rem;
        max-width: 400px;
        width: 100%;
        margin: 0 auto;
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .login-logo {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 1.2rem;
    }
    .login-logo i {
        font-size: 2.8rem;
        color: #2563eb;
    }
    .login-title {
        font-size: 1.7rem;
        font-weight: 700;
        color: #22223b;
        margin-bottom: 1.2rem;
        text-align: center;
        letter-spacing: 0.5px;
    }
    .login-form {
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
    .form-check {
        display: flex;
        align-items: center;
        margin-bottom: 1.1rem;
    }
    .form-check-input {
        margin-right: 0.5rem;
    }
    .form-check-label {
        color: #6b7280;
        font-size: 0.97rem;
    }
    .login-btn {
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
    .login-btn:hover {
        background: #1d4ed8;
    }
    .register-link {
        display: block;
        text-align: center;
        margin-top: 1.5rem;
        color: #2563eb;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.2s;
        font-size: 1rem;
    }
    .register-link:hover {
        color: #1d4ed8;
        text-decoration: underline;
    }
</style>
<div class="login-card">
    <div class="login-logo">
        <i class="bi bi-person-circle"></i>
    </div>
    <div class="login-title">Sign in to your account</div>
    <form method="POST" action="{{ route('login') }}" class="login-form">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">
                Remember Me
            </label>
        </div>
        <button type="submit" class="login-btn">Login</button>
    </form>
    <a href="{{ route('register') }}" class="register-link">Don't have an account? Register here</a>
</div>
@endsection 