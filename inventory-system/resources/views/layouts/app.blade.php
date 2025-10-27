<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Inventory Transaction System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS to support views using Bootstrap classes -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('css/inventory.css') }}" rel="stylesheet">
</head>

<body class="min-h-screen bg-neutral-100 font-sans"></body>
<div class="flex min-h-screen app-wrapper">
    <!-- Sidebar -->
    <nav class="sidebar w-64 text-white flex-col py-8 px-6 shadow-lg hidden md:flex">
        <div class="mb-8 text-center">
            <span
                style="font-size:2.1rem;font-weight:800;letter-spacing:-1px;line-height:1.1;display:block;margin-bottom:2.2rem;"
                class="text-white">Inventory System</span>
        </div>
        <ul class="space-y-2 text-sm">
            <li>
                <a href="{{ route('dashboard') }}"
                    class="block px-4 py-2 rounded-lg transition hover:bg-white/10 {{ request()->routeIs('dashboard') ? 'bg-white/10 font-semibold' : '' }}">
                    <i class="bi bi-house-door me-2"></i> Dashboard
                </a>
            </li>
            <li>
                <a href="{{ route('products.index') }}"
                    class="block px-4 py-2 rounded-lg transition hover:bg-white/10 {{ request()->routeIs('products.*') ? 'bg-white/10 font-semibold' : '' }}">
                    <i class="bi bi-box-seam me-2"></i> Products
                </a>
            </li>
            <li>
                <a href="{{ route('categories.index') }}"
                    class="block px-4 py-2 rounded-lg transition hover:bg-white/10 {{ request()->routeIs('categories.*') ? 'bg-white/10 font-semibold' : '' }}">
                    <i class="bi bi-folder me-2"></i> Categories
                </a>
            </li>
            <li>
                <a href="{{ route('transactions.index') }}"
                    class="block px-4 py-2 rounded-lg transition hover:bg-white/10 {{ request()->routeIs('transactions.*') ? 'bg-white/10 font-semibold' : '' }}">
                    <i class="bi bi-arrow-left-right me-2"></i> Transactions
                </a>
            </li>
            <li>
                <a href="{{ route('reports.index') }}"
                    class="block px-4 py-2 rounded-lg transition hover:bg-white/10 {{ request()->routeIs('reports.*') ? 'bg-white/10 font-semibold' : '' }}">
                    <i class="bi bi-bar-chart me-2"></i> Reports
                </a>
            </li>
        </ul>
    </nav>
    <!-- Main Content -->
    <main class="flex-1 px-0 py-6" style="width:100%;margin-left:2rem;margin-right:2rem;">
        <div class="card"
            style="background:#fff;box-shadow:0 8px 24px rgba(15,23,42,0.06);border-radius:1rem;width:100%;padding:0 0 2.5rem 0;">
            <div class="header-card mb-4 d-flex align-items-center justify-content-between"
                style="background:#fff;box-shadow:none;border-radius:1rem 1rem 0 0;padding:2rem 2.5rem 1.5rem 2.5rem;">
                <span class="fw-bold" style="font-size:2rem;">@yield('page_title', '')</span>
                <div>@yield('header_actions')</div>
            </div>
            <div class="main-content px-4">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @yield('content')
            </div>
        </div>
        <footer class="text-center text-muted text-sm mt-8">
            &copy; {{ date('Y') }} Inventory Transaction System. All rights reserved.
        </footer>
    </main>
</div>
<!-- Bootstrap bundle for JS components -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/inventory.js') }}"></script>
</body>

</html>