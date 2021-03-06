<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class Itemhistorico extends Model
{
    use HasFactory, Uuid;

    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];
    protected $primaryKey = 'id';

    protected $table = 'itemhistorico';
    protected $fillable = ['historico_id','produto_id','quantidade','pagamento_id'];

    public function produtos()
    {
        return $this->hasOne(Produto::class, 'id','produto_id');
    }

    public function historicos()
    {
        return $this->hasOne(Historico::class, 'id', 'historico_id');
    }
}
