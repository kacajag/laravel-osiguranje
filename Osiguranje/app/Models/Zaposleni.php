<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OsiguravajucaKuca;

class Zaposleni extends Model
{
    use HasFactory;

    public function kuca(){
        return $this->belongsTo(OsiguravajucaKuca::class);
    }

    public function klijenti(){
        return $this->hasMany(Klijent::class);
    }

}
