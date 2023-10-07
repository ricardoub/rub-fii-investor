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

    <div class="mt-2 bg-neutral-100 w-3/4 mx-auto rounded-lg shadow-[0_5px_9px_-4px_#3b71ca]">

        <form method="post" action="{{ route('fiis.update', $fii->id) }}">
            @csrf

            <div class="w-full p-2">
                <div class="flex items-center">
                    <label class="flex w-40 text-right p-2" for="nome">Razão Social (Nome)</label>
                    <input class="flex-auto rounded-md" type="text" class="" name="nome" id="nome" value="{{ $fii->nome }}"/>
                </div>
            </div>

            <div class="w-full p-2">
                <div class="flex items-center">
                    <label class="flex w-40 text-right p-2" for="cnpj">   CNPJ</label>
                    <input class="flex-auto rounded-md" type="text" class="" name="cnpj" id="cnpj" value="{{ $fii->cnpj }}"/>
                </div>
            </div>

            <div class="w-full p-2">
                <div class="flex items-center">
                    <label class="flex w-40 text-right p-2" for="codigo">Nome Pregão (Código))</label>
                    <input class="flex-auto rounded-md" type="text" class="" name="codigo" id="codigo" value="{{ $fii->codigo }}"/>
                </div>
            </div>

            <div class="w-full p-2">
                <div class="flex items-center">
                    <label class="flex w-40 text-right p-2" for="segmento_id">Segmento AMBIMA</label>
                    <select class="flex-auto rounded-md" name="segmento_id" id="segmento_id" >
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

            <div class="w-full p-2">
                <div class="flex items-center">
                    <label class="flex w-40 text-right p-2" for="tipo_id">Tipo AMBIMA</label>
                    <select class="flex-auto rounded-md" name="tipo_id" id="tipo_id" >
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

            <div class="w-full p-2">
                <div class="flex items-center">
                    <label class="flex w-40 text-right p-2" for="administradora_id">Administradora</label>
                    <select class="flex-auto rounded-md" name="administradora_id" id="administradora_id" >
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

            <div class="w-full p-2">
                <div class="flex items-center">
                    <label class="flex w-40 text-right p-2" for="descricao">Descrição</label>
                    <textarea class="flex-auto rounded-md" type="text" class="" name="descricao" id="descricao">{{ $fii->descricao }}</textarea>
                </div>
            </div>

            <div class="w-full p-2">
                <div class="flex items-center">
                    <label class="flex w-40 text-right p-2" for="caracteristicas">Caracteristicas</label>
                    <textarea class="flex-auto rounded-md" type="text" class="" name="caracteristicas" id="caracteristicas">{{ $fii->caracteristicas }}</textarea>
                </div>
            </div>


            <div class="w-full p-2">
                <div class="flex items-center">
                    <button type="submit" class="w-2/10 mx-auto border px-6 py-3 rounded">Salvar</button>
                </div>
            </div>

        </form>

    </div>

@endsection
