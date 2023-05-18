<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    public  $table ='customers';
    public $timestamps = false;
    protected $primaryKey = 'idcustomers';
    function orders(){
        return $this->hasMany('App\Models\Orders');
    }
    
}