@extends('layouts.app')

@section('content')
    <div class="container py-4 d-flex justify-content-center">
        <div class="form-card shadow-lg p-4 w-100" style="max-width: 500px;">
            <h2 class="fw-bold text-warning mb-4 text-center">✏️ Edit Product</h2>

            <form action="{{ route('products.update', $product->id) }}" method="POST" class="mx-auto"
                style="max-width: 100%;">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label fw-semibold">Product Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Quantity</label>
                    <input type="number" name="quantity" class="form-control" value="{{ $product->quantity }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Price</label>
                    <input type="number" step="0.01" name="price" class="form-control" value="{{ $product->price }}"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Category</label>
                    <select name="category_id" class="form-select" required>
                        @foreach($categories as $cat)
                            <option value="{{ $cat->id }}" {{ $product->category_id == $cat->id ? 'selected' : '' }}>
                                {{ $cat->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="d-flex justify-content-center gap-2 mt-4">
                    <a href="{{ route('products.index') }}" class="btn btn-secondary px-4">Cancel</a>
                    <button type="submit" class="btn btn-warning px-4">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection