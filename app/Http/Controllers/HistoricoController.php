<?php

namespace App\Http\Controllers;

use App\Models\Models\Categoria;
use App\Models\Models\Historico;
use App\Models\Models\Itemhistorico;
use App\Models\Models\Produto;
use Illuminate\Http\Request;

class HistoricoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoria = Itemhistorico::with(['produtos','historicos'])
        ->whereDay('created_at', now()->day)
        ->get();

        $historico = Historico::orderBy('id', 'desc')->get();

        $total =0.0;
        foreach($categoria as $c)
        {
            $total += $c->quantidade;
        }
        $subtotal = $total;


        if(isset($categoria))
        {
        return view('historico', compact('categoria','historico'));
        }
        return view('historico', compact('categoria','subtotal','historico'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $categoria = Itemhistorico::with(['produtos'])->orderBy('id', 'desc')
        ->whereDate('created_at', '>=', $request->inicio)
        ->whereDate('created_at', '<=', $request->fim)
        ->get();
        
        return view('historico', compact('categoria'));
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
