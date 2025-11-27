<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyJobs Admin | @yield('title', 'Dashboard')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons (for icons) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/admin.style.css') }}">
    <!-- Chart.js for Application Trends -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.2/dist/chart.umd.min.js"></script>
</head>

<body>
    <div class="d-flex" id="wrapper">
        @include('admin.layout.sidebar')
        <!-- Page Content Wrapper -->
        <div id="page-content-wrapper">
            @include('admin.layout.topnav')

            <!-- Page Content -->
            <div class="container-fluid py-4">
                <h1 class="mt-4 mb-4 text-primary">@yield('title')</h1>

                @yield('content')

            </div>
            <!-- End Page Content -->

            @include('admin.layout.footer')
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="{{ asset('js/toggle-sidebar.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Chart.js implementation
        const ctx = document.getElementById('applicationTrendChart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Total Applications',
                    data: [1500, 1800, 2500, 2200, 3100, 3500],
                    backgroundColor: 'rgba(54, 162, 235, 0.2)', // Light blue fill
                    borderColor: 'rgba(54, 162, 235, 1)', // Primary blue line
                    borderWidth: 2,
                    tension: 0.3, // Curve the line
                    fill: true
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                plugins: {
                    legend: {
                        display: true
                    }
                }
            }
        });
    </script>

    <script>
        @session('status')
        Swal.fire({
            title: "{{ $value['error'] ? 'Error!' : 'Success' }}",
            text: "{{ $value['message'] ?? 'Done' }}",
            icon: "{{ $value['error'] ? 'error' : 'success' }}",
            confirmButtonText: 'OK'
        })
        @endsession
    </script>
    @stack('scripts')

</body>

</html>
