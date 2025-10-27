@extends('layouts.app')

@section('page_title', 'Reports')

@section('header_actions')
    <!-- No header actions for reports -->
@endsection

@section('content')
    <div class="card mb-4">
        <form method="GET" action="#" class="d-flex gap-2 align-items-end">
            <input type="date" name="from" class="form-control" required>
            <input type="date" name="to" class="form-control" required>
            <button type="submit" class="btn btn-primary px-4 py-2" style="font-size:1rem;font-weight:600;">Generate
                Report</button>
        </form>
    </div>
    <div class="card">
        <h3 class="fw-semibold text-muted mb-3">Recent Transactions</h3>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Category</th>
                        <th>Quantity</th>
                        <th>Supplier</th>
                        <th>Date</th>
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
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted">No transactions found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection