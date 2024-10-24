<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DiscoverController extends Controller
{
    public function index()
    {
        // Ambil 8 produk unggulan
        $featuredProducts = Product::where('is_active', 1)->inRandomOrder()->take(8)->get();
        return view('discover', ['featuredProducts' => $featuredProducts]);
    }
}
