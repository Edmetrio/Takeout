<?php

namespace App\Models\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class Estoque extends Model
{
    use HasFactory, Uuid;

    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];
    protected $primaryKey = 'users_id';

    protected $table = 'estoque';
    protected $fillable = ['users_id','artigo_id','quantidade','quantidade_minima','preco_compra'];

    public function artigos()
    {
        return $this->hasOne(Artigo::class, 'id', 'artigo_id');
    }

    public function users()
    {
        return $this->hasOne(User::class, 'id', 'users_id');
    }

}
