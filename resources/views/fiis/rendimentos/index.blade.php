@extends('layouts.fii')

@section('page-header')
    <header class="w-screen bg-blue-50 px-3 py-1 flex justify-between align-center">
        <div class=" flex items-center px-6 py-3">
            <a href="{{ url()->previous() }}" class="border rounded-lg flex px-5 py-3">
                {{ __('Voltar') }}
            </a>
        </div>
        <div class="grow items-center px-6 py-3">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight flex px-5 py-3">
                {{ __('Cadastro Rendimentos') }}
            </h2>
        </div>
        <div class="flex items-center px-6 py-3">
            <a href="{{ route('rendimentos.create') }}" class="border rounded-lg flex px-5 py-3">
                {{ __('Incluir') }}
            </a>
        </div>
    </header>
@endsection

@section('content')

    <table class="mt-2 bg-neutral-100 w-6/10 mx-auto rounded-lg shadow-[0_5px_9px_-4px_#3b71ca] font-light">

        <thead class="h-10 border-b bg-neutral-200 font-medium dark:border-neutral-500 dark:bg-neutral-600">
            <tr>
                <th scope="col" class="px-6 py-4">Competencia</th>
                <th scope="col" class="px-6 py-4">FII</th>
                <th scope="col" class="px-6 py-4">Data Com</th>
                <th scope="col" class="px-6 py-4">Data Pagto</th>
                <th scope="col" class="px-6 py-4">Valor Cota</th>
                <th scope="col" class="px-6 py-4">Valor Rendimento</th>
                <th scope="col" class="px-6 py-4">Dividend Yield</th>
                <th scope="col" class="px-6 py-4"></th>
            </tr>
        </thead>

        <tbody>

            @foreach ($rendimentos as $key => $rendimento)
                @if($key % 2 == 0)
                    <tr class="border-b bg-neutral-50">
                @else
                    <tr class="border-b bg-neutral-100">
                @endif
                    <td class="px-3 py-2 text-center">{{ $rendimento->competencia }}</td>
                    <th class="px-3 py-2 text-center">{{ $rendimento->fii_codigo }}</th>
                    <td class="px-3 py-2 text-center">{{ $rendimento->data_com }}</td>
                    <td class="px-3 py-2 text-center">{{ $rendimento->data_pagamento }}</td>
                    <td class="px-3 py-2 text-center">{{ $rendimento->valor_cota }}</td>
                    <td class="px-3 py-2 text-center">{{ $rendimento->valor_rendimento }}</td>
                    <td class="px-3 py-2 text-center">{{ $rendimento->dividend_yield }}</td>
                    <td class="px-3 py-2">
                        <div class="" role="group">
                            <a href="{{ route('rendimentos.edit', $rendimento->id) }}" class="flex px-5 py-3 bg-neutral-200 hover:rounded-xl hover:bg-primary-500 hover:text-white">
                                {{ __('Alterar') }}
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach

        </tbody>

    </table>

@endsection
