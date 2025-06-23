<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Produk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6" style="display: flex; flex-direction: row; flex-wrap: wrap; align-content: flex-start; justify-content: center;">
                @foreach($products as $product)
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden" style="width: 300px; margin-bottom: 24px;">
                        <img 
                            src="https://picsum.photos/seed/{{ urlencode($product->name) }}/400/300" 
                            alt="{{ $product->name }}" 
                            class="w-full h-48 object-cover"
                            style="width: 300px"
                        >
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                                {{ $product->name }}
                            </h3>
                            <p class="text-gray-600 dark:text-gray-400 mt-2">
                                Harga: <span class="font-medium text-green-600 dark:text-green-400">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
