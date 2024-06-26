<x-app-layout>
<div class="bg-gray-100 py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-md mx-auto">

    <h2 class="text-2xl font-bold mb-6">Agregar Proveedor</h2>
    <form method="POST" action="{{ route('proveedor.store') }}" class="space-y-6">
        @csrf
        <div>
        <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
        <div class="mt-1">
          <input type="text" id="nombre" name="nombre" required class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Ingresa tu nombre">
        </div>
      </div>
      <div>
        <label for="dirección" class="block text-sm font-medium text-gray-700">Dirección</label>
        <div class="mt-1">
          <input type="text" id="dirección" name="dirección" required class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Ingresa tu dirección">
        </div>
      </div>
      <div>
        <label for="telefono" class="block text-sm font-medium text-gray-700">Teléfono</label>
        <div class="mt-1">
          <input type="tel" id="telefono" name="telefono" required class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Ingresa tu número de teléfono">
        </div>
      </div>
      <div>
        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          Enviar
        </button>

      </div>
    </form>
  </div>
</div>
</x-app-layout>
