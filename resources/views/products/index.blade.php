<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body { font-family: 'Figtree', sans-serif; background: linear-gradient(120deg, #e0e7ff 0%, #f3f4f6 100%); margin: 0; padding: 0; }
        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #fff;
            padding: 20px 40px 10px 40px;
            border-bottom: 1px solid #e5e7eb;
            box-shadow: 0 2px 8px rgba(31,38,135,0.06);
        }
        .nav-links {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .nav-links a, .nav-links span {
            color: #2563eb;
            text-decoration: none;
            font-weight: 500;
        }
        .nav-links span { color: #222; }
        .add-btn {
            background: #28a745;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            display: flex;
            align-items: center;
            gap: 6px;
            box-shadow: 0 2px 8px rgba(40,167,69,0.08);
            transition: background 0.2s, box-shadow 0.2s;
        }
        .add-btn:hover {
            background: #218838;
            box-shadow: 0 4px 16px rgba(40,167,69,0.15);
        }
        .add-btn i { font-size: 1.2em; }
        .main-card {
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.10);
            width: 92%;
            max-width: 1100px;
            margin: 40px auto 0 auto;
            padding: 2.5rem 2rem 2rem 2rem;
        }
        .card-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #2563eb;
            margin-bottom: 1.5rem;
            letter-spacing: 0.5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(31,38,135,0.04);
        }
        th, td {
            border: 1px solid #e5e7eb;
            padding: 12px 16px;
            text-align: left;
            vertical-align: middle;
        }
        td.image-cell {
            width: 70px;
            height: 60px;
            text-align: center;
            vertical-align: middle;
        }
        td.action-links {
            min-width: 180px;
            height: 60px;
            text-align: center;
            vertical-align: middle;
        }
        th {
            background: #f9fafb;
        }
        tr:hover {
            background: #f1f5fd;
            transition: background 0.2s;
        }
        .action-links {
            display: flex;
            gap: 8px;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
        .action-links a {
            color: #2563eb;
            text-decoration: none;
            padding: 4px 10px;
            border-radius: 5px;
            background: #e0e7ff;
            font-size: 0.97rem;
            transition: background 0.2s, color 0.2s;
        }
        .action-links a:hover {
            background: #2563eb;
            color: #fff;
        }
        .action-links form {
            display: inline;
            margin: 0;
            padding: 0;
        }
        .action-links button {
            background: #ffe0e0;
            color: #dc3545;
            border: none;
            border-radius: 5px;
            padding: 4px 10px;
            cursor: pointer;
            font-size: 0.97rem;
            transition: background 0.2s, color 0.2s;
            display: inline-block;
            vertical-align: middle;
        }
        .action-links button:hover {
            background: #dc3545;
            color: #fff;
        }
        .pagination {
            width: 100%;
            display: flex;
            justify-content: flex-end;
            margin-top: 1.5rem;
        }
    </style>
</head>
<body>
    <div class="top-bar">
        <div class="nav-links">
            <a href="/products">Products</a>
            <span>{{ Auth::user()->name }}</span>
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
        </div>
        <a href="/products/create" class="add-btn"><i class="bi bi-plus-circle"></i> Add New Product</a>
    </div>
    <div class="main-card">
        <div class="card-title">Product List</div>
        <table>
            <tr>
                <th>Image</th>
                <th>Code</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
            @forelse ($products as $product)
            <tr>
                <td class="image-cell">
                    @if($product->product_image)
                        <img src="{{ asset('storage/'.$product->product_image) }}" alt="Product Image" style="max-width: 50px; border-radius: 6px;">
                    @else
                        <span style="color:#aaa;">No Image</span>
                    @endif
                </td>
                <td>{{ $product->code }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->quantity }}</td>
                <td>{{ number_format($product->price, 2) }}</td>
                <td class="action-links">
                    <a href="{{ route('products.show', $product->id) }}">Show</a>
                    <a href="{{ route('products.edit', $product->id) }}">Edit</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" style="text-align:center;">No products found.</td>
            </tr>
            @endforelse
        </table>
        <div class="pagination">
            {{ $products->links() }}
        </div>
    </div>
</body>
</html>