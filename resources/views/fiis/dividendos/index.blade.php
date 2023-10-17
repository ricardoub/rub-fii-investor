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
                {{ __('Cadastro Dividendos') }}
            </h2>
        </div>
        <div class="flex items-center px-6 py-3">
            <a href="{{ route('dividendos.create') }}" class="border rounded-lg flex px-5 py-3">
                {{ __('Incluir') }}
            </a>
        </div>
    </header>
@endsection

@section('content')

@include('fiis.partials.dividendos-list1')

@endsection
