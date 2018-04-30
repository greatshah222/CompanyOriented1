<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['name','description','category_id','price','spiciness','image'];
    public  function category()
    {
        return  $this->belongsTo(Category::class);
    }


}
