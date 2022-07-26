<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'lastname',
        'date_of_birth'
    ];

    public function paintings()
    {
        return $this->hasMany(Painting::class);
    }  
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
