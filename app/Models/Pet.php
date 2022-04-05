<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $table = "pets";
    public $timestamps = false;

    public function myOwner(){
        return $this->belongsTo(\App\Models\User::class,'ownerId','id');
    }

    public function myType(){
        return $this->belongsTo(\App\Models\TypeOfPet::class,'type','type');
    }
}
