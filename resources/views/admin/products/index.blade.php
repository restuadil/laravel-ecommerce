<x-app-layout>

    <div class="container mx-auto py-8">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-semibold text-gray-800">Product Management</h1>
            {{-- flash message --}}
            @if (session()->has('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-16 py-3 rounded relative">
                    {{ session('success') }}
                </div>
            @endif

            <a href="{{ route('admin.products.create') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Add New Product
            </a>
        </div>

        <div class="bg-white shadow-md rounded my-6">
            <table class="min-w-max w-full table-auto">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">No</th>
                        <th class="py-3 px-6 text-left">Product Name</th>
                        <th class="py-3 px-6 text-center">Price</th>
                        <th class="py-3 px-6 text-center">Stock</th>
                        <th class="py-3 px-6 text-center">Brand </th>
                        <th class="py-3 px-6 text-center">Category </th>
                        <th class="py-3 px-6 text-center">Status</th>
                        <th class="py-3 px-6 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                    @foreach ($products as $product)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                <div class="flex items-center">
                                    <span class="font-medium">
                                        {{ $loop->iteration + ($products->currentPage() - 1) * $products->perPage() }}</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                <div class="flex items-center">
                                    <span class="font-medium">{{ $product->name }}</span>
                                </div>
                            </td>

                            <td class="py-3 px-6 text-center">
                                <div class="text-sm">Rp.{{ $product->price }}</div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="text-sm">{{ $product->stock }}</div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="text-sm">{{ $product->brand->name }}</div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="text-sm">{{ $product->category->name }}</div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                @if ($product->is_active)
                                    <span
                                        class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">Active</span>
                                @else
                                    <span class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs">Inactive</span>
                                @endif
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center items-center gap-4">
                                    <a href="{{ route('admin.products.edit', $product->id) }}"
                                        class="w-4 mr-2 transform hover:text-yellow-500 hover:scale-110">
                                        <i class='bx bx-edit bx-sm'></i>
                                    </a>
                                    <a href="{{ route('admin.products.show', $product->id) }}"
                                        class="w-4 mr-2 transform hover:text-green-500 hover:scale-110">
                                        <i class='bx bx-low-vision bx-sm'></i>
                                    </a>
                                    <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST"
                                        onsubmit="return confirm('Are you sure?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="w-4 mr-2 transform hover:text-red-500 hover:scale-110">
                                            <i class='bx bx-trash bx-sm'></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $products->links() }}
    </div>
</x-app-layout>
