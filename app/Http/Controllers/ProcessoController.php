<?php

namespace App\Http\Controllers;

use App\Models\Models\Artigo;
use App\Models\Models\Processo;
use App\Models\Models\Produto;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProcessoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $processo = Processo::with(['artigos','produtos'])->get();
        /* $processo = Produto::with(['proproart','artigos'])->get(); */
        /* dd($processo); */
        return view('processo', compact('processo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artigo = Artigo::latest()->get();
        $produto = Produto::latest()->get();
        return view('createProcesso', compact('artigo', 'produto'));
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
            'produto_id' => 'required',
            'quantidade' => 'required|numeric',
        ]);
        $processo = Processo::create($request->all());
        if ($processo) {
            $request->session()->flash('status', 'Processo adicionado!');
            return redirect('processo');
        }
        $request->session()->flash('status', 'Erro ao Adicionar!');
        return redirect('processo');
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
