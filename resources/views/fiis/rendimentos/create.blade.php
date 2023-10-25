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
                {{ __('Inclusão de Rendimento') }}
            </h2>
        </div>
        <div class="flex items-center px-6 py-3">

        </div>
    </header>
@endsection

@section('content')

    <div class="mt-2 bg-neutral-100 w-3/4 mx-auto rounded-lg shadow-[0_5px_9px_-4px_#3b71ca]">

        <form x-data method="post" action="{{ route('rendimentos.store') }}">
            @csrf

            <div class="grid grid-cols-10 items-center p-3">
                <div class="col-span-6 grid grid-cols-10 gap-2">
                    <label class="col-span-3 text-right p-2" for="fii_id">Fundo Imobiliario</label>
                    <div class="col-span-7">
                        <select class="w-full rounded-md" name="fii_id" id="fii_id" >
                            @if ($rendimento->fii_id == 0)
                                <option value="0" selected="selected">Selecione</option>
                            @endif>
                            @foreach ($fiis as $fii)
                                <option value="{{ old('id', $fii->id) }}"
                                    @if ($rendimento->fii_id == $fii->id)
                                        selected="selected"
                                    @endif>
                                    {{ $fii->codigo }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-span-4 grid grid-cols-10 gap-2">
                    <label class="col-span-3 text-right p-2" for="fii_id">Competencia</label>
                    <input autofocus x-mask="999999" class="col-span-7 rounded-md p-2" type="text" name="competencia" id="competencia" value="{{ old('competencia', $rendimento->competencia) }}"/>
                </div>
            </div>

            <div class="p-3 items-center">
                <h2 class="w-full content-center bg-gray-300 p-3">Valor do dividendo</h2>
                <div class="grid grid-cols-5 gap-4">
                    <label class="p-2" for="data_com">Data com</label>
                    <label class="p-2" for="data_pagamento">Data pagto</label>
                    <label class="p-2" for="valor_cota">Valor cota</label>
                    <label class="p-2" for="valor_rendimento">Rendimento</label>
                    <label class="p-2" for="dividend_yield">Dividend Yield</label>
                </div>
                <div class="grid grid-cols-5 gap-4">
                    <div class="grid grid-cols-10 gap-1 items-center">
                        <input x-mask="99/99/9999" class="col-span-8 text-right rounded-md" type="text" name="data_com" id="data_com"
                            value="{{ old('data_com', old('data_com', $rendimento->data_com ?? '')) }}"/>
                        <span class="col-span-2 text-left text-gray-500"></span>
                    </div>
                    <div class="grid grid-cols-10 gap-1 items-center"><input x-mask="99/99/9999" class="col-span-8 text-right rounded-md" type="text" name="data_pagamento"   id="data_pagamento"   value="{{ old('data_pagamento',   old('data_pagamento', $rendimento->data_pagamento)) }}"/><span class="col-span-2 text-left text-gray-500"></span></div>
                    <div class="grid grid-cols-10 gap-1 items-center"><input class="col-span-8 text-right rounded-md" type="text" name="valor_cota"       id="valor_cota"       value="{{ old('valor_cota',       old('valor_cota', $rendimento->valor_cota)) }}"/><span class="col-span-2 text-left text-gray-500">R$</span></div>
                    <div class="grid grid-cols-10 gap-1 items-center"><input class="col-span-8 text-right rounded-md" type="text" name="valor_rendimento" id="valor_rendimento" value="{{ old('valor_rendimento', old('valor_rendimento', $rendimento->valor_rendimento)) }}"/><span class="col-span-2 text-left text-gray-500">R$</span></div>
                    <div class="grid grid-cols-10 gap-1 items-center"><input class="col-span-8 text-right rounded-md" type="text" name="dividend_yield"   id="dividend_yield"   value="{{ old('dividend_yield',   old('dividend_yield', $rendimento->dividend_yield)) }}"/><span class="col-span-2 text-left text-gray-500">%</span></div>
                </div>
            </div>

            <div class="w-full p-2">
                <div class="flex items-center">
                    <button type="submit" class="w-2/10 mx-auto border px-6 py-3 rounded bg-blue-100 hover:bg-blue-200 ">Salvar</button>
                </div>
            </div>

        </form>

    </div>

@endsection
