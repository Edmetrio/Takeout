<?php

namespace App\Http\Livewire;

use App\Models\Models\Categoria;
use App\Models\Models\Produto;
use Livewire\Component;

class Venda extends Component
{

    public $categorias;
    public $produtos;

    public $selectedCategoria = null;

    public function mount()
    {
        $this->categorias = Categoria::all();
        $this->produtos = collect();
    }

    public function render()
    {
        return view('livewire.venda');
    }

    public function updatedSelectedCategoria($categoria)
    {
        if(!is_null($categoria))
        {
            $this->produtos = Produto::where('categoria_id', $categoria)->get();
        }
    }
}
