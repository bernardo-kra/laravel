<?php

namespace App\Http\Controllers;

use App\Models\Estoque;
use Illuminate\Http\Request;

class EstoqueController extends Controller
{
    public function index()
    {
        $lista = Estoque::all();
        return view('estoque.index',[
            'lista' => $lista,
        ]);
    }
    public function adicionar(Request $form)
    {
        if ($form->method() == 'POST') {
            $dados = $form->validate([
                'nome' => 'required',
                'quantidade' => 'required',
            ]);

            Estoque::create($dados);

            return redirect('estoque');
        }
        return view('estoque/adicionar');
    }
}
