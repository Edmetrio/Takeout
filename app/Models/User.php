<?php

namespace App\Models;

use App\Models\Models\AumentaEstoque;
use App\Models\Models\Estoque;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class User extends Authenticatable
{
    use HasFactory, Notifiable, Uuid;

    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];
    protected $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function estoques()
    {
        return $this->hasMany(Estoque::class, 'users_id');
    }

    public function aumentaestoques()
    {
        return $this->hasMany(AumentaEstoque::class);
    }
}
