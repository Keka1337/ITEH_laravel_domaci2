<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Painting extends Model
{
    use HasFactory;

    protected $fillable=[
        // 'artist_id',
        // 'art_period_id',
        'title',
        'description',
        'year'
    ];
}