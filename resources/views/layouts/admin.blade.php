<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
<<<<<<< HEAD
    <link rel="preconnect" href="https://fonts.bunny.net">
=======
    <link href="https://fonts.bunny.net" rel="preconnect">
>>>>>>> 568076c9b5594c148d8a7964998eb9b00810daa0
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Favicon -->
    <link type="image/x-icon" href="/credentials/favicon.ico" rel="icon">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
<<<<<<< HEAD
=======

    <!-- Another CSS -->
    <link href="/dist/tailwind.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" rel="stylesheet" />
>>>>>>> 568076c9b5594c148d8a7964998eb9b00810daa0
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
<<<<<<< HEAD
        @include('layouts.navigation')
=======
        @include('layouts.admin-topnav')
        @include('layouts.admin-sidenav')
>>>>>>> 568076c9b5594c148d8a7964998eb9b00810daa0

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
<<<<<<< HEAD
=======

        <script type="text/javascript">
            function dropdown() {
                document.querySelector("#submenu").classList.toggle("hidden");
                document.querySelector("#arrow").classList.toggle("rotate-0");
            }
            dropdown();

            function openSidebar() {
                document.querySelector(".sidebar").classList.toggle("hidden");
            }
        </script>
>>>>>>> 568076c9b5594c148d8a7964998eb9b00810daa0
    </div>
</body>

</html>
