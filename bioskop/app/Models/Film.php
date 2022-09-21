<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reziser;
use App\Models\Zanr;

class Film extends Model
{
    use HasFactory;


    protected $fillable=['naziv','godina','zanr_id','reziser_id','opis'];

    public function reziser(){
        return $this->belongsTo(Reziser::class);
    }
    public function zanr(){
        return $this->belongsTo(Zanr::class);
    }
}
