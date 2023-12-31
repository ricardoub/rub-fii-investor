<table class="font-light">

    <thead class="h-10 border-b bg-neutral-200 font-medium dark:border-neutral-500 dark:bg-neutral-600">
        <tr>
            <th scope="col" class="px-6 py-4">#</th>
            <th scope="col" class="px-6 py-4">Codigo</th>
            <th scope="col" class="px-6 py-4">Nome</th>
            <th scope="col" class="px-6 py-4">Tipo</th>
            <th scope="col" class="px-6 py-4">Segmento</th>
            <th scope="col" class="px-6 py-4">Administradora</th>
            <th scope="col" class="px-6 py-4">Dia com</th>
            <th scope="col" class="px-6 py-4">Descrição</th>
            <th scope="col" class="px-6 py-4">Caracteristicas</th>
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
                <th class="px-3 py-2 text-center">{{ $fii->codigo }}</th>
                <td class="px-3 py-2">{{ $fii->nome }}</td>
                <td class="px-3 py-2">{{ $fii->tipo->nome }}</td>
                <td class="px-3 py-2">{{ $fii->segmento->nome }}</td>
                <td class="px-3 py-2">{{ $fii->administradora->nome }}</td>
                <td class="px-3 py-2">{{ $fii->dia_data_com }}</td>
                <td class="px-3 py-2">{!! Str::limit($fii->descricao, 150, ' ...') !!}</td>
                <td class="px-3 py-2">{!! Str::limit($fii->caracteristicas, 200, ' ...') !!}</td>
                <td class="px-3 py-2">
                    <div class="" role="group">
                        <a href="{{ route('fiis.edit', $fii->id) }}" class="flex px-5 py-3 bg-neutral-200 hover:rounded-xl hover:bg-primary-500 hover:text-white">
                            {{ __('Alterar') }}
                        </a>
                    </div>
                </td>
            </tr>
        @endforeach

    </tbody>

</table>
