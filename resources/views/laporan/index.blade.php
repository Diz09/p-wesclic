<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Laporan Keuangan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow sm:rounded-lg p-6">
                <div class="overflow-x-auto">
                    <table class="min-w-full w-full text-sm text-left">
                        <thead class="bg-gray-700 text-white text-center">
                            <tr>
                                <th class="px-4 py-3 text-center">Tanggal</th>
                                <th class="px-4 py-3 text-center">Deskripsi</th>
                                <th class="px-4 py-3 text-right">Pemasukan</th>
                                <th class="px-4 py-3 text-right">Pengeluaran</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-800 dark:text-gray-200 text-center">
                            <tr class="border-b border-gray-300 dark:border-gray-600">
                                <td class="px-4 py-2 text-center">2025-06-20</td>
                                <td class="px-4 py-2 text-center">Penjualan Produk A</td>
                                <td class="px-4 py-2 text-right">Rp 5.000.000</td>
                                <td class="px-4 py-2 text-right">-</td>
                            </tr>
                            <tr class="border-b border-gray-300 dark:border-gray-600">
                                <td class="px-4 py-2 text-center">2025-06-21</td>
                                <td class="px-4 py-2 text-center">Pembelian Bahan</td>
                                <td class="px-4 py-2 text-right">-</td>
                                <td class="px-4 py-2 text-right">Rp 1.500.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="mt-6 bg-gray-100 dark:bg-gray-700 p-4 rounded-lg">
                    <div class="text-lg font-medium text-gray-700 dark:text-gray-200 mb-2">Ringkasan</div>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-sm">
                        <div class="bg-white dark:bg-gray-800 p-3 rounded shadow">
                            <p class="text-gray-500 dark:text-gray-400">Total Pemasukan</p>
                            <p class="font-semibold text-green-600 dark:text-green-400">Rp 5.000.000</p>
                        </div>
                        <div class="bg-white dark:bg-gray-800 p-3 rounded shadow">
                            <p class="text-gray-500 dark:text-gray-400">Total Pengeluaran</p>
                            <p class="font-semibold text-red-600 dark:text-red-400">Rp 1.500.000</p>
                        </div>
                        <div class="bg-white dark:bg-gray-800 p-3 rounded shadow">
                            <p class="text-gray-500 dark:text-gray-400">Saldo</p>
                            <p class="font-bold text-blue-600 dark:text-blue-400">Rp 3.500.000</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
