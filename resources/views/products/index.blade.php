<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Stok Produk') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-full mx-0 px-0">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm">
                <div class="p-4">
                    <div class="flex justify-end mb-4">
                        <button onclick="window.location.href='{{ route('products.create') }}'" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                            Tambah Produk
                        </button>
                    </div>
                    @if(session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white border border-gray-300">
                            <thead class="bg-blue-500 text-white">
                                <tr>
                                    <th class="px-4 py-2 text-center text-xs font-medium uppercase tracking-wider">No</th>
                                    <th class="px-4 py-2 text-center text-xs font-medium uppercase tracking-wider">Nama</th>
                                    <th class="px-4 py-2 text-center text-xs font-medium uppercase tracking-wider">SKU</th>
                                    <th class="px-4 py-2 text-center text-xs font-medium uppercase tracking-wider">Kategori</th>
                                    <th class="px-4 py-2 text-center text-xs font-medium uppercase tracking-wider">Harga</th>
                                    <th class="px-4 py-2 text-center text-xs font-medium uppercase tracking-wider">Stok</th>
                                    <th class="px-4 py-2 text-center text-xs font-medium uppercase tracking-wider">Status</th>
                                    <th class="px-4 py-2 text-center text-xs font-medium uppercase tracking-wider">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($products as $index => $product)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-3 whitespace-nowrap text-sm text-center text-gray-900">{{ $index + 1 }}</td>
                                    <td class="px-4 py-3 whitespace-nowrap text-sm text-center text-gray-900">{{ $product->name }}</td>
                                    <td class="px-4 py-3 whitespace-nowrap text-sm text-center text-gray-900">{{ $product->sku }}</td>
                                    <td class="px-4 py-3 whitespace-nowrap text-sm text-center text-gray-900">{{ $product->category->name }}</td>
                                    <td class="px-4 py-3 whitespace-nowrap text-sm text-center text-gray-900">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                                    <td class="px-4 py-3 whitespace-nowrap text-sm text-center text-gray-900">{{ $product->stock }}</td>
                                    <td class="px-4 py-3 whitespace-nowrap text-sm text-center">
                                        <form action="{{ route('products.update', $product) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('PUT')
                                            <select name="status" onchange="this.form.submit()" class="px-2 py-1 border rounded text-sm {{ $product->status === 'aktif' ? 'bg-green-100 text-green-800' : ($product->status === 'non_aktif' ? 'bg-red-100 text-red-800' : 'bg-yellow-100 text-yellow-800') }}">
                                                <option value="aktif" {{ $product->status === 'aktif' ? 'selected' : '' }}>Aktif</option>
                                                <option value="non_aktif" {{ $product->status === 'non_aktif' ? 'selected' : '' }}>Non-Aktif</option>
                                                <option value="segera_datang" {{ $product->status === 'segera_datang' ? 'selected' : '' }}>Segera Datang</option>
                                            </select>
                                            <input type="hidden" name="name" value="{{ $product->name }}">
                                            <input type="hidden" name="sku" value="{{ $product->sku }}">
                                            <input type="hidden" name="description" value="{{ $product->description }}">
                                            <input type="hidden" name="price" value="{{ $product->price }}">
                                            <input type="hidden" name="stock" value="{{ $product->stock }}">
                                            <input type="hidden" name="category_id" value="{{ $product->category_id }}">
                                        </form>
                                    </td>
                                    <td class="px-4 py-3 whitespace-nowrap text-sm font-medium space-x-2 text-center">
                                        <button onclick="editProduct({{ $product->id }})" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-1 px-3 rounded">
                                            Edit
                                        </button>
                                        <button onclick="deleteProduct({{ $product->id }})" class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-3 rounded">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <script>
                        function editProduct(id) {
                            window.location.href = '{{ url("products") }}/' + id + '/edit';
                        }
                        function deleteProduct(id) {
                            if (confirm('Yakin hapus produk?')) {
                                const form = document.createElement('form');
                                form.method = 'POST';
                                form.action = '{{ url("products") }}/' + id;
                                const csrf = document.createElement('input');
                                csrf.type = 'hidden';
                                csrf.name = '_token';
                                csrf.value = '{{ csrf_token() }}';
                                const method = document.createElement('input');
                                method.type = 'hidden';
                                method.name = '_method';
                                method.value = 'DELETE';
                                form.appendChild(csrf);
                                form.appendChild(method);
                                document.body.appendChild(form);
                                form.submit();
                            }
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
