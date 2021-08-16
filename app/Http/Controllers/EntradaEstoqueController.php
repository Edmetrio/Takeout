<?php

namespace App\Http\Controllers;

use App\Models\Models\Artigo;
use App\Models\Models\AumentaEstoque;
use App\Models\Models\Estoque;
use Illuminate\Http\Request;

class EntradaEstoqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aumento = AumentaEstoque::with(['users','artigos'])->get();
        /* dd($aumento); */
        return view('Aumento', compact('aumento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artigo = Artigo::latest()->get();
        return view('createEntradaEstoque', compact('artigo'));
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
            'artigo_id' => 'required',
            'quantidade' => 'required|numeric',
            'users_id' => 'required',
            'preco_compra' => 'required|numeric',
        ]);

        $entrada = AumentaEstoque::create($request->all());
        if ($entrada) {
            $aumento = Estoque::where('artigo_id', $request->artigo_id)->first();
            $estoque = $aumento->quantidade + $request->quantidade;
            Estoque::where(['artigo_id' => $request->artigo_id])->update(['quantidade' => $estoque, 'preco_compra' => $request->preco_compra]);
            $request->session()->flash('status', 'Aumentado no estoque!');
            return redirect('aumenta/create');
        }
        $request->session()->flash('status', 'Erro ao Aumentar!');
        return redirect('aumenta/create');
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
