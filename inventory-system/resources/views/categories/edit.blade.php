@extends('layouts.app')

@section('content')
    <div class="container py-4 d-flex justify-content-center">
        <div class="form-card shadow-lg p-4 w-100" style="max-width: 500px;">
            <h2 class="fw-bold text-warning mb-4 text-center">✏️ Edit Category</h2>

            <form action="{{ route('categories.update', $category->id) }}" method="POST" class="mx-auto"
                style="max-width: 100%;">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label fw-semibold">Category Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $category->name }}" required>
                </div>

                <div class="d-flex justify-content-center gap-2 mt-4">
                    <a href="{{ route('categories.index') }}" class="btn btn-secondary px-4">Cancel</a>
                    <button type="submit" class="btn btn-warning px-4">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection