@extends('layouts.app')

@section('page_title', 'Categories')

@section('content')
    <div class="container py-4">
        <div class="form-card shadow-lg p-4">
            <h2 class="fw-bold text-success mb-4">➕ Add New Category</h2>
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label fw-semibold">Category Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter category name" required>
                </div>
                <div class="d-flex justify-content-end gap-2 mt-4">
                    <a href="{{ route('categories.index') }}" class="btn btn-secondary px-4">Cancel</a>
                    <button type="submit" class="btn btn-success px-4">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection