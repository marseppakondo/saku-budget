<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(){        
        return response()->json([
            'success' => true,
            'message' => 'List of transactions',
            'data' => auth()->user()->transactions
        ], 200);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'amount' => 'required|numeric|min:1',
            'category' => 'required|string',
            'date' => 'required|date',
            'description' => 'required|string',
        ]);

        $transaction = auth()->user()->transactions()->create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Transaction created successfully',
            'data' => $transaction
        ], 201);
    }

    public function show($id) {
        $transaction = auth()->user()->transactions()->find($id);

        if (!$transaction) {
            return response()->json([
                'success' => false,
                'message' => 'Transaction not found or access denied'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $transaction
        ], 200);
    }


    public function delete($id){
        $transaction = auth()->user()->transactions()->find($id);

        if (!$transaction) {
            return response()->json([
                'success' => false,
                'message' => 'Transaction not found'
            ], 404);
        }

        $transaction->delete();

        return response()->json([
            'success' => true,
            'message' => 'Transaction deleted successfully'
        ], 200);
    }
}
