<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tostado extends Model
{
    use HasFactory;

    protected $fillable = ['tostado'];

    /**
     * Define la relación entre el tipo de tostado y sus bebidas asociadas.
     */
    public function bebidas(): HasMany
    {
        return $this->hasMany(Bebida::class);
    }
}
