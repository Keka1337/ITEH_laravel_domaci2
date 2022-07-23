<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Painting extends Model
{
    use HasFactory;

    protected $fillable=[
        'artist_id',
        'art_period_id',
        'title',
        'description',
        'year'
    ];

    public function artPeriod()
    {
        return $this->belongsTo(ArtPeriod::class);
    }

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
}
