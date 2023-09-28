<!-- Side Navigation Menu -->
<nav class="p-2 bg-white shadow w-64 flex-col hidden md:flex" id="sideNav">
    <ul>

        <!-- Menu Group -->
        <small class="ml-2 text-gray-500">GENERAL</small>

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

        <!-- Ticket -->
        <li class="mb-2">
            <a class="flex items-center justify-start text-center text-gray-500 py-2.5 px-4 rounded transition duration-200 hover:bg-red-600 hover:text-white"
                href="{{ route('admin.ticket') }}">
                <svg class="h-6 w-6 mr-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="22 12 16 12 14 15 10 15 8 12 2 12" />
                    <path
                        d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z" />
                </svg>
                {{ __('Ticket') }}
            </a>
        </li>

        <!-- Message -->
        <li class="mb-2">
            <a class="flex items-center justify-start text-center text-gray-500 py-2.5 px-4 rounded transition duration-200 hover:bg-red-600 hover:text-white"
                href="{{ route('admin.message') }}">
                <svg class="h-6 w-6 mr-3" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <path d="M21 14l-3 -3h-7a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1h9a1 1 0 0 1 1 1v10" />
                    <path d="M14 15v2a1 1 0 0 1 -1 1h-7l-3 3v-10a1 1 0 0 1 1 -1h2" />
                </svg>
                {{ __('Message') }}
            </a>
        </li>

        <!-- Menu Group -->
        <small class="ml-2 text-gray-500">Administration</small>

        <!-- Divider -->
        <div class="bg-gray-200 h-0.5 rounded-full mx-2"></div>

        <!-- Department -->
        <li>
            <a class="flex items-center justify-start text-center text-gray-500 py-2.5 px-4 rounded transition duration-200 hover:bg-red-600 hover:text-white"
                href="{{ route('admin.department') }}">
                <svg class="h-6 w-6 mr-3" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <line x1="3" y1="21" x2="21" y2="21" />
                    <path d="M5 21v-14l8 -4v18" />
                    <path d="M19 21v-10l-6 -4" />
                    <line x1="9" y1="9" x2="9" y2="9.01" />
                    <line x1="9" y1="12" x2="9" y2="12.01" />
                    <line x1="9" y1="15" x2="9" y2="15.01" />
                    <line x1="9" y1="18" x2="9" y2="18.01" />
                </svg>

                {{ __('Department') }}
            </a>
        </li>

        <!-- Label -->
        <li>
            <a class="flex items-center justify-start text-center text-gray-500 py-2.5 px-4 rounded transition duration-200 hover:bg-red-600 hover:text-white"
                href="{{ route('admin.label') }}">
                <svg class="h-6 w-6 mr-3" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <path d="M20 6a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-11l-5 -5a1.5 1.5 0 0 1 0 -2l5 -5Z" />
                    <path d="M12 10l4 4m0 -4l-4 4" />
                </svg>

                {{ __('Label') }}
            </a>
        </li>

        <!-- Status -->
        <li>
            <a class="flex items-center justify-start text-center text-gray-500 py-2.5 px-4 rounded transition duration-200 hover:bg-red-600 hover:text-white"
                href="{{ route('admin.status') }}">
                <svg class="h-6 w-6 mr-3" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <path d="M3.5 5.5l1.5 1.5l2.5 -2.5" />
                    <path d="M3.5 11.5l1.5 1.5l2.5 -2.5" />
                    <path d="M3.5 17.5l1.5 1.5l2.5 -2.5" />
                    <line x1="11" y1="6" x2="20" y2="6" />
                    <line x1="11" y1="12" x2="20" y2="12" />
                    <line x1="11" y1="18" x2="20" y2="18" />
                </svg>

                {{ __('Status') }}
            </a>
        </li>

        <!-- Priority -->
        <li>
            <a class="flex items-center justify-start text-center text-gray-500 py-2.5 px-4 rounded transition duration-200 hover:bg-red-600 hover:text-white"
                href="{{ route('admin.priority') }}">
                <svg class="h-6 w-6 mr-3" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <line x1="5" y1="5" x2="5" y2="21" />
                    <line x1="19" y1="5" x2="19" y2="14" />
                    <path d="M5 5a5 5 0 0 1 7 0a5 5 0 0 0 7 0" />
                    <path d="M5 14a5 5 0 0 1 7 0a5 5 0 0 0 7 0" />
                </svg>

                {{ __('Priority') }}
            </a>
        </li>

        <!-- Manage User -->
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

        <!-- Manage Permission -->
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

        <!-- Menu Group -->
        <small class="ml-2 text-gray-500">Adjustments & Info</small>
        <!-- Divider -->
        <div class="bg-gray-200 h-0.5 rounded-full mx-2"></div>

        <!-- Settings -->
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

        <!-- FAQ -->
        <li>
            <a class="flex items-center justify-start text-gray-500 py-2.5 px-4 rounded transition duration-200 hover:bg-red-600 hover:text-white"
                href="{{ route('admin.faq') }}">
                <svg class="h-6 w-6 mr-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10" />
                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                    <line x1="12" y1="17" x2="12.01" y2="17" />
                </svg> {{ __('FAQ') }}
            </a>
        </li>
    </ul>

    <!-- Divider -->
    <div class="mt-auto bg-gradient-to-r from-red-300 to-[#991b1b] h-px"></div>

    <!-- Copyright -->
    <p class="mb-1 px-5 py-3 text-left text-xs text-[#991b1b]">@2023, Build with ♥ by Kyriten</p>

</nav>
