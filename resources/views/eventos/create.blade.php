@extends('layouts.app')

@section('title', 'Criar Evento — FalaQ')

@section('content')
<div class="min-h-screen bg-gray-100 flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-2xl w-full mx-auto bg-white p-6 sm:p-8 rounded-lg shadow-md">
        
        <div class="mb-6 border-b pb-4">
            <h1 class="text-2xl font-bold text-gray-800">💬 Criar Novo Evento</h1>
            <p class="text-sm text-gray-600 mt-1">Preencha as informações abaixo para cadastrar o evento.</p>
        </div>

        <form action="{{ route('eventos.store') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label for="titulo" class="block text-sm font-semibold text-gray-700 mb-1">
                    Título do Evento
                </label>
                <input 
                    type="text" 
                    name="titulo" 
                    id="titulo" 
                    value="{{ old('titulo') }}" 
                    required 
                    placeholder="Ex: Workshop de Laravel"
                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-md text-gray-900 text-sm shadow-sm placeholder-gray-400 focus:outline-none focus:bg-white focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition duration-150 ease-in-out @error('titulo') border-red-500 @enderror">
                @error('titulo')
                    <p class="mt-1 text-xs text-red-600 font-medium">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="descricao" class="block text-sm font-semibold text-gray-700 mb-1">
                    Descrição do Evento
                </label>
                <textarea 
                    name="descricao" 
                    id="descricao" 
                    rows="4" 
                    required 
                    placeholder="Detalhes sobre o evento..."
                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-md text-gray-900 text-sm shadow-sm placeholder-gray-400 focus:outline-none focus:bg-white focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition duration-150 ease-in-out resize-y @error('descricao') border-red-500 @enderror">{{ old('descricao') }}</textarea>
                @error('descricao')
                    <p class="mt-1 text-xs text-red-600 font-medium">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="data_evento" class="block text-sm font-semibold text-gray-700 mb-1">
                    Data do Evento
                </label>
                <input 
                    type="date" 
                    name="data_evento" 
                    id="data_evento" 
                    value="{{ old('data_evento') }}" 
                    required 
                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-md text-gray-900 text-sm shadow-sm focus:outline-none focus:bg-white focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition duration-150 ease-in-out @error('data_evento') border-red-500 @enderror">
                @error('data_evento')
                    <p class="mt-1 text-xs text-red-600 font-medium">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-end space-x-3 pt-4 border-t border-gray-200">
                <a 
                    href="{{ route('eventos.index') }}" 
                    class="px-4 py-2 bg-gray-200 text-gray-700 text-sm font-medium rounded-md hover:bg-gray-300 transition duration-150">
                    Cancelar
                </a>
                <button 
                    type="submit" 
                    class="px-4 py-2 bg-blue-600 text-white text-sm font-semibold rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-150">
                    Criar Evento
                </button>
            </div>
        </form>

    </div>
</div>
@endsection