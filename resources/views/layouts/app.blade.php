<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        
        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

        <!-- Basic Styles -->
        <style>
            /* Base styles */
            body {
                font-family: 'Figtree', sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f3f4f6;
                color: #1f2937;
            }
            
            /* Layout */
            .min-h-screen {
                min-height: 100vh;
            }
            .flex {
                display: flex;
            }
            .flex-col {
                flex-direction: column;
            }
            .items-center {
                align-items: center;
            }
            .justify-between {
                justify-content: space-between;
            }
            .w-full {
                width: 100%;
            }
            .max-w-7xl {
                max-width: 80rem;
            }
            .mx-auto {
                margin-left: auto;
                margin-right: auto;
            }
            .px-4 {
                padding-left: 1rem;
                padding-right: 1rem;
            }
            .py-6 {
                padding-top: 1.5rem;
                padding-bottom: 1.5rem;
            }
            .py-12 {
                padding-top: 3rem;
                padding-bottom: 3rem;
            }
            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem;
            }
            
            /* Navbar */
            .border-b {
                border-bottom-width: 1px;
            }
            .border-gray-200 {
                border-color: #e5e7eb;
            }
            .bg-white {
                background-color: white;
            }
            
            /* Content */
            .shadow-sm {
                box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            }
            .rounded-lg {
                border-radius: 0.5rem;
            }
            .overflow-hidden {
                overflow: hidden;
            }
            
            /* Typography */
            .text-gray-800 {
                color: #1f2937;
            }
            .text-gray-500 {
                color: #6b7280;
            }
            .font-semibold {
                font-weight: 600;
            }
            .text-xl {
                font-size: 1.25rem;
                line-height: 1.75rem;
            }
            
            /* Table styles */
            table {
                width: 100%;
                border-collapse: collapse;
            }
            th, td {
                padding: 0.75rem 1rem;
                text-align: left;
                border: 1px solid #e5e7eb;
            }
            th {
                background-color: #f9fafb;
                font-weight: 600;
            }
            
            /* Button styles */
            .bg-green-500 {
                background-color: #10b981;
            }
            .bg-blue-500 {
                background-color: #3b82f6;
            }
            .bg-yellow-500 {
                background-color: #f59e0b;
            }
            .bg-red-500 {
                background-color: #ef4444;
            }
            .hover\:bg-green-700:hover {
                background-color: #047857;
            }
            .hover\:bg-blue-700:hover {
                background-color: #1d4ed8;
            }
            .hover\:bg-yellow-700:hover {
                background-color: #b45309;
            }
            .hover\:bg-red-700:hover {
                background-color: #b91c1c;
            }
            .text-white {
                color: white;
            }
            .font-bold {
                font-weight: 700;
            }
            .py-2 {
                padding-top: 0.5rem;
                padding-bottom: 0.5rem;
            }
            .py-1 {
                padding-top: 0.25rem;
                padding-bottom: 0.25rem;
            }
            .px-4 {
                padding-left: 1rem;
                padding-right: 1rem;
            }
            .px-3 {
                padding-left: 0.75rem;
                padding-right: 0.75rem;
            }
            .rounded {
                border-radius: 0.25rem;
            }
            .mx-1 {
                margin-left: 0.25rem;
                margin-right: 0.25rem;
            }
            
            /* Links */
            a {
                text-decoration: none;
            }
            .text-blue-600 {
                color: #2563eb;
            }
            .hover\:underline:hover {
                text-decoration: underline;
            }
            
            /* Utilities */
            .hidden {
                display: none;
            }
            .mb-4 {
                margin-bottom: 1rem;
            }
            .mt-4 {
                margin-top: 1rem;
            }
            .p-6 {
                padding: 1.5rem;
            }
            .border-l-4 {
                border-left-width: 4px;
            }
            .border-green-500 {
                border-color: #10b981;
            }
            .text-green-700 {
                color: #047857;
            }
            .bg-green-100 {
                background-color: #d1fae5;
            }
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
                            <a href="{{ route('products.index') }}" class="text-blue-600">Products</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
