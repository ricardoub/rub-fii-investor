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

        <form x-data method="post" action="{{ route('administradoras.store') }}">
            @csrf

            <div class="w-full p-2">
                <div class="flex items-center">
                    <label class="flex w-40 text-right p-2" for="nome">Nome</label>
                    <input class="flex-auto rounded-md" type="text" class="" name="nome" id="nome" value="{{ $administradora->nome }}"/>
                </div>
            </div>

            <div class="w-full p-2">
                <div class="flex items-center">
                    <label class="flex w-40 text-right p-2" for="cnpj">CNPJ</label>
                    <input x-mask="99.999.999/9999-99" class="flex-auto rounded-md" type="text" class="" name="cnpj" id="cnpj" value="{{ $administradora->cnpj }}"/>
                </div>
            </div>

            <div class="w-full p-2">
                <div class="flex items-center">
                    <label class="flex w-40 text-right p-2" for="telefone">Telefone</label>
                    <input x-mask="(99)9999-9999" class="flex-auto rounded-md" type="text" class="" name="telefone" id="telefone" value="{{ $administradora->telefone }}"/>
                </div>
            </div>

            <div class="w-full p-2">
                <div class="flex items-center">
                    <label class="flex w-40 text-right p-2" for="email">Email</label>
                    <input class="flex-auto rounded-md" type="text" class="" name="email" id="email" value="{{ $administradora->email }}" />
                </div>
            </div>

            <div class="w-full p-2">
                <div class="flex items-center">
                    <label class="flex w-40 text-right p-2" for="site">Site</label>
                    <input class="flex-auto rounded-md" type="text" class="" name="site" id="site" value="{{ $administradora->site }}" />
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
