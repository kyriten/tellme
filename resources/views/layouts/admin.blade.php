<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net" rel="preconnect">
    <link href="https://fonts.bunny.net" rel="preconnect">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Favicon -->
    <link type="image/x-icon" href="/credentials/favicon.ico" rel="icon">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Another CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        @media (max-width: 768px) {
            .flex-wrap {
                display: flex;
                flex-wrap: wrap;
            }

            .section-small {
                width: 50%;
            }
        }
    </style>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        <div class="flex flex-col bg-white">

            <!-- Top Navigation Menu -->
            @include('layouts.admin-topnav')

            <!-- Side Nav & Main Content -->
            <div class="flex-col w-full md:flex md:flex-row md:min-h-screen">

                <!-- Side Navigation Menu -->
                @include('layouts.admin-sidenav')

                <!-- Page Content -->
                {{ $slot }}
            </div>
        </div>
    </div>
    <!-- Script Graph -->
    <script>
        // Report Complaint
        var usersChart = new Chart(document.getElementById('reportComplaintChart'), {
            type: 'doughnut',
            data: {
                labels: ['Has Finished', 'On Progress'],
                datasets: [{
                    data: [30, 65],
                    backgroundColor: ['#991b1b', '#8B8B8D'],
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    position: 'bottom'
                }
            }
        });

        // Incoming Complaint
        var commercesChart = new Chart(document.getElementById('incomingComplaintChart'), {
            type: 'doughnut',
            data: {
                labels: ['Pending', 'Accepted'],
                datasets: [{
                    data: [60, 40],
                    backgroundColor: ['#FEC500', '#8B8B8D'],
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    position: 'bottom'
                }
            }
        });

        const menuBtn = document.getElementById('menuBtn');
        const sideNav = document.getElementById('sideNav');

        menuBtn.addEventListener('click', () => {
            sideNav.classList.toggle(
                'hidden');
        });
    </script>
</body>

</html>
