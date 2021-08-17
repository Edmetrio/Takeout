<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class Processo extends Model
{
    use HasFactory, Uuid;

    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];
    protected $primaryKey = 'id';

    protected $table = 'processo';
    protected $fillable = ['artigo_id','produto_id','quantidade'];

    public function artigos()
    {
        return $this->hasOne(Artigo::class, 'id', 'artigo_id');
    }

    public function produtos()
    {
        return $this->hasOne(Produto::class, 'id', 'produto_id');
    }
}
