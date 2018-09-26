<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seller;
use App\Category;

class SellerListController extends Controller
{
    public function sellersList()
    {
        $categories = Category::with('sellers')->get();

        return view('sellersList', [

            'categories' => $categories,
        ]);
       
    }
}
