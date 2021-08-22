<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class Produto extends Model
{
    use HasFactory, Uuid;

    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];
    protected $primaryKey = 'id';

    protected $table = 'produto';
    protected $fillable = ['categoria_id','nome','icon','preco', 'estado'];

    public function categorias()
    {
        return $this->hasOne(Categoria::class, 'id', 'categoria_id');
    }

    public function processos()
    {
        return $this->hasOne(Processo::class, 'produto_id');
    }

    public function itemvendas()
    {
        return $this->hasMany(itemvenda::class, 'produto_id');
    }

}
