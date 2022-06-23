<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'director',
        'actors',
        'synopsys'
    ];

    public function projekcijas() {
        return $this->hasMany(Projekcija::class);
    }
}
