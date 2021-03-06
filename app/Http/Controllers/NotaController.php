<?php

namespace App\Http\Controllers;

use App\Models\Models\Nota;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* $nota = Nota::with(['users'])->orderBy('id', 'desc')->get();
        $nota = Nota::with(['users'])->orderBy('id', 'desc')
        ->whereRaw("DATE(created_at) = '" . date('Y-m-d'). "'")
        ->get(); */

        $nota = Nota::with(['users'])->orderBy('id', 'desc')
        /* ->whereMonth('created_at', now()->month) */
        ->whereDay('created_at', now()->day)
        ->get();

        return view('nota', compact('nota'));
    }

    public function pesquisar(Request $request)
    {
        $nota = Nota::with(['users'])->orderBy('id', 'desc')
        ->whereDate('created_at', '>=', $request->inicio)
        ->whereDate('created_at', '<=', $request->fim)
        ->get();

        return view('nota', compact('nota'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createNota');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nota = Nota::create($request->all());
        if ($nota) {
            $request->session()->flash('status', 'Nota adicionada!');
            return redirect('nota');
        }
        $request->session()->flash('status', 'Erro ao Adicionar!');
        return redirect('nota');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Nota::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nota = Nota::where(['id' => $id])->first();
        return view('createNota', compact('nota'));
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
        $nota = Nota::where(['id' => $id])->update($request->all());
        if ($nota) {
            $request->session()->flash('status', 'Nota actuaizada!');
            return redirect('nota');
        }
        $request->session()->flash('status', 'Erro ao actualizar!');
        return redirect('nota');
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
