<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List Users') }}
        </h2>
    </x-slot>
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Id
                </th>
                <th scope="col" class="px-6 py-3">
                    nombre
                </th>
                <th scope="col" class="px-6 py-3">
                    correo
                </th>
            </tr>
        </thead>
        <tbody>
        @foreach ($users as $user )

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$user->id}}
                </th>
                <td class="px-6 py-4">
                    {{$user->name}}
                </td>
                <td class="px-6 py-4">
                    {{$user->email}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</x-app-layout>
