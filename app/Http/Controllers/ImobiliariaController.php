<?php
namespace App\Http\Controllers;

use App\Models\Imobiliaria;
use Illuminate\Http\Request;

class ImobiliariaController extends Controller

{
    
// app/Http/Controllers/ImobiliariaController.php

// app/Http/Controllers/ImobiliariaController.php

public function index(Request $request)
{
    $sort = $request->input('sort', 'asc');
    $tipoNegocio = $request->input('tipo_negocio');
    $search = $request->input('search');

    $query = Imobiliaria::query();

    if ($tipoNegocio) {
        $query->where('aluguel', $tipoNegocio);
    }

    if ($search) {
        $query->where('nome', 'LIKE', '%' . $search . '%');
    }

    $imobiliarias = $query->orderBy('preco', $sort)->get();

    return view('imobiliarias.index', compact('imobiliarias', 'sort'));
}


    public function create()
    {
        return view('imobiliarias.create');
    }

    public function store(Request $request)
    {
        $imobiliaria = new Imobiliaria();
        $imobiliaria->nome = $request->input('nome');
        $imobiliaria->endereco = $request->input('endereco');
        $imobiliaria->preco = $request->input('preco');
        $imobiliaria->aluguel = $request->input('aluguel');
        $imobiliaria->save();

        return redirect()->route('imobiliarias.index')->with('success', 'Imobiliária cadastrada com sucesso!');
    }

    public function edit($id)
    {
        $imobiliaria = Imobiliaria::findOrFail($id);
        return view('imobiliarias.edit', compact('imobiliaria'));
    }
    
    public function update(Request $request, $id)
    {
        $imobiliaria = Imobiliaria::findOrFail($id);
        $imobiliaria->nome = $request->input('nome');
        $imobiliaria->endereco = $request->input('endereco');
        $imobiliaria->preco = $request->input('preco');
        $imobiliaria->aluguel = $request->input('aluguel');
        $imobiliaria->save();
    
        return redirect()->route('imobiliarias.index')->with('success', 'Imobiliária atualizada com sucesso!');
    }
    
    public function destroy($id)
    {
        $imobiliaria = Imobiliaria::findOrFail($id);
        $imobiliaria->delete();
    
        return redirect()->route('imobiliarias.index')->with('success', 'Imobiliária excluída com sucesso!');
    }
    // app/Http/Controllers/ImobiliariaController.php

    public function getMaxPriceHouse()
    {
        $imobiliaria = Imobiliaria::orderBy('preco', 'desc')->first();
        
        return view('imobiliarias.max_price_house', compact('imobiliaria'));
    }

     
}

