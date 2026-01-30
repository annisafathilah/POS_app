<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Welcome box -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-2xl font-semibold">Selamat Datang di Dashboard</h1>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-300">Kelola produk, kategori, stok, dan pengaturan lainnya dari panel ini.</p>
                </div>
            </div>

            <!-- Four quick boxes -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <a href="{{ route('categories.index') }}" class="block p-6 rounded-lg shadow hover:shadow-md bg-blue-50 dark:bg-blue-700 border border-blue-100">
                    <div class="text-sm text-blue-700 dark:text-blue-100">Kategori Produk</div>
                    <div class="mt-4 text-2xl font-bold text-blue-900 dark:text-blue-50">{{ \App\Models\Category::count() }}</div>
                </a>

                <a href="#" class="block p-6 rounded-lg shadow hover:shadow-md bg-red-50 dark:bg-red-700 border border-red-100">
                    <div class="text-sm text-red-700 dark:text-red-100">Stok Produk</div>
                    <div class="mt-4 text-2xl font-bold text-red-900 dark:text-red-50">--</div>
                </a>

                <a href="#" class="block p-6 rounded-lg shadow hover:shadow-md bg-green-50 dark:bg-green-700 border border-green-100">
                    <div class="text-sm text-green-700 dark:text-green-100">Harga Produk</div>
                    <div class="mt-4 text-2xl font-bold text-green-900 dark:text-green-50">--</div>
                </a>

                <a href="#" class="block p-6 rounded-lg shadow hover:shadow-md bg-yellow-50 dark:bg-yellow-700 border border-yellow-100">
                    <div class="text-sm text-yellow-700 dark:text-yellow-100">Lainnya</div>
                    <div class="mt-4 text-2xl font-bold text-yellow-900 dark:text-yellow-50">--</div>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
