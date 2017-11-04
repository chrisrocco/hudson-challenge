<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model  {

    protected $fillable = [ 'uri', 'product_id' ];

    public function product(){
        return $this->belongsTo(Product::class, "product_id");
    }
}
