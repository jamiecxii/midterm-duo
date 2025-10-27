@extends('layouts.app')

@section('page_title', 'Transactions')

@section('header_actions')
    <a href="{{ route('transactions.create') }}" class="btn btn-primary shadow px-4 py-2">+ Add Transaction</a>
@endsection

@section('content')
    <div class="card">
        <table class="table">
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Category</th>
                    <th>Quantity</th>
                    <th>Supplier</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($transactions as $txn)
                    <tr>
                        <td>{{ $txn->item_name }}</td>
                        <td>{{ $txn->category }}</td>
                        <td>{{ $txn->quantity }}</td>
                        <td>{{ $txn->supplier }}</td>
                        <td>{{ \Carbon\Carbon::parse($txn->date)->format('d-F-Y') }}</td>
                        <td class="d-flex gap-2">
                            <a href="{{ route('transactions.edit', $txn->id) }}"
                                class="btn btn-outline-primary btn-sm me-2">Edit</a>
                            <form action="{{ route('transactions.destroy', $txn->id) }}" method="POST" class="d-inline">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm"
                                    onclick="return confirm('Delete this transaction?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted">No transactions found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection