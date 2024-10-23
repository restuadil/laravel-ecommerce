<x-app-layout>
    <div class="container mx-auto py-8">
        <div class="w-full max-w-lg mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h2 class="text-2xl font-bold mb-4">Add New Brands</h2>

            <form action="{{ route('admin.brands.store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 gap-5">

                    <!-- brand Name -->
                    <x-input name="name" label="brand Name" type="text" value="{{ $brand->name ?? '' }}" />

                    <x-input name="description" label="brand description" type="text"
                        value="{{ $brand->description ?? '' }}" />

                    <x-input name="image" label="brand image" type="text" value="{{ $brand->image ?? '' }}" />



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
