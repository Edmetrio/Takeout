<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class Produto extends Model
{
    use HasFactory, Uuid;

    protected $table = 'produto';
    protected $fillable = ['categoria_id','nome','icon','preco', 'estado'];

    public function Categoria()
    {
        return $this->belongsTo(Produto::class);
    }
}
