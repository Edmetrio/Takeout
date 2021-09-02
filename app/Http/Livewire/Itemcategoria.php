<?php

namespace App\Http\Livewire;

use App\Models\Models\Venda;
use App\Models\Models\Categoria;
use App\Models\Models\Pagamento;
use App\Models\Models\Produto;
use Livewire\Component;

class itemcategoria extends Component
{

    public $categorias;
    public $produtos;
    public $vendas;
    public $pagamento;

    public $selectedCategoria = null;

    public function mount()
    {
        $this->categorias = Categoria::all();
        $this->vendas = Venda::orderBy('id', 'desc')->first();
        $this->pagamento = Pagamento::orderBy('id', 'desc')->get();

        $this->produtos = collect();
    }

    public function render()
    {
        return view('livewire.itemcategoria');
    }

    public function updatedSelectedCategoria($categoria)
    {
        if(!is_null($categoria))
        {
            $this->produtos = Produto::where('categoria_id', $categoria)->get();
        }
    }
}
