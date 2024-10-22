<x-app-layout>
    <div class="container mx-auto py-8 ">
        <div class="max-w-lg mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h2 class="text-2xl font-bold mb-4">{{ $product->name }}</h2>

            <div class="mb-4">
                <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-auto mb-4 rounded">
            </div>

            <div class="mb-4">
                <p class="text-gray-700 text-base">{{ $product->description }}</p>
            </div>

            <div class="mb-4">
                <span class="text-gray-700 text-sm">Price: </span>
                <span class="text-gray-900 text-lg font-bold">{{ $product->price }} IDR</span>
            </div>

            <div class="mb-4">
                <span class="text-gray-700 text-sm">Stock: </span>
                <span class="text-gray-900 text-lg font-bold">{{ $product->stock }}</span>
            </div>

            <div class="mb-4">
                <span class="text-gray-700 text-sm">Status: </span>
                @if ($product->is_active)
                    <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">Active</span>
                @else
                    <span class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs">Inactive</span>
                @endif
            </div>

            <div class="flex items-center justify-between ">
                <a href="{{ route('admin.products.edit', $product->id) }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Edit Product
                </a>
                <a href="{{ route('admin.products.index') }}"
                    class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                    Back to Products
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
