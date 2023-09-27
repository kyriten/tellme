<!-- Side Navigation Menu -->
<nav class="p-2 bg-slate-300 w-60 flex-col hidden md:flex" id="sideNav">
    <ul>
        <li>
            <a class="flex items-center justify-start text-gray-500 py-2.5 px-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-red-400 hover:to-red-300 hover:text-white"
                href="{{ route('dashboard') }}">
                <i class="fas fa-home mr-2"></i> {{ __('Dashboard') }}
            </a>
        </li>
        <li>
            <a class="flex items-center justify-start text-gray-500 py-2.5 px-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-red-400 hover:to-red-300 hover:text-white"
                href="{{ route('admin.masterdata') }}">
                <i class="fas fa-file-alt  mr-2"></i> {{ __('Manage Complaint') }}
            </a>
        </li>
        <li>
            <a class="flex items-center justify-start text-gray-500 py-2.5 px-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-red-400 hover:to-red-300 hover:text-white"
                href="#">
                <i class="fas fa-users "></i> {{ __('Manage User') }}
            </a>
        </li>
        <li>
            <a class="flex items-center justify-start text-gray-500 py-2.5 px-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-red-400 hover:to-red-300 hover:text-white"
                href="#">
                <i class="fas fa-store "></i> {{ __('Manage Permission') }}
            </a>
        </li>
        <li>
            <a class="flex items-center justify-start text-gray-500 py-2.5 px-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-red-400 hover:to-red-300 hover:text-white"
                href="#">
                <i class="fas fa-exchange-alt "></i> {{ __('Settings') }}
            </a>
        </li>
    </ul>

    <!-- Logout -->
    <a class="flex items-center justify-start text-gray-500 py-2.5 px-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-red-400 hover:to-red-300 hover:text-white mt-auto"
        href="#">
        <i class="fas fa-sign-out-alt "></i>Logout
    </a>

    <!-- Señalador de ubicación -->
    <div class="bg-gradient-to-r from-red-300 to-red-500 h-px mt-2"></div>

    <!-- Copyright al final de la navegación lateral -->
    <p class="mb-1 px-5 py-3 text-left text-xs text-red-500">@2023, Build with ♥ by Kyriten</p>

</nav>
