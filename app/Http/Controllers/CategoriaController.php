<?php

namespace App\Http\Controllers;

use App\Models\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoria = Categoria::latest()->paginate(6);
        return view('categoria', compact('categoria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createCategoria');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validacao = $request->validate([
            'nome' => 'required|unique:categoria',
            'icon' => 'required',
            'estado' => 'required',
        ]);
        if ($validacao) {
            Categoria::create($request->all());

            $request->session()->flash('status', 'Categoria adicionada com Sucesso!');
            return redirect('categoria');
        }
        $request->session()->flash('status', $validacao);
        return redirect('categoria');
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
        $categoria = Categoria::find($id);
        return view('createCategoria', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $categoria)
    {
        /* return $request->all(); */
        $request->validate([
            'nome' => 'required|unique:categoria',
            'icon' => 'required',
            'estado' => 'required',
        ]);

        $categoria->update($request->all());
        $request->session()->flash('status', 'Categoria Actualizado com Sucesso!');
                    return redirect('categoria');  
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
