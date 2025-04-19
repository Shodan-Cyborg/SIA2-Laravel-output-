<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Response;
use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function viewProducts()
    {
        // Fetch all products from the database
        $product_management = Products::all();

        // Pass the data to the Blade view
        return view('productManagement.product', compact('product_management'));
    }
}
