<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('KEARSIPAN') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                    
                <div class="text-center mb-10">
                    <h1 class="font-bold text-4xl">KEARSIPAN</h1>
                </div>

                @if (session('arsip.status'))
                <div x-data="{show: true}">
                <div x-show="show" x-init="setTimeout(() => {show = false}, 5000)"
                    class="bg-green-500/20 mx-8 py-2 px-4 rounded"
                    >Berhasil update data
                    </div>
                </div>
                @endif

                <form action="{{ route('arsip.update') }}" method="post">
                    @csrf
                    @method('put')
                    <div class="flex">
                        <div class="flex flex-col gap-2 w-fit items-center flex-1">
                            <h2 class="text-xl font-semibold">Jumlah surat keluar</h2>
                            <div class="flex items-center gap-3">
                                <label for="surat-keluar-tw1">TW 1</label>
                                <input type="number" name="surat-keluar-tw1" id="surat-keluar-tw1"
                                    value="{{ $arsip['out-tw1'] }}">
                            </div>
                            <div class="flex items-center gap-3">
                                <label for="surat-keluar-tw2">TW 2</label>
                                <input type="number" name="surat-keluar-tw2" id="surat-keluar-tw2"
                                    value="{{ $arsip['out-tw2'] }}">
                            </div>
                            <div class="flex items-center gap-3">
                                <label for="surat-keluar-tw3">TW 3</label>
                                <input type="number" name="surat-keluar-tw3" id="surat-keluar-tw3"
                                    value="{{ $arsip['out-tw3'] }}">
                            </div>
                        </div>
                        <div class="flex flex-col gap-2 w-fit items-center flex-1">
                            <h2 class="text-xl font-semibold">Jumlah surat masuk</h2>
                            <div class="flex items-center gap-3">
                                <label for="surat-masuk-tw1">TW 1</label>
                                <input type="number" name="surat-masuk-tw1" id="surat-masuk-tw1"
                                    value="{{ $arsip['in-tw1'] }}">
                            </div>
                            <div class="flex items-center gap-3">
                                <label for="surat-masuk-tw2">TW 2</label>
                                <input type="number" name="surat-masuk-tw2" id="surat-masuk-tw2"
                                    value="{{ $arsip['in-tw2'] }}">
                            </div>
                            <div class="flex items-center gap-3">
                                <label for="surat-masuk-tw3">TW 3</label>
                                <input type="number" name="surat-masuk-tw3" id="surat-masuk-tw3"
                                    value="{{ $arsip['in-tw3'] }}">
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 mx-12">
                        <button class="bg-pink-500 text-pink-50 rounded w-full py-2 text-lg font-bold" type="submit">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
