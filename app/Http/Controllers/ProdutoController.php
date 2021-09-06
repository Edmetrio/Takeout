<?php

namespace App\Http\Controllers;

use App\Models\Models\Categoria;
use App\Models\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* $produto = Produto::with('categorias')->latest()->get(); */
        $categoria = Categoria::with('produtos')->get();
        return view('produto', compact('categoria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria = Categoria::all();

        return view('createProduto', compact('categoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* return $request->all(); */
        $request->validate([
            'categoria_id' => 'required',
            'nome' => 'required|unique:produto',
            'icon' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'preco' => 'required|numeric',
        ]);

        $input = $request->all();
        $icon = time().'.'.$request->icon->extension();
        $destino =  'assets/images/produtos';
        $request->icon->move($destino, $icon);
        $input['icon'] = "$icon";
        
        $produto = Produto::create($input);
        if($produto)
        {
            $request->session()->flash('status', 'Produto adicionado com Sucesso!');
            return redirect('produto');
        }
        $request->session()->flash('status', 'Erro ao Adicionar!');
        return redirect('produto');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = Produto::with('categorias')->find($id);
        /* dd($produto); */
        $categoria = Categoria::all();
        /* dd($categoria); */
        return view('createProduto', compact('produto', 'categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {

        /* $request->validate([
            'categoria_id' => 'required',
            'nome' => 'required|unique:produto',
            'icon' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'preco' => 'required|numeric',
        ]); */

        $input = $request->all();

        $icon = time().'.'.$request->icon->extension();
        $destino =  'assets/images/produtos';
        $request->icon->move($destino, $icon);
        $input['icon'] = "$icon";

        $cat = $produto->update($input);
        if ($cat) {
            $request->session()->flash('status', 'Produto Actualizado com Sucesso!');
            return redirect('produto');
        }
        $request->session()->flash('status', 'Erro ao Actualizar!');
        return redirect('produto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
