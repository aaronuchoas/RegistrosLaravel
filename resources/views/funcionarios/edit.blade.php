<!-- resources/views/funcionarios/show.blade.php -->

@extends('layouts.app')

@section('slot')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800">
                    <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-6">Editar Funcionario</h1>

                    <form action="{{ route('funcionarios.update', $funcionario->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="nome" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nome:</label>
                            <input type="text" name="nome" id="nome" class="form-input mt-1 block w-full" value="{{ $funcionario->nome }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email:</label>
                            <input type="email" name="email" id="email" class="form-input mt-1 block w-full" value="{{ $funcionario->email }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="cargo" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Cargo:</label>
                            <input type="text" name="cargo" id="cargo" class="form-input mt-1 block w-full" value="{{ $funcionario->cargo }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="data_contratacao" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Cargo:</label>
                            <input type="text" name="data_contratacao" id="data_contratacao" class="form-input mt-1 block w-full" value="{{ $funcionario->data_contratacao }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="telefone" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Telefone:</label>
                            <input type="text" name="telefone" id="telefone" class="form-input mt-1 block w-full" value="{{ $funcionario->telefone }}" required>
                        </div>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Atualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
