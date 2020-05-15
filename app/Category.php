<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Category as ModelsCategory;

class Category extends ModelsCategory
{
    public function products()
    {
        return $this->belongsToMany('App\Product','product_categories');
    }
}
