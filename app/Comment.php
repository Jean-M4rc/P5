<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [

        'user_id','seller_id','title','content',

    ];

    public function sellers()
    {
        return $this->belongTo('App\Seller');
    }

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
}
