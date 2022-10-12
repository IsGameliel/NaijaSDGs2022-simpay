<?php

namespace App\Http\Controllers\Escrow;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(){
        return view('escrow.start_transaction');
    }
}
