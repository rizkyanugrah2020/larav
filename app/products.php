<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $fillable = [
        "product_name", "product_code", "details", "logo"
    ];
}
