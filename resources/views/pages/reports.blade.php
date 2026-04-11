@extends('layouts.app')
@section('title', 'Reports')

@section('content')
<div class="space-y-6">

    <!-- Header -->
    <div>
        <h2 class="text-2xl font-bold text-gray-800">📊 Laporan</h2>
        <p class="text-gray-500 text-sm">Ringkasan performa bisnis</p>
    </div>

    <!-- Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
        <div class="bg-indigo-500 text-white rounded-xl p-6 shadow">
            <p class="text-sm opacity-80">Total Pendapatan</p>
            <p class="text-3xl font-bold mt-2">Rp 48,2 Jt</p>
        </div>

        <div class="bg-green-500 text-white rounded-xl p-6 shadow">
            <p class="text-sm opacity-80">Order Selesai</p>
            <p class="text-3xl font-bold mt-2">284</p>
        </div>

        <div class="bg-red-500 text-white rounded-xl p-6 shadow">
            <p class="text-sm opacity-80">Order Batal</p>
            <p class="text-3xl font-bold mt-2">42</p>
        </div>
    </div>

    <!-- Grafik -->
    <div class="grid grid-cols-1 xl:grid-cols-2 gap-6">

        <!-- Line Chart -->
        <div class="bg-white rounded-xl shadow p-6">
            <h3 class="text-lg font-semibold text-gray-700 mb-4">Trend Pendapatan</h3>
            <div class="h-64">
                <canvas id="revenueChart"></canvas>
            </div>
        </div>

        <!-- Doughnut Chart -->
        <div class="bg-white rounded-xl shadow p-6">
            <h3 class="text-lg font-semibold text-gray-700 mb-4">Distribusi Order</h3>
            <div class="h-64 flex justify-center items-center">
                <canvas id="orderChart" class="max-w-[220px]"></canvas>
            </div>
        </div>

    </div>

</div>
@endsection


@section('scripts')

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {

    // DATA
    const selesai = 284;
    const batal = 42;
    const total = selesai + batal;

    const persenSelesai = Math.round((selesai / total) * 100);
    const persenBatal = Math.round((batal / total) * 100);

    // LINE CHART
    new Chart(document.getElementById('revenueChart'), {
        type: 'line',
        data: {
            labels: ['Jan','Feb','Mar','Apr','Mei','Jun'],
            datasets: [{
                data: [8, 12, 10, 15, 14, 18],
                borderColor: '#4f46e5',
                backgroundColor: 'rgba(79,70,229,0.1)',
                tension: 0.4,
                fill: true
            }]
        },
        options: {
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false }
            }
        }
    });

    // PLUGIN TEXT TENGAH
    const centerText = {
        id: 'centerText',
        beforeDraw(chart) {
            const { width, height, ctx } = chart;
            ctx.save();

            ctx.font = "bold 16px sans-serif";
            ctx.textAlign = "center";
            ctx.textBaseline = "middle";
            ctx.fillStyle = "#374151";

            ctx.fillText(total + " Order", width / 2, height / 2);

            ctx.restore();
        }
    };

    // DOUGHNUT CHART (ADA PERSEN)
    new Chart(document.getElementById('orderChart'), {
        type: 'doughnut',
        data: {
            labels: [
                `Selesai (${persenSelesai}%)`,
                `Batal (${persenBatal}%)`
            ],
            datasets: [{
                data: [selesai, batal],
                backgroundColor: ['#22c55e', '#ef4444']
            }]
        },
        options: {
            maintainAspectRatio: false,
            cutout: '70%',
            plugins: {
                legend: {
                    position: 'bottom'
                }
            }
        },
        plugins: [centerText]
    });

});
</script>

@endsection