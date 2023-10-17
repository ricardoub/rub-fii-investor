<table class="mt-2 bg-neutral-100 w-6/10 mx-auto rounded-lg shadow-[0_5px_9px_-4px_#3b71ca] font-light">

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

        @foreach ($administradoras as $key => $administradora)
            @if($key % 2 == 0)
                <tr class="border-b bg-neutral-50">
            @else
                <tr class="border-b bg-neutral-100">
            @endif
                <td class="px-3 py-2 text-center">{{ $administradora->id }}</td>
                <th class="px-3 py-2 text-left">{{ $administradora->nome }}</th>
                <td class="px-3 py-2">{{ $administradora->cnpj }}</td>
                <td class="px-3 py-2">{{ $administradora->telefone }}</td>
                <td class="px-3 py-2">{{ $administradora->email }}</td>
                <td class="px-3 py-2">{{ $administradora->site }}</td>
                <td class="px-3 py-2">
                    <div class="" role="group">
                        <a href="{{ route('administradoras.edit', $administradora->id) }}" class="flex px-5 py-3 bg-neutral-200 hover:rounded-xl hover:bg-primary-500 hover:text-white">
                            {{ __('Alterar') }}
                        </a>
                    </div>
                </td>
            </tr>
        @endforeach

    </tbody>

</table>