<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gledalac extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name'
    ];

    public function projekcija() {
        return $this->hasMany(Projekcija::class);
    }
}
