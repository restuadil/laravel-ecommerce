<x-app-layout>
    <div class="container mx-auto py-8">
        <div class="w-full max-w-lg mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h2 class="text-2xl font-bold mb-4">Edit Brand</h2>

            <form action="{{ route('admin.brands.update', $brand->id) }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="grid grid-cols-1 gap-5">
                    {{-- brand Name --}}
                    <x-input name="name" label="brand Name" type="text" value="{{ $brand->name }}" />
                    {{--  brand Description --}}
                    <x-input name="description" label="brand Description" type="text"
                        value="{{ $brand->description ?? '' }}" />
                    {{-- brand image --}}
                    <x-input name="image" label="brand Description" type="text"
                        value="{{ $brand->image ?? '' }}" />


                    {{-- submit button --}}
                    <div class="flex items-center justify-between">
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Update Product
                        </button>
                        <a href="{{ route('admin.categories.index') }}"
                            class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                            Cancel
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
