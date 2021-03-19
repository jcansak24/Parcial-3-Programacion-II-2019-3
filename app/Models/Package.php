<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    /*Relacion uno a muchos*/
    public function user(){
        return $this->hasMany(User::class);
    }
    public function payment(){
        return $this->hasMany(Payment::class);
    }

    /*Relacion uno a muchos inversa*/
    public function internetServices(){
        return $this->belongsTo(internetServices::class);
    }
    public function tvServices(){
        return $this->belongsTo(tvServices::class);
    }
    public function telephoneServices(){
        return $this->belongsTo(telephoneServices::class);
    }

    /*Relacion muchos a muchos*/
    public function changePackageRequest(){
        return $this->hasMany(User::class);
    }

}
