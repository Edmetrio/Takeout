<?php

namespace App\Http\Controllers;

use App\Models\Models\Artigo;
use App\Models\Models\Estoque;
use App\Models\Models\Historico;
use App\Models\Models\Itemhistorico;
use App\Models\Models\itemvenda;
use App\Models\Models\Processo;
use App\Models\Models\Produto;
use App\Models\Models\Venda;
use Illuminate\Http\Request;

class ItemVendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produto = Produto::with('processos')->get();
        $venda = Venda::latest()->first();
        return view('createitemvenda', compact('produto', 'venda'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function itemhistorico($i)
    {
    }

    public function item(Request $request)
    {
        $venda = Venda::with('itemvendas')->latest()->first();
        $item = itemvenda::where('venda_id', $venda->id)->get();
        $historico = Historico::create([
            'venda_id' => $venda->id,
            'pagamento_id' => $request->pagamento_id,
            'valor_total' => $request->valor_total,
        ]);
        foreach ($item as $i) {
            Itemhistorico::create([
                'historico_id' => $historico->id,
                'produto_id' => $i->produto_id,
                'quantidade' => $i->quantidade,
            ]);
        }
        Venda::where('id', $venda->id)->delete();
        itemvenda::where('venda_id', $venda->id)->delete();
        $request->session()->flash('status', 'Venda Finalizada!');
        return redirect('venda');
    }

    public function store(Request $request)
    {
        $request->validate([
            'venda_id' => 'required',
            'produto_id' => 'required',
            'quantidade' => 'required|numeric',
        ]);

        $item = Processo::where('produto_id', $request->produto_id)->with(['artigos'])->get();

        foreach ($item as $im) {
            $estoque = Estoque::where('artigo_id', $im->artigos->id)->first();
            $d = $estoque->quantidade - $request->quantidade;
            if ($estoque->quantidade >= $request->quantidade) {
                Estoque::where(['artigo_id' => $im->artigos->id])->update(['quantidade' => $d]);
            } else {
                $request->session()->flash('status', 'Quantidade Inexistente!');
                return redirect('venda');
            }
        }
        $item = itemvenda::create($request->all());
        if ($item) {
            $request->session()->flash('status', 'Item adicionado com Sucesso!');
            return redirect('venda');
        }
        $request->session()->flash('status', 'Erro ao Adicionar!');
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
