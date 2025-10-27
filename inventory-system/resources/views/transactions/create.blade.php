@extends('layouts.app')

@section('page_title', 'Transaction')

@section('content')
    <div class="container py-4">
        <div class="form-card shadow-lg p-4">
            <h2 class="fw-bold text-primary mb-4">{{ isset($transaction) ? '✏️ Edit Transaction' : '➕ Add Transaction' }}
            </h2>
            <form
                action="{{ isset($transaction) ? route('transactions.update', $transaction->id) : route('transactions.store') }}"
                method="POST">
                @csrf
                @if(isset($transaction))
                    @method('PUT')
                @endif
                <div class="mb-3">
                    <label class="form-label fw-semibold">Item Name</label>
                    <input type="text" name="item_name" value="{{ old('item_name', $transaction->item_name ?? '') }}"
                        required class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Category</label>
                    <select name="category" required class="form-select">
                        @foreach($categories as $cat)
                            <option value="{{ $cat->name }}" {{ (old('category', $transaction->category ?? '') == $cat->name) ? 'selected' : '' }}>{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Quantity</label>
                    <input type="number" name="quantity" value="{{ old('quantity', $transaction->quantity ?? '') }}"
                        required class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Supplier</label>
                    <input type="text" name="supplier" value="{{ old('supplier', $transaction->supplier ?? '') }}" required
                        class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Date</label>
                    <input type="date" name="date" value="{{ old('date', $transaction->date ?? '') }}" required
                        class="form-control">
                </div>
                <div class="d-flex justify-content-end gap-2 mt-4">
                    <a href="{{ route('transactions.index') }}" class="btn btn-secondary px-4">Cancel</a>
                    <button type="submit"
                        class="btn btn-primary px-4">{{ isset($transaction) ? 'Update' : 'Save' }}</button>
                </div>
            </form>
        </div>
    </div>
@endsection