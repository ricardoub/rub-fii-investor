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
                {{ __('Cadastro Administradoras de FIIs') }}
            </h2>
        </div>
        <div class="flex items-center px-6 py-3">
            <a href="{{ route('fiis.administradoras.create') }}" class="border rounded-lg flex px-5 py-3">
                {{ __('Incluir') }}
            </a>
        </div>
    </div>

    <div class="w-8/10 bg-gray-400">
        <table class="font-light">

            <thead class="h-10 border-b bg-neutral-200 font-medium dark:border-neutral-500 dark:bg-neutral-600">
                <tr>
                    <th scope="col" class="px-6 py-4">#</th>
                    <th scope="col" class="px-6 py-4">Nome</th>
                    <th scope="col" class="px-6 py-4">Cnpj</th>
                    <th scope="col" class="px-6 py-4">Telefone</th>
                    <th scope="col" class="px-6 py-4">E-mail</th>
                    <th scope="col" class="px-6 py-4">Site</th>
                    <th scope="col" class="px-6 py-4">Ações</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($fiis as $key => $fii)
                    @if($key % 2 == 0)
                        <tr class="border-b bg-neutral-50">
                    @else
                        <tr class="border-b bg-neutral-100">
                    @endif
                        <td class="px-3 py-2 text-center">{{ $fii->id }}</td>
                        <th class="px-3 py-2 text-center">{{ $fii->nome }}</th>
                        <td class="px-3 py-2">{{ $fii->cnpj }}</td>
                        <td class="px-3 py-2">{{ $fii->telefone }}</td>
                        <td class="px-3 py-2">{{ $fii->email }}</td>
                        <td class="px-3 py-2">{{ $fii->site }}</td>
                        <td class="px-3 py-2">
                            <div class="" role="group">
                                <a href="#" class="flex px-5 py-3 bg-neutral-200 hover:rounded-xl hover:bg-primary-500 hover:text-white">
                                    {{ __('Exibir') }}
                                </a>
                                <a href="#" class="flex px-5 py-3 bg-neutral-200 hover:rounded-xl hover:bg-primary-500 hover:text-white">
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
