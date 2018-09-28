<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class Commentscontroller extends Controller
{
   public function store()
   {
    request()->validate([

        'title'=>['required','min:4'],
        'content'=>['required','min:5'],
        'user'=>['required','integer'],
        'seller'=>['required','integer'],

    ]);
    
    Comment::create([
        'content' => request('content'),
        'title' => request('title'),
        'seller_id'=>request('seller'),
        'user_id'=>request('user'),
    ]);

    return back();
   }

   /*
        public function NewComment()
        {
            request()->validate([
                'seller_id'=> ['required'],
                'title' => ['required','string'],
                'comment' => ['required', 'text'],
            ]);

            auth()->user()->comments()->create([
                'comment' => request('comment'),
                'title' => request('title'),
            ]);

            flash('Votre commentaire est enregistré.')->success();

            return back();
        }
    */
}
