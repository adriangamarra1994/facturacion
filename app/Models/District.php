<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    //relacion de muchos a uno 
    public function departament(){
        return $this->belongsTo(Departament::class);
    }

    public function province(){
        return $this->belongsTo(province::class);
    }
}

