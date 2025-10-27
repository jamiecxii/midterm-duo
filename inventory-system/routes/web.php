<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ReportsController;
use App\Models\Transaction;

Route::get('/', function () {
    return redirect()->route('products.index');
});

Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);
Route::resource('transactions', TransactionController::class);
Route::resource('reports', ReportsController::class);

Route::get('/dashboard', function () {
    $stats = [
        'products' => \App\Models\Product::count(),
        'transactions' => Transaction::count(),
        'categories' => \App\Models\Category::count(),
    ];
    $recentTransactions = Transaction::orderBy('date', 'desc')->take(5)->get();
    return view('dashboard', compact('stats', 'recentTransactions'));
})->name('dashboard');
