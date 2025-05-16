<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            background-color: #f3f4f6;
            margin: 0;
            padding: 0;
        }
        .min-h-screen { min-height: 100vh; }
        .max-w-7xl { max-width: 80rem; margin-left: auto; margin-right: auto; }
        .px-4 { padding-left: 1rem; padding-right: 1rem; }
        .py-6 { padding-top: 1.5rem; padding-bottom: 1.5rem; }
        .bg-white { background-color: white; }
        .border-b { border-bottom-width: 1px; border-color: #e5e7eb; }
        .flex { display: flex; }
        .justify-between { justify-content: space-between; }
        .items-center { align-items: center; }
        .text-xl { font-size: 1.25rem; line-height: 1.75rem; }
        .font-semibold { font-weight: 600; }
        .text-blue-600 { color: #2563eb; }
        .px-3 { padding-left: 0.75rem; padding-right: 0.75rem; }
    </style>
</head>
<body>
    <div class="min-h-screen bg-gray-100">
        <!-- Simple header -->
        <div class="bg-white border-b border-gray-200 py-2">
            <div class="max-w-7xl mx-auto px-4">
                <div class="flex justify-between items-center">
                    <h1 class="text-xl font-semibold">{{ config('app.name', 'Laravel') }}</h1>
                    <div>
                        <a href="{{ route('products.index') }}" class="text-blue-600 px-3">Products</a>
                        @guest
                            <a href="{{ route('login') }}" class="text-blue-600 px-3">{{ __('Login') }}</a>
                            <a href="{{ route('register') }}" class="text-blue-600 px-3">{{ __('Register') }}</a>
                        @else
                            <span class="px-3">{{ Auth::user()->name }}</span>
                            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-blue-600 px-3">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @endguest
                    </div>
                </div>
            </div>
        </div>

        <!-- Page Heading -->
        @isset($header)
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
</body>
</html> 