<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projekcija extends Model
{
    use HasFactory;

    protected $fillable = [
        'time',
        'cinema',
        'hall'
    ];

    public function film() {
        return $this->belongsTo(Film::class);
    }

    public function gledalac() {
        return $this ->hasMany(Gledalac::class);
    }
}
