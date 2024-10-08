<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;

    protected $fillable=[
        'name'
    ];


    function attributeOptions()
    {
        return $this->hasMany('App\Models\AttributeOptions');
    }
}
