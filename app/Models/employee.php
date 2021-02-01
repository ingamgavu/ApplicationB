<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $table = 'employee';
    use HasFactory;
    //to make a function that will create a relationship with the following models that we have
    function getCompany(){
        return $this->hasOne('App\Models\Company');
    }
}
