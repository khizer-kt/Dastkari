<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    public  $table ='products';
    public $timestamps = false;
    protected $primaryKey = 'idproducts';
    function order_items(){
        return $this->hasMany('App\Models\Order_items');
    }
    public function product(){
        return $this->belongsTo('App\Models\CategoryTable','category_id');
    }
    public function seller(){
        return $this->belongsTo('App\Models\Sellers','seller_id');
    }
}