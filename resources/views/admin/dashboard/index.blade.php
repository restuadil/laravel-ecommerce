<x-app-layout>
    <div class="p-6 mx-10">
        <h1 class="text-2xl font-semibold mb-4">Dashboard Analytics</h1>
        <!-- Analytics Section -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
            <!-- Total Products -->
            <div class="bg-white p-6 rounded-lg shadow-md shadow-slate-600">
                <div class="flex items-center justify-between">
                    <h2 class="text-xl font-bold">Total Products</h2>
                    <span class="text-sm text-blue-400 underline">
                        <a href="{{ route('admin.products.index') }}">See all</a>
                    </span>
                </div>
                <p class="mt-2 text-3xl">{{ $productCount }}</p>
            </div>

            <!-- Total Categories -->
            <div class="bg-white p-6 rounded-lg shadow-md shadow-slate-600">
                <div class="flex items-center justify-between">
                    <h2 class="text-xl font-bold">Total Categories</h2>
                    <span class="text-sm text-blue-400 underline">
                        <a href="{{ route('admin.categories.index') }}">See all</a>
                    </span>
                </div>
                <p class="mt-2 text-3xl">{{ $categoryCount }}</p>
            </div>



        </div>
        <!-- Grafik Produk vs Kategori -->
        <div class="bg-white p-6 rounded-lg shadow-md shadow-slate-600 my-3">
            <canvas id="analyticsChart"></canvas>
        </div>

        <!-- Chart.js -->
        <script>
            var ctx = document.getElementById('analyticsChart').getContext('2d');
            var analyticsChart = new Chart(ctx, {
                type: 'bar', // You can change this to 'line', 'pie', etc.
                data: {
                    labels: ['Products', 'Categories', ],
                    datasets: [{
                        label: 'Count',
                        data: [{{ $productCount }}, {{ $categoryCount }}],
                        backgroundColor: [
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)'
                        ],
                        borderColor: [
                            'rgba(75, 192, 192, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>


</x-app-layout>
