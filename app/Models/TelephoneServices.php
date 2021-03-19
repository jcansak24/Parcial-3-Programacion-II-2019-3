<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TelephoneServices extends Model
{
    use HasFactory;
    public function package(){
        return $this->hasMany(Package::class);
    }
}
