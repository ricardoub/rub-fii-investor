<table class="mt-2 bg-neutral-100 w-6/10 mx-auto rounded-lg shadow-[0_5px_9px_-4px_#3b71ca] font-light">

    <thead class="h-10 border-b bg-neutral-200 font-medium dark:border-neutral-500 dark:bg-neutral-600">
        <tr>
            <th scope="col" class="px-6 py-4">Competencia</th>
            <th scope="col" class="px-6 py-4">Data Com</th>
            <th scope="col" class="px-6 py-4">Data Pagto</th>
            <th scope="col" class="px-6 py-4">Valor Cota</th>
            <th scope="col" class="px-6 py-4">Valor Rendimento</th>
            <th scope="col" class="px-6 py-4">Dividend Yield</th>
        </tr>
    </thead>

    <tbody>

        @foreach ($fii->rendimentos as $key => $rendimento)
            @if($key % 2 == 0)
                <tr class="border-b bg-neutral-50">
            @else
                <tr class="border-b bg-neutral-100">
            @endif
                <td class="px-3 py-2 text-center">{{ $rendimento->competencia }}</td>
                <td class="px-3 py-2 text-center">{{ $rendimento->data_com }}</td>
                <td class="px-3 py-2 text-center">{{ $rendimento->data_pagamento }}</td>
                <td class="px-3 py-2 text-center">{{ $rendimento->valor_cota }}</td>
                <td class="px-3 py-2 text-center">{{ $rendimento->valor_rendimento }}</td>
                <td class="px-3 py-2 text-center">{{ $rendimento->dividend_yield }}</td>
            </tr>
        @endforeach

    </tbody>

</table>