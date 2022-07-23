<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtPeriod extends Model
{
    use HasFactory;

    public function paintings()
    {
        return $this->hasMany(Painting::class);
    }
}
