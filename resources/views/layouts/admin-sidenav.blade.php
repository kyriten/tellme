<!-- Side Navigation Menu -->
<nav class="p-2 bg-white shadow w-64 flex-col hidden md:flex" id="sideNav">
    <ul>

        <!-- Dashboard -->
        <li class="mb-2">
            <a class="flex items-center justify-start text-center text-gray-500 py-2.5 px-4 rounded transition duration-200 hover:bg-red-600 hover:text-white"
                href="{{ route('dashboard') }}">
                <svg class="h-6 w-6 mr-3" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <rect x="4" y="4" width="6" height="5" rx="2" />
                    <rect x="4" y="13" width="6" height="7" rx="2" />
                    <rect x="14" y="4" width="6" height="16" rx="2" />
                </svg>
                {{ __('Dashboard') }}
            </a>
        </li>

        <!-- Divider -->
        <small class="ml-2 text-gray-500">Complaint & Users</small>
        <div class="bg-gray-200 h-0.5 rounded-full mx-2"></div>

        <li>
            <a class="flex items-center justify-start text-center text-gray-500 py-2.5 px-4 rounded transition duration-200 hover:bg-red-600 hover:text-white"
                href="{{ route('admin.managecomplaint') }}">
                <svg class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-2m-4-1v8m0 0l3-3m-3 3L9 8m-5 5h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293h3.172a1 1 0 00.707-.293l2.414-2.414a1 1 0 01.707-.293H20" />
                </svg>

                {{ __('Manage Complaint') }}
            </a>
        </li>
        <li>
            <a class="flex items-center justify-start text-gray-500 py-2.5 px-4 rounded transition duration-200 hover:bg-red-600 hover:text-white"
                href="{{ route('admin.manageuser') }}">
                <svg class="h-6 w-6 mr-3" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <ellipse cx="12" cy="6" rx="8" ry="3"></ellipse>
                    <path d="M4 6v6a8 3 0 0 0 16 0v-6" />
                    <path d="M4 12v6a8 3 0 0 0 16 0v-6" />
                </svg> {{ __('Manage User') }}
            </a>
        </li>
        <li class="mb-2">
            <a class="flex items-center justify-start text-gray-500 py-2.5 px-4 rounded transition duration-200 hover:bg-red-600 hover:text-white"
                href="{{ route('admin.managepermission') }}">
                <svg class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                </svg>
                {{ __('Manage Permission') }}
            </a>
        </li>

        <!-- Divider -->
        <small class="ml-2 text-gray-500">Adjustments</small>
        <div class="bg-gray-200 h-0.5 rounded-full mx-2"></div>
        <li>
            <a class="flex items-center justify-start text-gray-500 py-2.5 px-4 rounded transition duration-200 hover:bg-red-600 hover:text-white"
                href="{{ route('admin.settings') }}">
                <svg class="h-6 w-6 mr-3" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <path
                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <circle cx="12" cy="12" r="3" />
                </svg> {{ __('Settings') }}
            </a>
        </li>
    </ul>

    <!-- Divider -->
    <div class="mt-auto bg-gradient-to-r from-red-300 to-[#991b1b] h-px"></div>

    <!-- Copyright -->
    <p class="mb-1 px-5 py-3 text-left text-xs text-[#991b1b]">@2023, Build with ♥ by Kyriten</p>

</nav>
