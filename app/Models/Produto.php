<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produto extends Model
{
    protected $fillable = [
        'descricao',
        'preco',
        'categoria_id'

    ];
    public function categoria(): BelongsTo
    {
    return $this->belongsTo(Categoria::class, 'categoria_id');
    }
}
