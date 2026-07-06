<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Daftar Produk') }}
            </h2>

        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Alert Sukses (Jika ada session flash) -->
            @if (session('success'))
                <div
                    class="mb-4 p-4 bg-green-100 border-l-4 border-green-500 text-green-700 dark:bg-green-900 dark:text-green-200 rounded-r-md shadow-sm">
                    {{ session('success') }}
                </div>
            @endif

            <div class="mb-5 flex justify-between">
                <!-- Tombol Tambah Produk -->
                <a href="{{ route('products.create') }}"
                    class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-md text-sm transition shadow-sm">
                    + Tambah Produk
                </a>
                <form method="GET" action="{{ route('products.index') }}"
                    class="flex items-center gap-2 w-full sm:w-80">
                    <div class="relative w-full">
                        <input type="text" name="search" value="{{ request('search') }}"
                            placeholder="Cari nama produk..."
                            class="w-full text-sm pl-4 pr-10 py-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-gray-100 rounded-md focus:border-indigo-500 focus:ring-indigo-500 shadow-sm">

                        @if (request('search'))
                            <a href="{{ route('products.index') }}"
                                class="absolute right-3 top-2.5 text-gray-400 hover:text-gray-600 dark:hover:text-gray-200">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </a>
                        @endif
                    </div>
                    <button type="submit"
                        class="bg-gray-800 dark:bg-gray-200 text-white dark:text-gray-800 px-4 py-2 rounded-md text-sm font-medium hover:bg-gray-700 dark:hover:bg-white transition shadow-sm">
                        Cari
                    </button>
                </form>
            </div>

            <!-- Kontainer Tabel -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 overflow-x-auto">
                    @include('products.partials.table-product')
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
