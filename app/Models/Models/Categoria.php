<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;
class Categoria extends Model
{
    use HasFactory, Uuid;

    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];

    protected $table = 'categoria';
    protected $fillable = ['nome','icon','estado'];

    public function produtos()
    {
        return $this->hasMany(Produto::class, 'categoria_id');
    }  

    public function itemhistoricos()
    {
        /* return $this->hasManyThrough(Itemhistorico::class, Produto::class, 'categoria_id', 'produto_id', 'id', 'id'); */
        return $this->hasManyThrough(Itemhistorico::class, Produto::class);
    }
}
