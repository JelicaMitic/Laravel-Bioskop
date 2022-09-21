<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Film;
 

class Reziser extends Model
{
    use HasFactory;


    protected $fillable=['ime','prezime'];

    public function film(){
        return $this->hasMany(Film::class);
    }
}
