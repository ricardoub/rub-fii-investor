<table class="mt-2 bg-neutral-100 w-6/10 mx-auto rounded-lg shadow-[0_5px_9px_-4px_#3b71ca] font-light">

    <thead class="h-10 border-b bg-neutral-200 font-medium dark:border-neutral-500 dark:bg-neutral-600">
        <tr>
            <th scope="col" class="px-6 py-4" colspan="3"></th>
            <th scope="col" class="px-6 py-4" colspan="5">Dividendo</th>
            <th scope="col" class="px-6 py-4" colspan="5">Percentual</th>
            <th scope="col" class="px-6 py-4" colspan="1"></th>

        </tr>
        <tr>
            <th scope="col" class="px-6 py-4">#</th>
            <th scope="col" class="text-center px-6 py-4">Competencia</th>
            <th scope="col" class="text-center px-6 py-4">FII</th>
            <th scope="col" class="text-center px-6 py-4">Mês 1</th>
            <th scope="col" class="text-center px-6 py-4">Mês 3</th>
            <th scope="col" class="text-center px-6 py-4">Mês 6</th>
            <th scope="col" class="text-center px-6 py-4">Mês 12</th>
            <th scope="col" class="text-center px-6 py-4">Desde IPO</th>

            <th scope="col" class="text-center px-6 py-4">Mês 1</th>
            <th scope="col" class="text-center px-6 py-4">Mês 3</th>
            <th scope="col" class="text-center px-6 py-4">Mês 6</th>
            <th scope="col" class="text-center px-6 py-4">Mês 12</th>
            <th scope="col" class="text-center px-6 py-4">Desde IPO</th>
            <th scope="col" class="text-center px-6 py-4">Ações</th>
        </tr>
    </thead>

    <tbody>

        @foreach ($dividendos as $key => $dividendo)
            @if($key % 2 == 0)
                <tr class="border-b bg-neutral-50">
            @else
                <tr class="border-b bg-neutral-100">
            @endif
                <th class="px-3 py-2 text-center">{{ $dividendo->id }}</th>
                <th class="px-3 py-2 text-center">{{ $dividendo->competencia }}</th>
                <th class="px-3 py-2 text-center">{{ $dividendo->codigo }}</th>
                <td class="px-3 py-2 text-center">{{ $dividendo->valor_mes_1 }}</td>
                <td class="px-3 py-2 text-center">{{ $dividendo->valor_mes_3 }}</td>
                <td class="px-3 py-2 text-center">{{ $dividendo->valor_mes_6 }}</td>
                <td class="px-3 py-2 text-center">{{ $dividendo->valor_mes_12 }}</td>
                <td class="px-3 py-2 text-center">{{ $dividendo->valor_desde_ipo }}</td>
                <td class="px-3 py-2 text-center">{{ $dividendo->percentual_mes_1 }}</td>
                <td class="px-3 py-2 text-center">{{ $dividendo->percentual_mes_3 }}</td>
                <td class="px-3 py-2 text-center">{{ $dividendo->percentual_mes_6 }}</td>
                <td class="px-3 py-2 text-center">{{ $dividendo->percentual_mes_12 }}</td>
                <td class="px-3 py-2 text-center">{{ $dividendo->percentual_desde_ipo }}</td>
                <td class="px-3 py-2">
                    <div class="" role="group">
                        <a href="{{ route('dividendos.edit', $dividendo->id) }}" class="flex px-5 py-3 bg-neutral-200 hover:rounded-xl hover:bg-primary-500 hover:text-white">
                            {{ __('Alterar') }}
                        </a>
                    </div>
                </td>
            </tr>
        @endforeach

    </tbody>

</table>
