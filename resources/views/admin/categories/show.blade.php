<x-app-layout>
    <div class="container mx-auto py-8 ">
        <div class="max-w-lg mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h2 class="text-2xl font-bold mb-4">{{ $category->name }}</h2>

            <div class="mb-4">
                <img src="{{ $category->image }}" alt="{{ $category->name }}" class="w-full h-auto mb-4 rounded">
            </div>

            <div class="mb-4">
                <p class="text-gray-700 text-base">{{ $category->description }}</p>
            </div>


            <div class="flex items-center justify-between ">
                <a href="{{ route('admin.categories.edit', $category->id) }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Edit category
                </a>
                <a href="{{ route('admin.categories.index') }}"
                    class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                    Back to categorys
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
