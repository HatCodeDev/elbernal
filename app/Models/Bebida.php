<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Bebida extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo',
        'tostados_id',
        'precio',
        'filtracion',
        'altura',
        'complementos',
        'imagen',
    ];

    /**
     * Define la relación entre la bebida y su tipo de tostado asociado.
     */
    public function tostado(): BelongsTo
    {
        return $this->belongsTo(Tostado::class, 'tostados_id');
    }
}
