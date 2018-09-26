<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seller;
use App\Category;

class SellerListController extends Controller
{
    public function sellersList()
    {
        
        $sellers_cat1 = Category::find(1)->seller()->get();
        $sellers_cat2 = Category::find(2)->seller()->get();
        $sellers_cat3 = Category::find(3)->seller()->get();
        $sellers_cat4 = Category::find(4)->seller()->get();
        $sellers_cat5 = Category::find(5)->seller()->get();
        $sellers_cat6 = Category::find(6)->seller()->get();
        $sellers_cat7 = Category::find(7)->seller()->get();
        $sellers_cat8 = Category::find(8)->seller()->get();

        return view('sellersList', [

            'sellers_cat1'=>$sellers_cat1,
            'sellers_cat2'=>$sellers_cat2,
            'sellers_cat3'=>$sellers_cat3,
            'sellers_cat4'=>$sellers_cat4,
            'sellers_cat5'=>$sellers_cat5,
            'sellers_cat6'=>$sellers_cat6,
            'sellers_cat7'=>$sellers_cat7,
            'sellers_cat8'=>$sellers_cat8,
            
        ]);
       
    }
}
