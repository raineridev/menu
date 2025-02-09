<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pratos') }}
        </h2>
        <a href="{{ route('dishes.create') }}">+ Novo Prato</a>
    </x-slot>
<div class="mt-6 relative overflow-x-auto md:mr-6 md:ml-6">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
            <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Nome do prato
                </th>
                <th scope="col" class="px-6 py-3">
                    Preço
                </th>
            </tr>
        </thead>
        <tbody>
    @foreach ($dishes as $dishe)
            <tr class="bg-white border-b border-gray-200">
                <td class="px-6 py-4">
                    {{ $dishe->id }}
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-red-800 whitespace-nowrap">
                    <a href="{{ route('dishes.edit', $dishe->id) }}">{{ $dishe->name }} </a>
                </th>
                <td class="px-6 py-4">
                    R${{ $dishe->price }}
                </td>
            </tr>
@endforeach
        </tbody>
    </table>
</div>

{{$dishes->links()}}


</x-app-layout>
