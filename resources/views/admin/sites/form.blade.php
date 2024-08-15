<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Sites') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-xl uppercase mb-4">Tambah Data</h2>
                    @if ($errors->any())
                    <div>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{route('sites.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="flex flex-col mb-2">
                            <label for="name">Nama</label>
                            <input type="text" id="name" name="name" class="w-fit rounded text-black"
                                value="{{old('name', '')}}" required>
                        </div>
                        <div class="flex flex-col mb-2">
                            <label for="link">Link</label>
                            <input type="text" id="link" name="link" class="w-fit rounded text-black"
                                value="{{old('link', '')}}" required>
                        </div>
                        <div class="flex flex-col mb-2">
                            <label for="desc">Deskripsi</label>
                            <input type="text" id="desc" name="desc" class="w-fit rounded text-black"
                                value="{{old('desc', '')}}">
                        </div>
                        <div class="flex flex-col mb-2">
                            <label for="pic">PIC</label>
                            <input type="text" id="pic" name="pic" class="w-fit rounded text-black" value="{{old('pic', '')}}">
                        </div>
                        <div class="flex flex-col mb-2">
                            <label for="logo">Logo</label>
                            <input type="file" name="logo" id="logo">
                        </div>

                        <button type="submit" class="py-2 px-4 bg-teal-600 my-2 rounded">Simpan</button>
                        <a href="{{route('sites.index')}}"
                            class="bg-stone-600 py-2 px-4 mt-4 inline-block rounded">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>