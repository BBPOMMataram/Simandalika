<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Sites') }}
        </h2>
        @if (Session::get('success'))
            <div class="text-green-500" x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)" x-transition>
                {{ Session::get('success') }}</div>
        @endif
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('sites.create') }}" class="bg-teal-600 text-teal-50 rounded px-4 py-2 mb-4 inline-block">Tambah
                        data</a>
                    <table class="table table-auto w-full text-left mt-2 mb-5">
                        <thead>
                            <tr class="border-b text-lg leading-10 [&>th]:pl-6 bg-gray-600 text-gray-100">
                                <th>No</th>
                                <th>Nama</th>
                                <th>Link</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr class="border-b border-gray-600 leading-9 [&>td]:pl-6 odd:bg-gray-200">
                                    <td>{{ ++$indexNumber }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->link }}</td>
                                    <td>{{ $item->desc }}</td>
                                    <td class="text-center [&>*]:mx-1">
                                        <form action="{{ route('sites.destroy', $item->id) }}" method="post"
                                            class="inline-block" x-data="{ showConfirm: false }">
                                            @csrf
                                            @method('DELETE')

                                            <!-- Delete Button -->
                                            <button type="button" class="underline" @click="showConfirm = true">
                                                <i class="fa-solid fa-trash text-red-700"></i>
                                                Delete
                                            </button>

                                            <!-- Confirmation Dialog -->
                                            <div x-show="showConfirm"
                                                class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50">
                                                <div class="bg-white p-4 rounded shadow-lg text-center">
                                                    <p class="mb-4">Are you sure you want to delete this item?</p>
                                                    <div>
                                                        <button type="submit"
                                                            class="bg-red-700 text-white px-4 py-2 rounded">Yes,
                                                            Delete</button>
                                                        <button type="button" @click="showConfirm = false"
                                                            class="bg-gray-700 text-white px-4 py-2 rounded">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                        <a href="{{ route('sites.edit', $item->id) }}" class="underline">
                                            <i class="fa-solid fa-pen text-yellow-700"></i>
                                            Edit
                                        </a>
                                        {{-- <a href="{{route('sites.show', $item->id)}}" class="underline">
                                        <i class="fa-solid fa-eye text-teal-700"></i>
                                        Show
                                    </a> --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {!! $data->links() !!}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
