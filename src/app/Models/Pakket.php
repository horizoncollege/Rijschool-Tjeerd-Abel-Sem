<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pakket extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'Prijs',
        'Prijs_los',
        'aantal_lessen',
        'auto',
    ];
}
