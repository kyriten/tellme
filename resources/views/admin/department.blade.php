<x-admin-layout>
    <div class="flex-1 px-4 py-2">

        <!-- Header -->
        <header>
            <div class="py-4 px-4 sm:px-6 lg:px-8 block md:flex md:justify-around items-center">

                <!-- Header Title -->
                <h2 class="font-semibold text-xl flex-1 text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Department') }}
                </h2>

                <div class="flex items-center">
                    <button
                        class="focus:outline-none text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-4 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
                        type="button">Create</button>
                </div>
            </div>
        </header>

        <!-- Content -->
        <main class="bg-white dark:bg-gray-800 shadow mr-4 mb-4 px-4 py-4 min-h-screen items-center block rounded-md">

            <!-- Records -->
            <div class="bg-white min-h-screen rounded-lg flex flex-col justify-center items-center mt-6">
                <h2>No Records Found</h2>
            </div>
        </main>
    </div>
</x-admin-layout>
