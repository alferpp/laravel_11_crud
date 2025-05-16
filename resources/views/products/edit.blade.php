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
    .edit-card {
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
    .edit-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: #2563eb;
        margin-bottom: 1.2rem;
        text-align: center;
        letter-spacing: 0.5px;
    }
    .edit-form { width: 100%; }
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
    .edit-btn {
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
    .edit-btn:hover {
        background: #1d4ed8;
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
<div class="edit-card">
    <a href="{{ route('products.index') }}" class="back-link">&larr; Back to Products</a>
    <div class="edit-title">Edit Product</div>
    <form action="{{ route('products.update', $product->id) }}" method="post" class="edit-form" enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <div class="mb-3">
            <label for="code" class="form-label">Code</label>
            <input type="text" class="form-control @error('code') is-invalid @enderror" id="code" name="code" value="{{ $product->code }}">
            @error('code')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $product->name }}">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" class="form-control @error('quantity') is-invalid @enderror" id="quantity" name="quantity" value="{{ $product->quantity }}">
            @error('quantity')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ $product->price }}">
            @error('price')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ $product->description }}</textarea>
            @error('description')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="product_image" class="form-label">Product Image</label>
            <input type="file" class="form-control @error('product_image') is-invalid @enderror" id="product_image" name="product_image" accept="image/*">
            @if($product->product_image)
                <div style="margin-top:10px;">
                    <img src="{{ asset('storage/'.$product->product_image) }}" alt="Product Image" style="max-width: 100px; border-radius: 8px;">
                </div>
            @endif
            @error('product_image')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="edit-btn">Update</button>
    </form>
</div>
@endsection