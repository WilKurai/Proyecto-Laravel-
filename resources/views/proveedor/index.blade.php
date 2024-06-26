<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista Proveedor') }}
        </h2>

<div class="flex place-content-end">
    <a type="button" href="{{ route('proveedor.create') }}" class="rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
      crear proveedor
    </a>
  </div>

    </x-slot>
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
{{--                 <th scope="col" class="px-6 py-3">
                    Id
                </th> --}}
                <th scope="col" class="px-6 py-3">
                    nombre
                </th>
                <th scope="col" class="px-6 py-3">
                    direccion
                </th>
                <th scope="col" class="px-6 py-3">
                    telefono
                </th>
                <th scope="col" class="px-6 py-3">
                    Acciones
                </th>
            </tr>
        </thead>
        <tbody>
        @foreach ($proveedores as $proveedor )

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                {{-- <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$proveedor->id}}
                </th> --}}
                <td class="px-6 py-4">
                    {{$proveedor->nombre}}
                </td>
                <td class="px-6 py-4">
                    {{$proveedor->dirección}}
                </td>
                <td class="px-6 py-4">
                    {{$proveedor->telefono}}
                </td>
                <td>
                    <div class=" flex justify-star mb-4">
                            <a href="{{ route('proveedor.edit', $proveedor) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-3 text-sm rounded mr-2">
                            Editar
                            </a>
                          <form action="{{ route('proveedor.destroy', $proveedor) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            {{-- <button type="submit" class="btn btn-danger">Eliminar</button> --}}
                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-3 text-sm rounded mr-2">
                                Eliminar
                              </button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</x-app-layout>
