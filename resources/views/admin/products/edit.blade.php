<x-app-layout>
    <div class="container mx-auto py-8">
        <div class="w-full max-w-lg mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h2 class="text-2xl font-bold mb-4">Edit Product</h2>

            <form action="{{ route('admin.products.update', $product->id) }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="grid grid-cols-1 gap-5">
                    {{-- Product Name --}}
                    <x-input name="name" label="Product Name" type="text" value="{{ $product->name }}" />
                    {{--  Product Description --}}
                    <x-input name="description" label="Product Description" type="text"
                        value="{{ $product->description ?? '' }}" />
                    {{-- product price --}}
                    <x-input name="price" label="Product Price" type="number" value="{{ $product->price ?? '' }}" />
                    {{-- product stock --}}
                    <x-input name="stock" label="Product Stock" type="number" value="{{ $product->stock ?? '' }}" />
                    {{-- Product Category --}}
                    <div>
                        <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
                        <select name="category_id" id="category_id"
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    {{-- Product Brand --}}
                    <div>
                        <label for="brand_id" class="block text-sm font-medium text-gray-700">Brand</label>
                        <select name="brand_id" id="brand_id"
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                            @foreach ($brands as $brand)
                                <option value="{{ $brand->id }}"
                                    {{ $product->brand_id == $brand->id ? 'selected' : '' }}>
                                    {{ $brand->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    {{-- product image --}}
                    <x-input name="image" label="Product Image" type="text" value="{{ $product->image ?? '' }}" />
                    {{-- product status --}}
                    <div class="flex items-center ">
                        <!-- Hidden input untuk menangani unchecked state -->
                        <input type="hidden" name="is_active" value="0">
                        <input type="checkbox" name="is_active" id="is_active" value="1"
                            class="h-5 w-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500"
                            {{ old('is_active', $product->is_active ?? false) ? 'checked' : '' }}>
                        <label for="is_active" class="ml-2 block text-sm text-gray-700">
                            Active
                        </label>
                    </div>

                    {{-- submit button --}}
                    <div class="flex items-center justify-between">
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Update Product
                        </button>
                        <a href="{{ route('admin.products.index') }}"
                            class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                            Cancel
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
