<?php

namespace App\Http\Controllers;

use App\Models\Models\Artigo;
use Illuminate\Http\Request;

class ArtigoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artigo = Artigo::latest()->paginate(10);
        return view('artigo', compact('artigo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createartigo');
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
            'nome' => 'required|unique:artigo',
            'estado' => 'required',
        ]);
        $artigo = Artigo::create($request->all());
        if($artigo)
        {
            $request->session()->flash('status', 'Artigo adicionada com Sucesso!');
            return redirect('artigo'); 
        }
        $request->session()->flash('status', 'Artigo Actualizado com Sucesso!');
            return redirect('artigo');

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
        $artigo = Artigo::findorfail($id);
        return view('createartigo', compact('artigo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artigo $artigo)
    {
        $request->validate([
            'nome' => 'required|unique:artigo',
        ]);
        $art = $artigo->update($request->all());
        if($art)
        {
            $request->session()->flash('status', 'Artigo Actualizado com Sucesso!');
            return redirect('artigo');
        }
        $request->session()->flash('status', 'Erro ao Actualizar Artigo');
            return redirect('artigo');
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
