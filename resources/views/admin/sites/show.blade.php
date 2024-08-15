<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Perencanaan') }}
        </h2>
        @if (Session::get('success'))
        <div class="text-green-500">{{Session::get('success')}}</div>
        @endif
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-xl uppercase mb-4">Data Perencanaan {{$perencanaan->name}}</h2>
                    
                    <div>Nama : {{$perencanaan->name}}</div>
                    <div>Link : {{$perencanaan->link}}</div>
                    <div>Deskripsi : {{$perencanaan->desc ?? '-'}}</div>

                    <a href="{{route('perencanaan.index')}}" class="bg-stone-600 py-2 px-4 mt-4 inline-block rounded">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>