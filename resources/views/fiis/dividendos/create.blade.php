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
                {{ __('Inclusão de Administradora') }}
            </h2>
        </div>
        <div class="flex items-center px-6 py-3">

        </div>
    </header>
@endsection

@section('content')

    <div class="mt-2 bg-neutral-100 w-3/4 mx-auto rounded-lg shadow-[0_5px_9px_-4px_#3b71ca]">

        <form x-data method="post" action="{{ route('dividendos.store') }}">
            @csrf

            <div class="grid grid-cols-3 items-left">
                <label class="text-right p-2" for="fii_id">Fundo Imobiliario</label>
                <div class="col-span-2">
                    <select class="w-full rounded-md" name="fii_id" id="fii_id" >
                        @if ($dy->fii_id == 0)
                            <option value="0" selected="selected">Selecione</option>
                        @endif>
                        @foreach ($fiis as $fii)
                            <option value="{{ $fii->id }}"
                                @if ($dy->fii_id == $fii->id)
                                    selected="selected"
                                @endif>
                                {{ $fii->codigo }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="p-3 items-center">
                <h2 class="w-full content-center bg-gray-300 p-3">Valor do dividendo</h2>
                <div class="grid grid-cols-5 gap-2">
                    <label class="p-2" for="valor_mes_1">Último Mes</label>
                    <label class="p-2" for="valor_mes_3">Últimos 3 Meses</label>
                    <label class="p-2" for="valor_mes_6">Últimos 6 Meses</label>
                    <label class="p-2" for="valor_mes_12">Últimos 12 Meses</label>
                    <label class="p-2" for="valor_mes_12">Desde IPO</label>
                </div>
                <div class="grid grid-cols-5 gap-2">
                    <input class="w-full text-right rounded-md" type="text" class="" name="valor_mes_1"     id="valor_mes_1"     value="{{ old('valor_mes_1',     $dy->valor_mes_1) }}"/>
                    <input class="w-full text-right rounded-md" type="text" class="" name="valor_mes_3"     id="valor_mes_3"     value="{{ old('valor_mes_3',     $dy->valor_mes_3) }}"/>
                    <input class="w-full text-right rounded-md" type="text" class="" name="valor_mes_6"     id="valor_mes_6"     value="{{ old('valor_mes_6',     $dy->valor_mes_6) }}"/>
                    <input class="w-full text-right rounded-md" type="text" class="" name="valor_mes_12"    id="valor_mes_12"    value="{{ old('valor_mes_12',    $dy->valor_mes_12) }}"/>
                    <input class="w-full text-right rounded-md" type="text" class="" name="valor_desde_ipo" id="valor_desde_ipo" value="{{ old('valor_desde_ipo', $dy->valor_desde_ipo) }}"/>
                </div>
            </div>

            <div class="p-3 items-center">
                <h2 class="w-full content-center bg-gray-300 p-3">Percentual do dividendo</h2>
                <div class="grid grid-cols-5 gap-2">
                    <label class="p-2" for="valor_mes_1">Último Mes</label>
                    <label class="p-2" for="valor_mes_3">Últimos 3 Meses</label>
                    <label class="p-2" for="valor_mes_6">Últimos 6 Meses</label>
                    <label class="p-2" for="valor_mes_12">Últimos 12 Meses</label>
                    <label class="p-2" for="taxa_de_gestao">Desde o IPO</label>

                </div>
                <div class="grid grid-cols-5 gap-2">
                    <input class="w-full text-right rounded-md" type="text" class="" name="percentual_mes_1"     id="percentual_mes_1"     value="{{ old('percentual_mes_1',$dy->percentual_mes_1) }}"/>
                    <input class="w-full text-right rounded-md" type="text" class="" name="percentual_mes_3"     id="percentual_mes_3"     value="{{ old('percentual_mes_1',$dy->percentual_mes_3) }}"/>
                    <input class="w-full text-right rounded-md" type="text" class="" name="percentual_mes_6"     id="percentual_mes_6"     value="{{ old('percentual_mes_1',$dy->percentual_mes_6) }}"/>
                    <input class="w-full text-right rounded-md" type="text" class="" name="percentual_mes_12"    id="percentual_mes_12"    value="{{ old('percentual_mes_1',$dy->percentual_mes_12) }}"/>
                    <input class="w-full text-right rounded-md" type="text" class="" name="percentual_desde_ipo" id="percentual_desde_ipo" value="{{ old('percentual_mes_1',$dy->percentual_desde_ipo) }}"/>

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