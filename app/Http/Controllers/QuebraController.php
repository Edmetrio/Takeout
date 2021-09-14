<?php

namespace App\Http\Controllers;

use App\Models\Models\Artigo;
use App\Models\Models\Estoque;
use App\Models\Models\Quebra;
use Illuminate\Http\Request;

class QuebraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quebra = Quebra::with(['users','artigos'])->orderBy('id', 'desc')->get();
        return view('quebra', compact('quebra'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artigo = Artigo::orderBy('id', 'desc')->get();
        return view('createQuebra', compact('artigo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estoque = Estoque::where(['artigo_id' => $request->artigo_id])->first();
        if($estoque->quantidade >= $request->quantidade){
        $diminuicao = $estoque->quantidade - $request->quantidade;
        Estoque::where(['artigo_id' => $request->artigo_id])->update(['quantidade' => $diminuicao]);
        Quebra::create($request->all());

            $request->session()->flash('status', 'Quebra adicionada!');
            return redirect('quebra');
        } else {
            $request->session()->flash('status', 'Quantidade Inexistente!');
            return redirect('quebra');
        }
        
        
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
