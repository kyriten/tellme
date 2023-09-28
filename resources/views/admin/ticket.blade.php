<x-admin-layout>
    <div class="flex-1 px-4 py-2">

        <!-- Header -->
        <header>
            <div class="py-4 px-4 sm:px-6 lg:px-8 block md:flex md:justify-around items-center">

                <!-- Header Title -->
                <h2 class="font-semibold text-xl flex-1 text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Ticket') }}
                </h2>

                <!-- Search Form -->
                <div class="relative max-w-xs w-full mr-4">
                    <div class="absolute top-1 left-2 inline-flex items-center p-2">
                        <i class="fas fa-search text-gray-400"></i>
                    </div>
                    <input
                        class="w-full h-10 pl-10 pr-4 py-1 text-base placeholder-gray-500 border rounded-full focus:border-[#991b1b] dark:focus:border-[#991b1b] focus:ring-[#991b1b] dark:focus:ring-[#991b1b]"
                        type="search" placeholder="Cari disini....">
                </div>

                <div class="flex items-center">
                    <button
                        class="focus:outline-none text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-4 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
                        type="button">Create</button>

                    <!-- Filter & Sort -->
                    <div class="flex gap-4">
                        <!-- Filter -->
                        <div class="relative">
                            <details class="group [&_summary::-webkit-details-marker]:hidden">
                                <summary
                                    class="flex cursor-pointer items-center gap-2 border-b border-gray-400 pb-1 text-gray-900 transition hover:border-gray-600">
                                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3" />
                                    </svg>
                                    <span class="text-sm font-medium"> Filter </span>

                                    <span class="transition group-open:-rotate-180">
                                        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </span>
                                </summary>

                                <div class="z-50 group-open:absolute group-open:start-0 group-open:top-auto group-open:mt-2"
                                    dir="rtl">
                                    <div class="w-96 rounded border border-gray-200 bg-white" dir="ltr">
                                        <header class="flex items-center justify-between p-4">
                                            <span class="text-sm text-gray-700"> 0 Selected </span>

                                            <button class="text-sm text-gray-900 underline underline-offset-4"
                                                type="button">
                                                Reset
                                            </button>
                                        </header>

                                        <ul class="space-y-1 border-t border-gray-200 p-4">
                                            <li>
                                                <label class="inline-flex items-center gap-2" for="FilterInStock">
                                                    <input class="h-5 w-5 rounded border-gray-300" id="FilterInStock"
                                                        type="checkbox" />

                                                    <span class="text-sm font-medium text-gray-700">
                                                        In Stock (5+)
                                                    </span>
                                                </label>
                                            </li>

                                            <li>
                                                <label class="inline-flex items-center gap-2" for="FilterPreOrder">
                                                    <input class="h-5 w-5 rounded border-gray-300" id="FilterPreOrder"
                                                        type="checkbox" />

                                                    <span class="text-sm font-medium text-gray-700">
                                                        Pre Order (3+)
                                                    </span>
                                                </label>
                                            </li>

                                            <li>
                                                <label class="inline-flex items-center gap-2" for="FilterOutOfStock">
                                                    <input class="h-5 w-5 rounded border-gray-300" id="FilterOutOfStock"
                                                        type="checkbox" />

                                                    <span class="text-sm font-medium text-gray-700">
                                                        Out of Stock (10+)
                                                    </span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </details>
                        </div>

                        <!-- Sort -->
                        <div class="relative">
                            <details class="group [&_summary::-webkit-details-marker]:hidden">
                                <summary
                                    class="flex cursor-pointer items-center gap-2 border-b border-gray-400 pb-1 text-gray-900 transition hover:border-gray-600">
                                    <svg class="h-4 w-4" width="24" height="24" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <path d="M3 9l4-4l4 4m-4 -4v14" />
                                        <path d="M21 15l-4 4l-4-4m4 4v-14" />
                                    </svg>
                                    <span class="text-sm font-medium"> Sort </span>

                                    <span class="transition group-open:-rotate-180">
                                        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </span>
                                </summary>

                                <div class="z-50 group-open:absolute group-open:start-0 group-open:top-auto group-open:mt-2"
                                    dir="rtl">
                                    <div class="w-96 rounded border border-gray-200 bg-white" dir="ltr">
                                        <header class="flex items-center justify-between p-4">
                                            <span class="text-sm text-gray-700">
                                                Sort by Date
                                            </span>

                                            <button class="text-sm text-gray-900 underline underline-offset-4"
                                                id="reset-date">
                                                Reset
                                            </button>
                                        </header>

                                        <div class="border-t border-gray-200 p-4">
                                            <div class="flex items-center" date-rangepicker>
                                                <div class="relative">
                                                    <div
                                                        class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            fill="currentColor" viewBox="0 0 20 20">
                                                            <path
                                                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                                        </svg>
                                                    </div>
                                                    <input
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                        name="start" type="text"
                                                        placeholder="Select date start">
                                                </div>
                                                <span class="mx-4 text-gray-500">to</span>
                                                <div class="relative">
                                                    <div
                                                        class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            fill="currentColor" viewBox="0 0 20 20">
                                                            <path
                                                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                                        </svg>
                                                    </div>
                                                    <input
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                        name="end" type="text" placeholder="Select date end">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </details>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Records -->
        <main
            class="bg-white dark:bg-gray-800 shadow mr-4 mb-4 min-h-screen items-center flex justify-around rounded-md">
            <h2>No Records Found</h2>
        </main>
    </div>
</x-admin-layout>
