<?php

namespace App\Http\Controllers;

use App\Models\Models\Artigo;
use App\Models\Models\Estoque;
use Illuminate\Http\Request;

class EstoqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estoque = Estoque::with(['artigos'])->get();
        return view('Estoque', compact('estoque'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artigo = Artigo::latest()->get();
        return view('createEstoque', compact('artigo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        /* $request->validate([
            'nome' => 'required',
            'esatdo' => 'required',
            'artigo_id' => 'required',
            'users_id' => 'required',
            'quantidade' => 'required',
            'quantidade_minima' => 'required|numeric',
            'preco_compra' => 'required|numeric',
        ]); */
        /* return $request->all(); */
        $artigo = Artigo::create([
            'nome' => $request->nome,
            'estado' => $request->estado
        ]);
        $estoque = Estoque::create([
            'artigo_id' => $artigo->id,
            'users_id' => $request->users_id,
            'quantidade' => $request->quantidade,
            'quantidade_minima' => $request->quantidade_minima,
            'preco_compra' => $request->preco_compra,
        ]);
        if ($estoque) {
            $request->session()->flash('status', 'Item Estoque adicionado com Sucesso!');
            return redirect('estoque');
        }
        $request->session()->flash('status', 'Erro ao Adicionar!');
        return redirect('estoque');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
