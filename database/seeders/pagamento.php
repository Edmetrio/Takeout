<?php

namespace Database\Seeders;

use App\Models\Models\Estado;
use App\Models\Models\Pagamento as ModelsPagamento;
use Illuminate\Database\Seeder;

class pagamento extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelsPagamento $pagamento)
    {
        $pagamento::create([
            'id' => '1fed24c2-0cd9-4c3c-80f6-d873601fa103',
            'nome' => 'Mpesa',
        ]);

        $pagamento::create([
            'id' => 'f9587ab4-c1f1-4c4f-bb73-cad838831a6d',
            'nome' => 'Caixa',
        ]);

        $estado = Estado::create([
            'id' => '5b04868d-5dcf-400c-aee8-3b17693de11f',
            'nome' => 'on',
        ]);
    }
}
