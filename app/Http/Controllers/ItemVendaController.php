<?php

namespace App\Http\Controllers;

use App\Models\Models\itemvenda;
use App\Models\Models\Produto;
use App\Models\Models\Venda;
use Illuminate\Http\Request;

class ItemVendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produto = Produto::with('processos')->get();
        $venda = Venda::latest()->first();
        /* dd($produto); */
        return view('createitemvenda', compact('produto', 'venda'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'venda_id' => 'required',
            'produto_id' => 'required',
            'quantidade' => 'required|numeric',
        ]);

        $item = itemvenda::create($request->all());
        if ($item) {
            $request->session()->flash('status', 'Item adicionado com Sucesso!');
            return redirect('venda');
        }
            $request->session()->flash('status', 'Erro ao Adicionar!');
            return redirect('venda');
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
