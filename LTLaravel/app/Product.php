<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //khai bao table can su dung
    protected $table = 'product';
    //khai bao cac truong can su dung
    protected $fillable = ['name','description','price','photo'];

}
