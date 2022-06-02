<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        //transaksi

        $transaksi = Transaction::count();

        return view('backend.dashboard', compact('transaksi'));
    }
}
