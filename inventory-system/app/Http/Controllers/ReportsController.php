<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Transaction;
class ReportsController extends Controller
{
    public function index()
    {
        $transactions = Transaction::orderBy('date', 'desc')->take(10)->get();
        return view('reports.index', compact('transactions'));
    }
    // ...other resource methods can be added as needed...
}
