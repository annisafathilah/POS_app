<nav class="w-64 bg-white dark:bg-gray-800 border-r border-gray-200 dark:border-gray-700 min-h-screen px-4 py-6">
    <!-- Logo -->
    <div class="flex items-center mb-8">
        <a href="{{ route('dashboard') }}" class="flex items-center gap-3">
            <x-application-logo class="h-10 w-10 fill-current text-gray-800 dark:text-gray-200" />
            <span class="font-semibold text-lg text-gray-800 dark:text-gray-200">POS</span>
        </a>
    </div>

    <!-- Nav links -->
    <div class="flex flex-col space-y-2">
        <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-3 py-2 rounded-md text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-900 {{ request()->routeIs('dashboard') ? 'bg-gray-100 dark:bg-gray-900' : '' }}">
            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6"/></svg>
            <span>Dashboard</span>
        </a>

        <a href="{{ route('categories.index') }}" class="flex items-center gap-3 px-3 py-2 rounded-md text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-900 {{ request()->routeIs('categories.*') ? 'bg-gray-100 dark:bg-gray-900' : '' }}">
            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/></svg>
            <span>Kategori</span>
        </a>

        <a href="{{ route('products.index') }}" class="flex items-center gap-3 px-3 py-2 rounded-md text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-900 {{ request()->routeIs('products.*') ? 'bg-gray-100 dark:bg-gray-900' : '' }}">
            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m0 0l8-4m0 0l8 4m-8 4v10m0-10L4 11m16 0l-8 4m0 0l-8-4"/></svg>
            <span>Produk</span>
        </a>

    </div>
</nav>
