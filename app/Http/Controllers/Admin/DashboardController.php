<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
{
    $dailySales = Order::whereDate('created_at', today())
        ->sum('total_price');
    
    $dailyOrders = Order::whereDate('created_at', today())
        ->count();
    
    $topProducts = Product::withCount('orderItems')
        ->orderBy('order_items_count', 'desc')
        ->take(5)
        ->get();
    
    $monthlySales = Order::whereBetween('created_at', [
        now()->startOfMonth(), 
        now()->endOfMonth()
    ])->sum('total_price');

    return view('admin.dashboard', compact(
        'dailySales', 
        'dailyOrders', 
        'topProducts', 
        'monthlySales'
    ));
}

public function salesChart()
{
    $sales = Order::selectRaw('DATE(created_at) as date, SUM(total_price) as total')
        ->groupBy('date')
        ->get();
    
    return response()->json($sales);
}
}
