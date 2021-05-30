<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index () {
        $fornecedores = [
            0 => ['nome' => 'Fornecedor 1', 'status' => 'N'],
            1 => ['nome' => 'Fornecedor 2', 'status' => 'S', 'CNPJ' => 611565651]
        ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
