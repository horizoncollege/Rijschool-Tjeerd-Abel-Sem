<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pakketen extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pakketen';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'Pakketen_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Naam',
        'Prijs',
        'Prijs_los',
        'Aantal_lessen',
        'Auto',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'Prijs' => 'int',
        'Prijs_los' => 'int',
        'Aantal_lessen' => 'int',
    ];
}
