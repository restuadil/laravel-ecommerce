<x-app-layout>
    <div class="container mx-auto py-8">
        <div class="w-full max-w-lg mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h2 class="text-2xl font-bold mb-4">Add New Product</h2>

            <form action="{{ route('admin.products.store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 gap-5">

                    <!-- Product Name -->
                    <x-input name="name" label="Product Name" type="text" value="{{ $product->name ?? '' }}" />

                    <div class="flex flex-row gap-5">
                        <!-- Product Price -->
                        <x-input name="price" label="Product Price" type="number"
                            value="{{ $product->price ?? '' }}" />

                        <!-- Product Stock -->
                        <x-input name="stock" label="Product Stock" type="number"
                            value="{{ $product->stock ?? '' }}" />

                    </div>
                    <!-- Product Description -->
                    <x-input name="description" label="Product Description" type="text"
                        value="{{ $product->description ?? '' }}" />

                    <!-- Product Image -->
                    <x-input name="image" label="Product Image" type="text" value="{{ $product->image ?? '' }}" />

                    <!-- Product Status -->
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
                    <!-- Product Category -->
                    <div>
                        <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
                        <select name="category_id" id="category_id"
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- Brand Product --}}
                    <div>
                        <label for="brand_id" class="block text-sm font-medium text-gray-700">Category</label>
                        <select name="brand_id" id="brand_id"
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                            @foreach ($brands as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="flex justify-center">
                        <button type="submit"
                            class="bg-blue-600 text-white px-6 py-2 rounded-md text-lg font-semibold shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                            Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
