<?php

namespace App\Http\Controllers;

use App\Models\Models\itemvenda;
use App\Models\Models\Venda;
use Illuminate\Http\Request;

class VendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $venda = Venda::latest()->first();
        $item = itemvenda::with(['produtos'])->latest()->get();
        $t = 0;
        foreach($item as $i)
        {
            $i->subtotal = $i->quantidade * $i->produtos->preco;
            $t += $i->subtotal;
        }     
        $total = $t;   
        return view('venda', compact('venda','item','total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('venda');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $venda = Venda::create([
            'users_id' => $request->users_id,
        ]);
        if ($venda) {
            $request->session()->flash('status', 'Venda Iniciada!');
            return redirect('venda');
        }
            $request->session()->flash('status', 'Erro na Venda!');
            return redirect('venda');
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
