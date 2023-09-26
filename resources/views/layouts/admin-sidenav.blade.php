<nav x-data="{ open: false }">
    <!-- Side Navigation Menu -->
    <span class="absolute text-white text-4xl top-5 left-4 mt-16 cursor-pointer" onclick="openSidebar()">
        <i class="bi bi-filter-left px-2 bg-[#991b1b] rounded-md"></i>
    </span>
    <div class="sidebar fixed top-0 bottom-0 mt-16 lg:left-0 p-2 w-[300px] overflow-y-auto text-center bg-[#991b1b]">
        <div class="p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer bg-red-300 text-gray-800">
            <i class="bi bi-search text-sm"></i>
            <input class="text-[15px] ml-4 w-full rounded-lg bg-transparent border-[#991b1b] focus:outline-none"
                type="text" placeholder="Search" />
        </div>
        <div
            class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-red-300 hover:text-gray-800 text-white">
            <i class="bi bi-house-door-fill"></i>
            <span class="text-[15px] ml-4 font-bold">Home</span>
        </div>
        <div
            class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-red-300 hover:text-gray-800 text-white">
            <i class="bi bi-bookmark-fill"></i>
            <span class="text-[15px] ml-4 font-bold">Bookmark</span>
        </div>
        <div class="my-4 bg-gray-600 h-[1px]"></div>
        <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-red-300 hover:text-gray-800 text-white"
            onclick="dropdown()">
            <i class="bi bi-chat-left-text-fill"></i>
            <div class="flex justify-between w-full items-center">
                <span class="text-[15px] ml-4 font-bold">Chatbox</span>
                <span class="text-sm rotate-0" id="arrow">
                    <i class="bi bi-chevron-down"></i>
                </span>
            </div>
        </div>
        <div class="text-left text-sm mt-2 w-4/5 mx-auto text-white font-bold" id="submenu">
            <h1 class="cursor-pointer p-2 hover:bg-red-300 hover:text-gray-800 rounded-md mt-1">
                Social
            </h1>
            <h1 class="cursor-pointer p-2 hover:bg-red-300 hover:text-gray-800 rounded-md mt-1">
                Personal
            </h1>
            <h1 class="cursor-pointer p-2 hover:bg-red-300 hover:text-gray-800 rounded-md mt-1">
                Friends
            </h1>
        </div>
        <div
            class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-red-300 hover:text-gray-800 text-white">
            <i class="bi bi-box-arrow-in-right"></i>
            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <a class="text-[15px] ml-4 font-bold" :href="route('logout')"
                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                    {{ __('Logout') }}
                </a>
            </form>
        </div>
    </div>
</nav>
