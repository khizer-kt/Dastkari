<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sellers extends Model
{
    use HasFactory;
    public  $table ='sellers';
    public $timestamps = false;
    protected $primaryKey = 'idsellers';
    function products(){
        return $this->hasMany('App\Models\Products');
    }
}