<?php

namespace App\Http\Controllers;
use App\Models\Agent;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('product.index')->
                              withProducts($products);

    }
}
?>
