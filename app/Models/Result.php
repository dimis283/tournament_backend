<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; 

class Result extends Model
{
     use HasFactory;

    protected $fillable = ['tournament_id', 'opponent', 'rating', 'result', 'description'];

    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }
}
