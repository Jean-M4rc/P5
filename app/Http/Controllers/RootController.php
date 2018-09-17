<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Comment;
use App\Seller;

class RootController extends Controller
{
    public function administration()
    {
        $users = User::all()->where('admin','0');
        $sellers = Seller::all();
        $comments = Comment::all();

        return view('root', [
            'utilisateurs' => $users,
            'point_de_ventes' => $sellers,
            'commentaires' => $comments,
        ]);
    }
}
