<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    protected $table ='members';
    protected $fillable =array('id','name','address','age','photo');

}
