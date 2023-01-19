<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{

    
    protected $table = 'members';
    protected $primaryKey = 'id';
    protected $fillable = ['firstName', 'lastName', 'telephone' , 'address' 
    , 'country' , 'state' , 'zip' , 'Oracion' , 'Medio', 'image'];
}

