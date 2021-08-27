<?php

namespace App\Http\Controllers;

use App\Models\Models\Contapagar;
use App\Models\Models\Tipo;
use Illuminate\Http\Request;

class ContapagarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contapagar = Contapagar::with(['users','tipos','estados'])->get();
        return view('contapagar', compact('contapagar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipo = Tipo::latest()->get();
        return view('createContapagar', compact('tipo'));
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
            'users_id' => 'required',
            'tipo_id' => 'required',
            'valor' => 'required',
            'descricao' => 'required',
            'estado_id' => 'required',
        ]);

        $conta = Contapagar::create($request->all());
        if($conta)
        {
        $request->session()->flash('status', 'Conta a pagar adicionada com Sucesso!');
            return redirect('contapagar');
        }
        $request->session()->flash('status', 'Erro ao Adicionar');
        return redirect('contapagar');
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
