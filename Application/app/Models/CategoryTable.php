<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryTable extends Model
{   
    use HasFactory;
    public  $table ='category';

    public $timestamps = false;
    protected $primaryKey = 'idcategory';
    function products(){
        return $this->hasMany('App\Models\Products');
    }
}