@extends('layouts.fii')

@section('content')
    <div class="flex border-b">
        <div class="flex items-center px-6 py-3">
            <a href="{{ url()->previous() }}" class="border rounded-lg flex px-5 py-3">
                {{ __('Voltar') }}
            </a>
        </div>
        <div class="grow items-center px-6 py-3">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight flex px-5 py-3">
                {{ __('Alteração de FII') }}
            </h2>
        </div>
    </div>

    <form x-data method="post" action="{{ route('fiis.update', $fii->id) }}">
        @csrf
        <div class="mt-2 p-5 bg-neutral-100 w-3/4 mx-auto rounded-lg shadow-[0_5px_9px_-4px_#3b71ca] grid grid-cols-2 gap-4">


            <div class="grid grid-cols-3 items-center">
                <label class="text-right p-2" for="administradora_id">Administradora</label>
                <div class="col-span-2">
                    <select class="w-full rounded-md" name="administradora_id" id="administradora_id" >
                        @foreach ($administradoras as $administradora)
                            <option value="{{ $administradora->id }}"
                                @if ($fii->administradora_id == $administradora->id)
                                    selected="selected"
                                @endif>
                                {{ $administradora->nome }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-3 items-center">
                <label class="text-right p-2" for="tipo_id">Tipo</label>
                <div class="col-span-2">
                    <select class="w-full rounded-md" name="tipo_id" id="tipo_id" >
                        @foreach ($tipos as $tipo)
                            <option value="{{ $tipo->id }}"
                                @if ($fii->tipo_id == $tipo->id)
                                    selected="selected"
                                @endif>
                                {{ $tipo->nome }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-3 items-center">
                <label class="text-right p-2" for="segmento_id">Segmento AMBIMA</label>
                <div class="col-span-2">
                    <select class="w-full rounded-md" name="segmento_id" id="segmento_id" >
                        @foreach ($segmentos as $segmento)
                            <option value="{{ $segmento->id }}"
                                @if ($fii->segmento_id == $segmento->id)
                                    selected="selected"
                                @endif>
                                {{ $segmento->nome }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-3 items-center">
                <label class="text-right p-2" for="codigo">
                    Código
                </label>
                <div class="col-span-2">
                    <input class="w-full rounded-md" type="text" class="" name="codigo" id="codigo" value="{{ old('codigo', $fii->codigo) }}"/>
                </div>
            </div>

            <div class="grid grid-cols-3 items-center">
                <label class="text-right p-2" for="nome_pregao">
                    Nome Pregão
                </label>
                <div class="col-span-2">
                    <input class="w-full rounded-md" type="text" class="" name="nome_pregao" id="nome_pregao" value="{{ $fii->nome_pregao }}"/>
                </div>
            </div>

            <div class="grid grid-cols-3 items-center">
                <label class="text-right p-2" for="razao_social">
                    Razão social
                </label>
                <div class="col-span-2">
                    <input class="w-full rounded-md" type="text" class="" name="razao_social" id="razao_social" value="{{ $fii->razao_social }}"/>
                </div>
            </div>

            <div class="grid grid-cols-3 items-center">
                <label class="text-right p-2" for="cnpj">
                    CNPJ
                </label>
                <div class="col-span-2">
                    <input class="w-full rounded-md" type="text" class="" name="cnpj" id="cnpj" value="{{ $fii->cnpj }}"/>
                </div>
            </div>

            <div class="col-span-2">
                <div class="grid grid-cols-6 items-center">
                    <label class="text-right p-2" for="descricao">Descricao</label>
                    <textarea class="col-span-5 rounded-md" type="text" class="" name="descricao" id="descricao">{{ $fii->descricao }}</textarea>
                </div>
            </div>

            <div class="col-span-2">
                <div class="grid grid-cols-6 items-center">
                    <label class="text-right p-2" for="caracteristicas">Caracteristicas</label>
                    <textarea class="col-span-5 rounded-md" type="text" class="" name="caracteristicas" id="caracteristicas">{{ $fii->caracteristicas }}</textarea>
                </div>
            </div>

            <div class="grid grid-cols-3 items-center">
                <label class="text-right p-2" for="data_inicio">
                    Data inicio
                </label>
                <div class="col-span-2">
                    <input class="w-full rounded-md" type="text" class="" name="data_inicio" id="data_inicio" value="{{ $fii->data_inicio }}"/>
                </div>
            </div>

            <div class="grid grid-cols-3 items-center">
                <label class="text-right p-2" for="data_termino">
                    Data termino
                </label>
                <div class="col-span-2">
                    <input class="w-full rounded-md" type="text" class="" name="data_termino" id="data_termino" value="{{ $fii->data_termino }}"/>
                </div>
            </div>

            <div class="grid grid-cols-3 items-center">
                <label class="text-right p-2" for="dia_data_com">
                    Dia data com
                </label>
                <div class="col-span-2">
                    <input class="w-full rounded-md" type="text" class="" name="dia_data_com" id="dia_data_com" value="{{ $fii->dia_data_com }}"/>
                </div>
            </div>

            <div class="grid grid-cols-3 items-center">
                <label class="text-right p-2" for="taxa_de_administracao">
                    Taxa de administracao
                </label>
                <div class="col-span-2">
                    <input class="w-full rounded-md" type="text" class="" name="taxa_de_administracao" id="taxa_de_administracao" value="{{ $fii->taxa_de_administracao }}"/>
                </div>
            </div>

            <div class="grid grid-cols-3 items-center">
                <label class="text-right p-2" for="taxa_de_gestao">
                    Taxa de gestão
                </label>
                <div class="col-span-2">
                    <input class="w-full rounded-md" type="text" class="" name="taxa_de_gestao" id="taxa_de_gestao" value="{{ $fii->taxa_de_gestao }}"/>
                </div>
            </div>

            <div class="grid grid-cols-3 items-center">
                <label class="text-right p-2" for="taxa_de_performance">
                    Taxa de performance
                </label>
                <div class="col-span-2">
                    <input class="w-full rounded-md" type="text" class="" name="taxa_de_performance" id="taxa_de_performance" value="{{ $fii->taxa_de_performance }}"/>
                </div>
            </div>

            <div class="col-span-2">
                <div class="grid grid-cols-6 items-center">
                    <label class="text-right p-2" for="url_fundsexplorer">URL Funds Explorer</label>
                    <div class="col-span-5">
                        <input class="w-full rounded-md" type="text" class="" name="url_fundsexplorer" id="url_fundsexplorer" value="{{ $fii->url_fundsexplorer }}"/>
                    </div>
                </div>
            </div>

            <div class="col-span-2">
                <div class="w-full p-2">
                    <div class="flex items-center">
                        <button type="submit" class="w-2/10 mx-auto border px-6 py-3 rounded">Salvar</button>
                    </div>
                </div>
            </div>

        </div>
    </form>

@endsection
