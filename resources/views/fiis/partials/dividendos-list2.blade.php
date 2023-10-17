<table class="mt-2 bg-neutral-100 w-6/10 mx-auto rounded-lg shadow-[0_5px_9px_-4px_#3b71ca] font-light">

    <thead class="h-10 border-b bg-neutral-200 font-medium dark:border-neutral-500 dark:bg-neutral-600">
        <tr>
            <th scope="col" class="px-6 py-4" colspan="2"></th>
            <th scope="col" class="px-6 py-4" colspan="3">Dividendo</th>
            <th scope="col" class="px-6 py-4" colspan="3">Percentual</th>
        </tr>
        <tr>
            <th scope="col" class="text-center px-6 py-4">Competencia</th>

            <th scope="col" class="text-center px-6 py-4">Mês 1</th>
            <th scope="col" class="text-center px-6 py-4">Mês 12</th>
            <th scope="col" class="text-center px-6 py-4">Desde IPO</th>

            <th scope="col" class="text-center px-6 py-4">Mês 1</th>
            <th scope="col" class="text-center px-6 py-4">Mês 12</th>
            <th scope="col" class="text-center px-6 py-4">Desde IPO</th>
        </tr>
    </thead>

    <tbody>

        @foreach ($fii->dividendos as $key => $dividendo)
            @if($key % 2 == 0)
                <tr class="border-b bg-neutral-50">
            @else
                <tr class="border-b bg-neutral-100">
            @endif
                <th class="px-3 py-2 text-center">{{ $dividendo->competencia }}</th>
                <td class="px-3 py-2 text-center">{{ $dividendo->valor_mes_1 }}</td>
                <td class="px-3 py-2 text-center">{{ $dividendo->valor_mes_12 }}</td>
                <td class="px-3 py-2 text-center">{{ $dividendo->valor_desde_ipo }}</td>

                <td class="px-3 py-2 text-center">{{ $dividendo->percentual_mes_1 }}</td>
                <td class="px-3 py-2 text-center">{{ $dividendo->percentual_mes_12 }}</td>
                <td class="px-3 py-2 text-center">{{ $dividendo->percentual_desde_ipo }}</td>

            </tr>
        @endforeach

    </tbody>

</table>