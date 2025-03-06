<?php

namespace App\Models\Fish;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fish extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'size',
        'weight',
        'rating',
    ];
}
