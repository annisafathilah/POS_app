<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Daftar Kategori') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-full mx-0 px-0">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm">
                <div class="p-4">
                    <div class="flex justify-end mb-4">
                        <button onclick="window.location.href='{{ route('categories.create') }}'" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                            Tambah Kategori
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
                                    <th class="px-4 py-2 text-center text-xs font-medium uppercase tracking-wider">Kategori</th>
                                    <th class="px-4 py-2 text-center text-xs font-medium uppercase tracking-wider">Keterangan</th>
                                    <th class="px-4 py-2 text-center text-xs font-medium uppercase tracking-wider">Status</th>
                                    <th class="px-4 py-2 text-center text-xs font-medium uppercase tracking-wider">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($categories as $index => $category)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900">{{ $index + 1 }}</td>
                                    <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900">{{ $category->name }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-900">{{ $category->description ?? '-' }}</td>
                                    <td class="px-4 py-3 whitespace-nowrap text-sm">
                                        <form action="{{ route('categories.update', $category) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('PUT')
                                            <select name="status" onchange="this.form.submit()" class="px-2 py-1 border rounded text-sm {{ $category->status === 'aktif' ? 'bg-green-100 text-green-800' : ($category->status === 'non_aktif' ? 'bg-red-100 text-red-800' : 'bg-yellow-100 text-yellow-800') }}">
                                                <option value="aktif" {{ $category->status === 'aktif' ? 'selected' : '' }}>Aktif</option>
                                                <option value="non_aktif" {{ $category->status === 'non_aktif' ? 'selected' : '' }}>Non-Aktif</option>
                                                <option value="segera_datang" {{ $category->status === 'segera_datang' ? 'selected' : '' }}>Segera Datang</option>
                                            </select>
                                            <input type="hidden" name="name" value="{{ $category->name }}">
                                            <input type="hidden" name="description" value="{{ $category->description }}">
                                        </form>
                                    </td>
                                    <td class="px-4 py-3 whitespace-nowrap text-sm font-medium space-x-2">
                                        <button onclick="editCategory({{ $category->id }})" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-1 px-3 rounded">
                                            Edit
                                        </button>
                                        <button onclick="deleteCategory({{ $category->id }})" class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-3 rounded">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <script>
                        function editCategory(id) {
                            window.location.href = '{{ url("categories") }}/' + id + '/edit';
                        }
                        function deleteCategory(id) {
                            if (confirm('Yakin hapus kategori?')) {
                                const form = document.createElement('form');
                                form.method = 'POST';
                                form.action = '{{ url("categories") }}/' + id;
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
