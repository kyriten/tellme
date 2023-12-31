<header x-data="{ open: false }">
    <!-- Primary Navigation Menu -->
    <nav
        class="bg-white dark:bg-gray-900 dark:text-slate-100 text-gray-500 shadow h-18 w-full px-8 py-2 flex items-center justify-between">
        <div class="flex items-center">
            <!-- Logo -->
            <div class="shrink-0 flex items-center">
                <a href="{{ route('landing-page') }}">
                    <x-application-logo class="block w-auto fill-current text-gray-800 dark:text-gray-200" />
                </a>
            </div>
        </div>

        <!-- Search Form -->
        <div class="relative max-w-md w-full">
            <div class="absolute top-1 left-2 inline-flex items-center p-2">
                <i class="fas fa-search text-gray-400"></i>
            </div>
            <input
                class="w-full h-10 pl-10 pr-4 py-1 text-base placeholder-gray-500 border-gray-500 rounded-full focus:border-red-500 dark:focus:border-red-500 focus:ring-red-500 dark:focus:ring-red-500"
                type="search" placeholder="Cari disini....">
        </div>

        <!-- Right Button Group -->
        <div class="hidden sm:flex sm:items-center sm:ml-6">
            <!-- Notification Dropdown -->
            <button
                class="relative inline-flex items-center p-3 text-sm font-medium text-center text-whitefocus:ring-4 text-gray-500 hover:text-red-500 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">
                <svg class="h-5 w-5 " viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9" />
                    <path d="M13.73 21a2 2 0 0 1-3.46 0" />
                </svg>
                <span class="sr-only">Notifications</span>
                <div
                    class="absolute inline-flex items-center justify-center w-6 h-6 text-[12px] p-2 font-medium text-white bg-red-500 border-2 border-white rounded-full -top-1 -right-0 dark:border-slate-500">
                    5</div>
            </button>

            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button
                        class="inline-flex items-center px-3 py-2 text-sm leading-4 font-medium text-gray-500 dark:text-gray-400 hover:text-red-500 dark:hover:text-red-300 focus:outline-none transition ease-in-out duration-150">
                        <div>{{ Auth::user()->user_name }}</div>

                        <div class="ml-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link href="{{ route('admin.edit') }}">
                        {{ __('Profile') }}
                    </x-dropdown-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                            this.closest('form').submit();">
                            {{ __('Logout') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </div>

        <!-- Hamburger -->
        <div class="-mr-2 flex items-center sm:hidden">
            <button
                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out"
                @click="open = ! open">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path class="inline-flex" :class="{ 'hidden': open, 'inline-flex': !open }" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path class="hidden" :class="{ 'hidden': !open, 'inline-flex': open }" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Responsive Navigation Menu -->
        <div class="hidden sm:hidden" :class="{ 'block': open, 'hidden': !open }">
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-responsive-nav-link>
            </div>

            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}
                    </div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <!-- Notification Dropdown -->
                    <x-responsive-nav-link
                        class="relative inline-flex items-center p-3 focus:ring-4 text-gray-500 hover:text-red-500 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button">
                        {{ __('Notifications') }}
                        <div
                            class="absolute inline-flex items-center justify-center w-6 h-6 text-[12px] p-2 font-medium text-white bg-red-500 border-2 border-white rounded-full -right-0 dark:border-slate-500">
                            5</div>
                    </x-responsive-nav-link>

                    <x-responsive-nav-link :href="route('admin.edit')">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</header>
