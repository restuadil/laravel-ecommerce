<x-guest-layout>
    <!-- Navbar -->
    <nav class="bg-white shadow-md py-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-2xl font-bold text-blue-600">E-Commerce</a>
            <ul class="flex space-x-6">
                <li><a href="" class="text-gray-600 hover:text-blue-600">Products</a>
                </li>
                <li><a href="" class="text-gray-600 hover:text-blue-600">Cart</a>
                </li>
                @auth
                    <li><a href="{{ route('dashboard') }}" class="text-gray-600 hover:text-blue-600">Dashboard</a></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}" class="text-gray-600 hover:text-red-600"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                Logout
                            </a>
                        </form>
                    </li>
                @else
                    <li><a href="{{ route('login') }}" class="text-gray-600 hover:text-blue-600">Login</a></li>
                    <li><a href="{{ route('register') }}" class="text-gray-600 hover:text-blue-600">Register</a></li>
                @endauth
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <x-hero></x-hero>

    <!-- Featured Products Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8">Featured Products</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                @foreach ($featuredProducts as $product)
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img src="{{ $product->image }} || 'https://via.placeholder.com/150" alt="{{ $product->name }}"
                            class="w-full h-48 object-cover mb-4">
                        <h3 class="text-lg font-semibold">{{ $product->name }}</h3>
                        <p class="text-gray-600">{{ Str::limit($product->description, 60) }}</p>
                        <p class="text-blue-600 font-bold mt-2">Rp
                            {{-- format price --}}
                            {{ number_format($product->price, 0, ',', '.') }}</p>
                        <a href=""
                            class="bg-blue-500 text-white py-2 px-4 rounded mt-4 block text-center hover:bg-blue-700">
                            View Details
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 py-8 mt-16">
        <div class="container mx-auto text-center text-white">
            <div class="mb-6">
                <a href="{{ url('/') }}" class="text-2xl font-bold text-blue-400">E-Commerce</a>
            </div>
            <div class="space-x-4 mb-6">
                <a href="" class="text-gray-300 hover:text-white">About Us</a>
                <a href="" class="text-gray-300 hover:text-white">Contact</a>
                <a href="" class="text-gray-300 hover:text-white">Terms of Service</a>
                <a href="" class="text-gray-300 hover:text-white">Privacy Policy</a>
            </div>
            <p class="text-gray-400">&copy; {{ date('Y') }} E-Commerce. All rights reserved.</p>
        </div>
    </footer>

</x-guest-layout>
