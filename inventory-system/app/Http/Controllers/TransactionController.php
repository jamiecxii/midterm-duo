<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Category;
class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::all();
        return view('transactions.index', [
            'transactions' => $transactions
        ]);
    }
    public function create()
    {
        $categories = Category::all();
        return view('transactions.create', [
            'categories' => $categories
        ]);
    }
    public function store(Request $request)
    {
        $transaction = new Transaction();
        $transaction->item_name = $request->item_name;
        $transaction->category = $request->category;
        $transaction->quantity = $request->quantity;
        $transaction->supplier = $request->supplier;
        $transaction->date = $request->date;
        $transaction->save();
        return redirect()->route('transactions.index')->with('success', 'Transaction added.');
    }
    public function edit($id)
    {
        $transaction = Transaction::findOrFail($id);
        $categories = Category::all();
        return view('transactions.create', [
            'transaction' => $transaction,
            'categories' => $categories
        ]);
    }
    public function update(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->item_name = $request->item_name;
        $transaction->category = $request->category;
        $transaction->quantity = $request->quantity;
        $transaction->supplier = $request->supplier;
        $transaction->date = $request->date;
        $transaction->save();
        return redirect()->route('transactions.index')->with('success', 'Transaction updated.');
    }
    public function destroy($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->delete();
        return redirect()->route('transactions.index')->with('success', 'Transaction deleted.');
    }
}
