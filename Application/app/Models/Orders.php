<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    public  $table ='order_cart';
    public $timestamps = false;
    protected $primaryKey = 'idorder_cart';
    public function customers(){
        return $this->belongsTo('App\Models\Customers','customer_id');
    }
}