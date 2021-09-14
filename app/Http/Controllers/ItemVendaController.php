<?php

namespace App\Http\Controllers;

use App\Models\Models\Artigo;
use App\Models\Models\Estado;
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
        $produto = Produto::with(['processos'])->get();
        $venda = Venda::latest()->first();
        return view('createitemvenda', compact('produto', 'venda'));
    }


    public function item(Request $request)
    {
        $venda = Venda::with('itemvendas')->latest()->first();
        $item = itemvenda::where('venda_id', $venda->id)->get();
        $historico = Historico::create([
            'users_id' => $request->users_id,
            'valor_total' => $request->valor_total,
        ]);
        foreach ($item as $i) {
            Itemhistorico::create([
                'historico_id' => $historico->id,
                'produto_id' => $i->produto_id,
                'pagamento_id' => $i->pagamento_id,
                'quantidade' => $i->quantidade,
            ]);
        }
        itemvenda::where('venda_id', $venda->id)->delete();
        Venda::where('id', $venda->id)->delete();
        $request->session()->flash('status', 'Venda Finalizada!');
        return redirect('venda');
    }

    public function store(Request $request)
    {
        $request->validate([
            'venda_id' => 'required',
            'produto_id' => 'required',
            'pagamento_id' => 'required',
            'quantidade' => 'required|numeric',
        ]);

        $item = Processo::where('produto_id', $request->produto_id)->with(['artigos'])->get();

        foreach ($item as $im) {
            $estoque = Estoque::where('artigo_id', $im->artigos->id)->with('artigos')->first();
            $diminui = $im->quantidade * $request->quantidade;
            $d = $estoque->quantidade - $diminui;
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
    public function edit($id, Request $request)
    {
        $itemvenda = itemvenda::where(['id' => $id])->first();
        $item = Processo::where('produto_id', $itemvenda->produto_id)->with(['artigos'])->get();
        foreach ($item as $a) {
            $estoque = Estoque::where(['artigo_id' => $a->artigos->id])->with(['artigos'])->first();
            $aum = $a->quantidade * $itemvenda->quantidade;
            $aumento = $aum + $estoque->quantidade;
            Estoque::where(['artigo_id' => $a->artigos->id])->update(['quantidade' => $aumento]);
        }
        $excluir = itemvenda::where(['id' => $id])->delete();
        if($excluir){
        $request->session()->flash('status', 'Item excluído com Sucesso!');
        return redirect('venda');
        }
        $request->session()->flash('status', 'Erro ao Excluir item!');
        return redirect('venda');
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
