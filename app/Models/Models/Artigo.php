<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class Artigo extends Model
{
    use HasFactory, Uuid;

    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];

    protected $table = 'artigo';
    protected $fillable = ['nome','estado'];

    public function entradaestoques()
    {
        return $this->hasMany(AumentaEstoque::class, 'artigo_id');
    }

    public function estoques()
    {
        return $this->hasMany(Estoque::class, 'artigo_id');
    }
}
