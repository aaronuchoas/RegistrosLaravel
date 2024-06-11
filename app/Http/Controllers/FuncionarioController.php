<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function index() {
        $funcionarios = Funcionario::all();
        return view('funcionarios.index', compact('funcionarios'));
    }

    public function create() {
        return view('funcionarios.create');
    }

    public function store(Request $request) {
        Funcionario::create($request->all());
        return redirect()->route('funcionarios.index');
    }

    public function edit($id) {
        $funcionarios = Funcionario::find($id);
        return view('funcionarios.edit', compact('funcionarios'));
    }

    public function update(Request $request, $id) {
        $funcionarios = Funcionario::find($id);
        $funcionarios->update($request->all());
        return redirect()->route('funcionarios.index');
    }

    public function destroy($id) {
        $funcionarios = Funcionario::find($id);
        $funcionarios->delete();
        return redirect()->route('funcionarios.index');
    }
}
