<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $table = 'trips';

    protected $fillable = [
        'nazev',
        'destinace',
        'cena',
        'obrazek',
        'popis',
    ];

    public $timestamps = false;
}
