@extends('layouts.app')

@section('page_title', 'Welcome')

@section('header_actions')
    <!-- No extra actions for dashboard -->
@endsection

@section('content')
    <div class="card" style="box-shadow:0 8px 24px rgba(15,23,42,0.10);border:none;">
        <div class="stats-grid mb-4" style="display:flex;justify-content:center;gap:2.5rem;">
            <a href="{{ route('products.index') }}"
                class="stat d-flex flex-column align-items-center justify-content-center text-decoration-none"
                style="background:#e0e7ff;color:#2563eb;box-shadow:0 2px 12px rgba(30,41,59,0.10);border:none;padding:2.5rem 2.5rem;min-width:260px;max-width:320px;transition:box-shadow .2s,transform .2s;cursor:pointer;">
                <i class="bi bi-box-seam" style="font-size:2.5rem;margin-bottom:1rem;"></i>
                <span class="value" style="font-size:2.5rem;">{{ $stats['products'] ?? 0 }}</span>
                <span class="label" style="font-size:1.2rem;">Products</span>
            </a>
            <a href="{{ route('transactions.index') }}"
                class="stat d-flex flex-column align-items-center justify-content-center text-decoration-none"
                style="background:#dcfce7;color:#22c55e;box-shadow:0 2px 12px rgba(30,41,59,0.10);border:none;padding:2.5rem 2.5rem;min-width:260px;max-width:320px;transition:box-shadow .2s,transform .2s;cursor:pointer;">
                <i class="bi bi-arrow-left-right" style="font-size:2.5rem;margin-bottom:1rem;"></i>
                <span class="value" style="font-size:2.5rem;">{{ $stats['transactions'] ?? 0 }}</span>
                <span class="label" style="font-size:1.2rem;">Transactions</span>
            </a>
            <a href="{{ route('categories.index') }}"
                class="stat d-flex flex-column align-items-center justify-content-center text-decoration-none"
                style="background:#fee2e2;color:#ef4444;box-shadow:0 2px 12px rgba(30,41,59,0.10);border:none;padding:2.5rem 2.5rem;min-width:260px;max-width:320px;transition:box-shadow .2s,transform .2s;cursor:pointer;">
                <i class="bi bi-folder" style="font-size:2.5rem;margin-bottom:1rem;"></i>
                <span class="value" style="font-size:2.5rem;">{{ $stats['categories'] ?? 0 }}</span>
                <span class="label" style="font-size:1.2rem;">Categories</span>
            </a>
        </div>
        <div class="card" style="margin-top:2rem;box-shadow:0 4px 16px rgba(15,23,42,0.10);border:none;">
            <h3 class="text-lg fw-bold mb-4" style="font-size:1.3rem;">Recent Transactions</h3>
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
                        @forelse($recentTransactions as $txn)
                            <tr>
                                <td>{{ $txn->item_name }}</td>
                                <td>{{ $txn->category }}</td>
                                <td>{{ $txn->quantity }}</td>
                                <td>{{ $txn->supplier }}</td>
                                <td>{{ \Carbon\Carbon::parse($txn->date)->format('d-F-Y') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center text-muted">No recent transactions</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection