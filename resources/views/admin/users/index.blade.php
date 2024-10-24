<x-app-layout>

    <div class="container mx-auto py-8">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-semibold text-gray-800">User Management</h1>

        </div>

        <div class="bg-white shadow-md rounded my-6">
            <table class="min-w-max w-full table-auto">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">No</th>
                        <th class="py-3 px-6 text-left"> Name</th>
                        <th class="py-3 px-6 text-left">Email</th>
                        <th class="py-3 px-6 text-left">Role</th>
                        <th class="py-3 px-6 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                    @foreach ($users as $user)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                <div class="flex items-center">
                                    <span class="font-medium">
                                        {{ $loop->iteration + ($users->currentPage() - 1) * $users->perPage() }}</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                <div class="flex items-center">
                                    <span class="font-medium">{{ $user->name }}</span>
                                </div>
                            </td>

                            <td class="py-3 px-6 text-left">
                                <div class="text-sm">{{ $user->email }}</div>
                            </td>

                            <td class="py-3 px-6 text-left">
                                @if ($user->role === 'admin')
                                    <span
                                        class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">Admin</span>
                                @else
                                    <span class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs">User</span>
                                @endif
                            </td>

                            <td class="py-3 px-6 text-left">
                                <div class="flex item-center justify-center items-center gap-4">
                                    <a href="{{ route('admin.users.show', $user->id) }}"
                                        class="w-4 mr-2 transform hover:text-green-500 hover:scale-110">
                                        <i class='bx bx-low-vision bx-sm'></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $users->links() }}
    </div>
</x-app-layout>
