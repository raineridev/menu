
<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Novo prato') }}
        </h2>
</x-slot>

<form method="POST" class="flex justify-center px-4" action="{{route('dishes.store')}}">
  @csrf
  <div class="mt-6 flex flex-col gap-6 bg-white shadow-sm rounded-lg  px-8 py-2 w-full max-w-4xl">
    <div>
        <label for="small-input" class="block mb-2 text-lg font-medium text-gray-900">Nome do prato</label>
        <input type="text" id="small-input" name="name" class="w-full block p-2 grow text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500">
    </div>
    <div>
        <label for="small-input" class="block mb-2 text-lg font-medium text-gray-900">Preço do prato</label>
        <div class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 has-[input:focus-within]:outline has-[input:focus-within]:outline-2 has-[input:focus-within]:-outline-offset-2 has-[input:focus-within]:outline-indigo-600">
          <div class="shrink-0 select-none text-base text-gray-500 sm:text-sm/6">R$</div>
            <input type="text" name="price" id="price" class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6" placeholder="0.00">
        </div>
    </div>
    <div>
        <label for="small-input" class="block mb-2 text-lg font-medium text-gray-900">Descrição do prato</label>
        <textarea type="text" name="description" rows="4" id="small-input" class="resize-none block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Digite aqui..."></textarea>
    </div>
    <button class="bg-red-800 text-white rounded-sm font-semibold text-base py-1">Criar prato</button>
  </div>
</form>

  <div class="mt-2">

  </div>


</x-app-layout>
