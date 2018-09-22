<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seller;
use App\Category;

class SellerListController extends Controller
{
    public function sellersList()
    {
        
        $sellers = Seller::all();

        $categories = Category::all()->load('category_seller');
        
        /*
        foreach($categories as $category) {
            echo '<strong>' . $category->title . '</strong><br>';
            foreach($category->posts as $post) {
                echo $post->title . '<br>';
            }
        }
        */
        

        return view('sellersList', [
            'vendeurs' => $sellers,
            'categories' =>$categories,
        ]);

        /*
        return view('sellersList', [

            'vendeurs' => $sellers,
            'categories' => $categories,
        ]);
        */
    }
}
