<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Departament;

class Province extends Model
{
    use HasFactory;

    //relacion de muchos a uno con departament
    public function departament(){
        return $this->belongsTo(Departament::class);
    }

    //relacin de uno a muchos con distrito
    public function districts(){
        return $this->hasMany(District::class);
    }
}
