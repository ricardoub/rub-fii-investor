@extends('layouts.fii')

@section('page-header')

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
    
@endsection

@section('content')

    <div class="w-full">
        @include('fiis.partials.fiis-list1')
    </div>

@endsection
