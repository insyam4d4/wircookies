<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $dailyStats = [
            'sku' =>  0,
            'product' =>  0,
            'seller-scan' =>  0,
            'buyer-scan' =>  0,
        ];

        return view('dashboard.index', compact('dailyStats'));
    }
}
