<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Customer extends Model
{
    protected $fillable = ['name', 'email', 'password','phone','image','confpassword'];

    public function getImageAttribute($value){
        return !is_null($value) ? url('images/'. $value) : '';
    }
}
