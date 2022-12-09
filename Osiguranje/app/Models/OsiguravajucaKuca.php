<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Zaposleni;

class OsiguravajucaKuca extends Model
{
    use HasFactory;

    protected $fillable = [
        'naziv',
        'adresa',
        'email',
        'website',
        'drzava'
    ];


    public function zaposleni(){
        return $this->hasMany(Zaposleni::class);
    }

}
