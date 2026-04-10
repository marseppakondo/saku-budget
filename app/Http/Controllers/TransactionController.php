<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(){
        return response()->json([
            'success' => true,
            'message' => 'List of transactions',
            'data' => Transaction::all()
        ], 200);
    }
}
