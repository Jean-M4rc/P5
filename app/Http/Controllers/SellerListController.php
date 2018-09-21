<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seller;

class SellerListController extends Controller
{
    public function sellersList()
    {
        $sellers = Seller::all();

        return view('sellersList', [

            'vendeurs' => $sellers,
        ]);
    }
}
