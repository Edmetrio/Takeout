<?php

namespace App\Models\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;
class Contapagar extends Model
{
    use HasFactory, Uuid;

    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];

    protected $table = 'contapagar';
    protected $fillable = ['users_id','estado_id','tipo_id','valor','descricao','estado_id'];

    public function users()
    {
        return $this->hasOne(User::class, 'id', 'users_id');
    }

    public function tipos()
    {
        return $this->hasOne(Tipo::class, 'id', 'tipo_id');
    }

    public function estados()
    {
        return $this->hasOne(Estado::class, 'id', 'estado_id');
    }
}
