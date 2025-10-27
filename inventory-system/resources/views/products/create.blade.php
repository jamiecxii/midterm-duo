@extends('layouts.app')

@section('page_title', 'Products Inventory')

@section('content')
    <div class="container py-4">
        <div class="form-card shadow-lg p-4">
            <h2 class="fw-bold text-success mb-4">➕ Add New Product</h2>
            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label fw-semibold">Product Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter product name" required>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Quantity</label>
                    <input type="number" name="quantity" class="form-control" placeholder="Enter quantity" required>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Price</label>
                    <input type="number" step="0.01" name="price" class="form-control" placeholder="Enter price" required>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Category</label>
                    <select name="category_id" class="form-select" required>
                        <option value="">-- Select Category --</option>
                        @foreach($categories as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="d-flex justify-content-end gap-2 mt-4">
                    <a href="{{ route('products.index') }}" class="btn btn-secondary px-4">Cancel</a>
                    <button type="submit" class="btn btn-success px-4">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection