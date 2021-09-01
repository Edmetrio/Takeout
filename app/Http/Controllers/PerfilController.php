<?php

namespace App\Http\Controllers;

use App\Models\Models\Perfil;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
        $user = User::with('perfils')->find($id);
        /* dd($user); */
        return view('perfil', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createPerfil');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* return $request->input(); */
        /* $request->validate([
            'nome' => 'required',
            'contacto' => 'required',
            'endereco' => 'required',
            'foto' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]); */

        $input = $request->all();
        $foto = time().'.'.$request->foto->extension();
        $destino =  'assets/images/perfil';
        $request->foto->move($destino, $foto);
        $input['foto'] = "$foto";

        $perfil = Perfil::create($input);
        if($perfil)
        {
            $request->session()->flash('status', 'Perfil adicionada com Sucesso!');
            return redirect('perfil');
        }
        $request->session()->flash('status', 'Erro ao adicionar Perfil!');
            return redirect('perfil');
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
        $user = User::with('perfils')->find($id);
        return view('createPerfil', compact('user'));
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
        $input = $request->all();
        $foto = time().'.'.$request->foto->extension();
        $destino =  'assets/images/perfil';
        $request->foto->move($destino, $foto);
        $input['foto'] = "$foto";

        $perfil = Perfil::where(['users_id' => $id])->update([
            'contacto' => $request->contacto,
            'endereco' => $request->endereco,
            'foto' => $foto,
        ]);
        User::where(['id' => $id])->update(['name' => $request->nome]);
        if($perfil)
        {
            $request->session()->flash('status', 'Perfil Alterado com Sucesso!');
            return redirect('perfil');
        }
        $request->session()->flash('status', 'Erro ao adicionar Perfil!');
            return redirect('perfil');
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
