@extends('layouts.app')

@section('page_title', 'Products Inventory')

@section('header_actions')
    <a href="{{ route('products.create') }}" class="btn btn-primary shadow-sm">
        <i class="bi bi-plus-circle me-1"></i> Add Product
    </a>
@endsection

@section('content')
    <div class="card">
        <div class="row g-4">
            @foreach($products as $product)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product-tile card h-100">
                        <div class="card-header d-flex justify-content-between align-items-center py-2">
                            <span class="fw-semibold">{{ $product->category->name }}</span>
                            <span class="badge bg-light text-dark">₱{{ number_format($product->price, 2) }}</span>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="fw-bold mb-1 text-truncate">{{ $product->name }}</h5>
                            <p class="text-muted small mb-2">Stock: {{ $product->quantity }}</p>
                            <div class="mt-auto d-flex justify-content-between">
                                <a href="{{ route('products.edit', $product->id) }}"
                                    class="btn btn-outline-primary btn-sm me-2">Edit</a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-outline-danger btn-sm"
                                        onclick="return confirm('Delete this product?')">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection