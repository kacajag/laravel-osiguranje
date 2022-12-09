<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Zaposleni;

class Klijent extends Model
{
    use HasFactory;

    public function zaposleni(){
        return $this->belongsTo(Zaposleni::class);
    }
}
