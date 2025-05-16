@extends('layouts.auth')

@section('content')
<style>
    html, body { height: 100%; }
    body {
        min-height: 100vh;
        background: linear-gradient(120deg, #e0e7ff 0%, #f3f4f6 100%);
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .show-card {
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.10);
        padding: 2.5rem 2rem 2rem 2rem;
        max-width: 440px;
        width: 100%;
        margin: 0 auto;
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .show-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: #2563eb;
        margin-bottom: 1.2rem;
        text-align: center;
        letter-spacing: 0.5px;
    }
    .show-info {
        width: 100%;
        margin-bottom: 1.2rem;
    }
    .show-row {
        display: flex;
        margin-bottom: 0.7rem;
    }
    .show-label {
        width: 40%;
        font-weight: 600;
        color: #374151;
        text-align: right;
        padding-right: 1rem;
    }
    .show-value {
        width: 60%;
        color: #22223b;
        text-align: left;
        padding-left: 0.5rem;
    }
    .back-link {
        display: block;
        text-align: left;
        margin-bottom: 1.2rem;
        color: #2563eb;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.2s;
        font-size: 1rem;
    }
    .back-link:hover {
        color: #1d4ed8;
        text-decoration: underline;
    }
</style>
<div class="show-card">
    <a href="{{ route('products.index') }}" class="back-link">&larr; Back to Products</a>
    @if($product->product_image)
        <div style="margin-bottom: 1.2rem;">
            <img src="{{ asset('storage/'.$product->product_image) }}" alt="Product Image" style="max-width: 180px; border-radius: 12px; box-shadow: 0 2px 8px rgba(31,38,135,0.08);">
        </div>
    @endif
    <div class="show-title">Product Information</div>
    <div class="show-info">
        <div class="show-row">
            <div class="show-label">Code:</div>
            <div class="show-value">{{ $product->code }}</div>
        </div>
        <div class="show-row">
            <div class="show-label">Name:</div>
            <div class="show-value">{{ $product->name }}</div>
        </div>
        <div class="show-row">
            <div class="show-label">Quantity:</div>
            <div class="show-value">{{ $product->quantity }}</div>
        </div>
        <div class="show-row">
            <div class="show-label">Price:</div>
            <div class="show-value">{{ $product->price }}</div>
        </div>
        <div class="show-row">
            <div class="show-label">Description:</div>
            <div class="show-value">{{ $product->description }}</div>
        </div>
    </div>
</div>
@endsection 