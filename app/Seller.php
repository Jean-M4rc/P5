<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $fillable = [

        'user_id','longitude','latitude','avatar1_path','avatar2_path','avatar3_path','presentation','business_name','phone','address',

    ];
}
