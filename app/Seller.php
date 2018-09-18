<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends User
{
    protected $fillable = [

        'user_id','longitude','latitude','avatar1_path','avatar2_path','avatar3_path','presentation','business_name','phone','address',

    ];

    /**
     * Relation des catégories de produits et des vendeurs
     *
     * @return array
     */
    public function seller_category()
    {
        return $this->belongsToMany(Category::class, 'sellers_categories', 'seller_follower_id', 'category_followed_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
