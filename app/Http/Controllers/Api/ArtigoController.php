<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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
        return Artigo::latest()->get();
    }

    public function store(Request $request)
    {
        $artigo = Artigo::create($request->all());
        if($artigo)
        {
            return ["resultado"=>"Artigo criado com sucesso"];
        } else 
        {
            return ["resultado"=>"Erro ao Adicionar"];
        }
    }

    public function show($id)
    {
        return Artigo::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $artigo = Artigo::findOrFail($id);
        $artigo->update($request->all());
        if($artigo)
        {
            return ["resultado"=>"Artigo actualizado com sucesso"];
        } else 
        {
            return ["resultado"=>"Erro ao Actualizar"];
        }
    }

    public function destroy($id)
    {
        $artigo = Artigo::findOrFail($id);
        $artigo->delete();
        if($artigo)
        {
            return ["resultado"=>"Artigo actualizado com sucesso"];
        } else 
        {
            return ["resultado"=>"Erro ao Actualizar"];
        }
    }
}
