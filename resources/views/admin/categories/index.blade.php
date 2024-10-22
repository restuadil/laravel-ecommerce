<x-app-layout>

    <div class="container mx-auto py-8">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-semibold text-gray-800">Category Management</h1>
            <a href="{{ route('admin.categories.create') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Add New Category
            </a>
        </div>

        <div class="bg-white shadow-md rounded my-6">
            <table class="min-w-max w-full table-auto">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">No</th>
                        <th class="py-3 px-6 text-left">category Name</th>
                        <th class="py-3 px-6 text-center">Description</th>
                        <th class="py-3 px-6 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                    @foreach ($categories as $category)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                <div class="flex items-center">
                                    <span class="font-medium">
                                        {{ $loop->iteration + ($categories->currentPage() - 1) * $categories->perPage() }}</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                <div class="flex items-center">
                                    <span class="font-medium">{{ $category->name }}</span>
                                </div>
                            </td>

                            <td class="py-3 px-6 text-left">
                                <div class="text-sm">{{ $category->description }}</div>
                            </td>

                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center items-center gap-4">
                                    <a href="{{ route('admin.categories.edit', $category->id) }}"
                                        class="w-4 mr-2 transform hover:text-yellow-500 hover:scale-110">
                                        <i class='bx bx-edit bx-sm'></i>
                                    </a>
                                    <a href="{{ route('admin.categories.show', $category->id) }}"
                                        class="w-4 mr-2 transform hover:text-green-500 hover:scale-110">
                                        <i class='bx bx-low-vision bx-sm'></i>
                                    </a>
                                    <form action="{{ route('admin.categories.destroy', $category->id) }}"
                                        method="POST">
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
        {{ $categories->links() }}
    </div>
</x-app-layout>
