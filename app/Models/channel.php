<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class channels extends Model
{
    use HasFactory;

    /*Relacion muchos a muchos */
    public function program(){
        return $this->belongsToMany(Program::class);
    }
    public function plan(){
        return $this->belongsToMany(Plan::class);
    }
}
