@extends('layouts.fii')

@section('content')

    <div class="flex border-b">
        <div class=" flex items-center px-6 py-3">
            <a href="{{ url()->previous() }}" class="border rounded-lg flex px-5 py-3">
                {{ __('Voltar') }}
            </a>
        </div>
        <div class="grow items-center px-6 py-3">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight flex px-5 py-3">
                {{ __('Cadastro de FIIs') }}
            </h2>
        </div>
        <div class="flex items-center px-6 py-3">
            <a href="{{ route('fiis.create') }}" class="border rounded-lg flex px-5 py-3">
                {{ __('Incluir') }}
            </a>
        </div>
    </div>

    <div class="w-8/10 bg-gray-400">
        <table class="font-light">

            <thead class="h-10 border-b bg-neutral-300 font-medium dark:border-neutral-500 dark:bg-neutral-600">
                <tr>
                    <th scope="col" class="px-6 py-4">#</th>
                    <th scope="col" class="px-6 py-4">Codigo</th>
                    <th scope="col" class="px-6 py-4">Nome</th>
                    <th scope="col" class="px-6 py-4">Tipo</th>
                    <th scope="col" class="px-6 py-4">Segmento</th>
                    <th scope="col" class="px-6 py-4">Administradora</th>
                    <th scope="col" class="px-6 py-4">Dia com</th>
                    <th scope="col" class="px-6 py-4">Descrição</th>
                    <th scope="col" class="px-6 py-4">Ações</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($fiis as $fii)
                    <tr class="border-b bg-neutral-200">
                        <td class="px-3 py-2 text-center">{{ $fii->id }}</td>
                        <th class="px-3 py-2 text-center">{{ $fii->codigo }}</th>
                        <td class="px-3 py-2">{{ $fii->nome }}</td>
                        <td class="px-3 py-2">{{ $fii->tipo->nome }}</td>
                        <td class="px-3 py-2">{{ $fii->segmento->nome }}</td>
                        <td class="px-3 py-2">{{ $fii->administradora->nome }}</td>
                        <td class="px-3 py-2">{{ $fii->dia_data_com }}</td>
                        <td class="px-3 py-2">{!! Str::limit($fii->descricao, 255, ' ...') !!}</td>
                        <td class="px-3 py-2">
                            <div class="" role="group">
                                <a href="{{ route('fiis.index') }}" class="flex px-5 py-3 bg-neutral-100 hover:rounded-xl hover:bg-primary-500 hover:text-white">
                                    {{ __('Exibir') }}
                                </a>
                                <a href="{{ route('fiis.index') }}" class="flex px-5 py-3 bg-neutral-100 hover:rounded-xl hover:bg-primary-500 hover:text-white">
                                    {{ __('Alterar') }}
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach

            </tbody>

        </table>
    </div>






@endsection
