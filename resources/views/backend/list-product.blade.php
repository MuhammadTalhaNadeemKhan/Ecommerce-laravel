@extends('backend.layouts.app')

@section('title', 'List Product')

@section('content')
<div class="container mt-5">
    <h2>All Products</h2>
    <a href="{{ route('admin.add-product') }}" class="btn btn-primary mb-3">Add New Product</a>

    <table class="table table-bordered text-white table-lg">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Product ID</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Sale</th>
                <th>Stock</th>
                <th>Start Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->product_id }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->quantity }}</td>
                <td>{{ $product->sale ? 'Yes' : 'No' }}</td>
                <td>{{ $product->stock }}</td>
                <td>{{ $product->start_date ? $product->start_date->format('d M, Y') : 'N/A' }}</td>
                <td>
                    <a href="{{ route('admin.edit-product', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.delete-product', $product->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="d-flex justify-content-center">
        {{ $products->links() }}
    </div>
</div>
@endsection
