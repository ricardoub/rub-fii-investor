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
                {{ __('Inclusão de FII') }}
            </h2>
        </div>
    </div>

    <div class="mt-2 bg-neutral-100 w-2/3 mx-auto rounded-lg shadow-[0_5px_9px_-4px_#3b71ca]">

        <form method="post" action="{{ route('fiis.store') }}">
            @csrf

            <div class="w-full p-2">
                <div class="flex items-center">
                    <label class="flex w-40 text-right p-2" for="codigo">Código</label>
                    <input class="flex-auto rounded-md" type="text" class="" name="codigo" id="codigo" />
                </div>
            </div>

            <div class="w-full p-2">
                <div class="flex items-center">
                    <label class="flex w-40 text-right p-2" for="nome"> Nome </label>
                    <input class="flex-auto rounded-md" type="text" class="" name="nome" id="nome" />
                </div>
            </div>

            <div class="w-full p-2">
                <div class="flex items-center">
                    <label class="flex w-40 text-right p-2" for="tipo"> Tipo </label>
                    <input class="flex-auto rounded-md" type="text" class="" name="tipo" id="tipo" />
                </div>
            </div>

            <div class="w-full p-2">
                <div class="flex items-center">
                    <label class="flex w-40 text-right p-2" for="segmento">Segmento</label>
                    <input class="flex-auto rounded-md" type="text" class="" name="segmento" id="segmento" />
                </div>
            </div>

            <div class="w-full p-2">
                <div class="flex items-center">
                    <label class="flex w-40 text-right p-2" for="descricao">Descrição</label>
                    <textarea class="flex-auto rounded-md" type="text" class="" name="descricao" id="descricao">
                    </textarea>
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
