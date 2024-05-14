<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transactions = transaction::all();

        return view('admin.transaction.index', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();

        return view('admin.transaction.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'product_id' => 'required',
            'name' => 'required',
            'phone' => 'required',
        ]);

        transaction::create($data);
        return redirect()->route('admin.transaction.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(transaction $transaction)
    {
        $products = Product::all();

        return view('admin.transaction.edit', compact('transaction', 'products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, transaction $transaction)
    {
        $data = $request->validate([
            'product_id' => 'required',
            'name' => 'required',
            'phone' => 'required',
        ]);

        $transaction->update($data);
        return redirect()->route('admin.transaction.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(transaction $transaction)
    {
        $transaction->delete();

        return redirect()->route('admin.transaction.index');
    }
}
