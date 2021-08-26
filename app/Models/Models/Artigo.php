<?php

namespace App\Models\Models;

use App\Models\User;
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

    public function estoques()
    {
        return $this->belongsToMany(Estoque::class);
    }

    public function aumentaestoques()
    {
        return $this->hasMany(AumentaEstoque::class);
    }

    public function produtos()
    {
        return $this->hasMany(Produto::class, 'processo');
    }

    public function users()
    {
        return $this->hasMany(User::class, 'entrada');
    }

}
