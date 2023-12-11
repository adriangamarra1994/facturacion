<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Province;

class Departament extends Model
{
    use HasFactory;

    //relacion uno a muchos con provincia
    public function provinces(){
        return $this->hasMany(Province::class);
    }

    //relacin de uno a muchos con distrito
    public function districts(){
        return $this->hasMany(District::class);
    }
}
