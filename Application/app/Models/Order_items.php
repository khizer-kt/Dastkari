<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_items extends Model
{
    use HasFactory;
    public  $table ='order_items';
    protected $primaryKey = 'idorder_items';
    public $timestamps = false;
    // protected $fillable = ['seller_id','customer_id'];
    public function product(){
    return $this->belongsTo('App\Models\Products','product_id');
}
}
