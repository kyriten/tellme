<x-admin-layout>
    <div class="flex-1 px-4 py-2">

        <!-- Header -->
        <header>
            <div class="py-4 px-4 sm:px-6 lg:px-8 block md:flex md:justify-around items-center">

                <!-- Header Title -->
                <h2 class="font-semibold text-xl flex-1 text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('FAQ') }}
                </h2>
            </div>
        </header>

        <!-- Content -->
        <main class="bg-white dark:bg-gray-800 shadow mr-4 mb-4 px-4 py-4 min-h-screen items-center block rounded-md">

            <!-- Search Form -->
            <div class="flex flex-col justify-center items-center">
                <div class="relative max-w-xs w-full mr-4 flex">
                    <div class="absolute top-1 left-2 inline-flex items-center p-2">
                        <i class="fas fa-search text-gray-400"></i>
                    </div>
                    <input
                        class="w-full h-10 pl-10 pr-4 py-1 text-base placeholder-gray-500 border rounded-full focus:border-[#991b1b] dark:focus:border-[#991b1b] focus:ring-[#991b1b] dark:focus:ring-[#991b1b]"
                        type="search" placeholder="Cari disini....">
                </div>
            </div>

            <!-- Records -->
            <div class="bg-white min-h-screen rounded-lg flex flex-col justify-around items-center mt-6">
                <h2>No Records Found</h2>
            </div>
        </main>
    </div>
</x-admin-layout>
