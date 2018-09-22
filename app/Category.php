<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
    ];

    public function category_seller()
    {
        return $this->belongsToMany('App\Seller','sellers_categories', 'seller_follower_id', 'category_followed_id');
    }
}
