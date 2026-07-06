<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Tambah Produk') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 overflow-x-auto">

                    <h2 class="text-white">Masukkan Data product</h2>
                    <form method="POST" action={{ route('products.store') }} class="mt-6 space-y-6">
                        @csrf

                        <div>
                            <x-input-label>
                                Nama Product
                            </x-input-label>
                            <x-text-input name="name" :value="old('name')" placeholder="contoh : Laptop" class="w-full"
                                required />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label>
                                Harga Product (Rp)
                            </x-input-label>
                            <x-text-input name="price" :value="old('price')" placeholder="contoh : 10.000" class="w-full"
                                required />
                            <x-input-error :messages="$errors->get('price')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label>
                                Stok Produk
                            </x-input-label>
                            <x-text-input name="stock" :value="old('stock')" placeholder="contoh : 10" class="w-full"
                                required />
                            <x-input-error :messages="$errors->get('stock')" class="mt-2" />
                        </div>
                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Tambah') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
