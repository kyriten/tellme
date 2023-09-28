<div class="flex-1 px-4 py-2">
    <x-success-message />

    <!-- Header -->
    <header>
        <div class="max-w-7xl py-4 px-4 sm:px-6 lg:px-8 block md:flex md:justify-around items-center">

            <!-- Header Title -->
            <h2 class="font-semibold text-xl flex-1 text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </div>
    </header>

    <!-- Dashboard -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-2 p-2 bg-white dark:bg-gray-800 shadow mb-4 min-h-screen">

        <!-- Left Section -->
        <div class="bg-white p-4 rounded-md">
            <h2 class="text-gray-500 text-lg font-semibold pb-1">Report Complaint</h2>

            <!-- Separator -->
            <div class="my-1"></div>
            <div class="bg-gradient-to-r from-[#991b1b] to-[#991b1b] h-px  mb-6"></div>

            <!-- Chart Container -->
            <div class="chart-container" style="position: relative; height:150px; width:100%">
                <!-- Show Chart -->
                <canvas id="reportComplaintChart"></canvas>
            </div>
        </div>

        <!-- Right Section -->
        <div class="bg-white p-4 rounded-md">
            <h2 class="text-gray-500 text-lg font-semibold pb-1">Incoming Complaint</h2>

            <!-- Separator -->
            <div class="my-1"></div>
            <div class="bg-gradient-to-r from-[#991b1b] to-[#991b1b] h-px mb-6"></div>

            <!-- Chart Container -->
            <div class="chart-container" style="position: relative; height:150px; width:100%">

                <!-- Show Chart -->
                <canvas id="incomingComplaintChart"></canvas>
            </div>
        </div>

        <!-- Most Complaint Section -->
        <div class="bg-white p-4 rounded-md mt-4">
            <h2 class="text-gray-500 text-lg font-semibold pb-2">Most Department</h2>

            <!-- Separator -->
            <div class="my-1"></div>
            <div class="bg-gradient-to-r from-[#991b1b] to-[#991b1b] h-px mb-2"></div>

            <!-- Table 1 -->
            <table class="w-full table-auto text-sm">
                <thead>
                    <tr class="text-sm leading-normal">
                        <th
                            class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                            Department</th>
                        <th
                            class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                            Office</th>
                        <th
                            class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                            Total Complaint</th>
                        <th
                            class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                            Total Solved</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-grey-lighter text-center">
                        <td class="py-2 px-4 border-b border-grey-light">Training Center</td>
                        <td class="py-2 px-4 border-b border-grey-light">Depok</td>
                        <td class="py-2 px-4 border-b border-grey-light">10</td>
                        <td class="py-2 px-4 border-b border-grey-light">2</td>
                    </tr>
                    <tr class="hover:bg-grey-lighter text-center">
                        <td class="py-2 px-4 border-b border-grey-light">IT</td>
                        <td class="py-2 px-4 border-b border-grey-light">Depok</td>
                        <td class="py-2 px-4 border-b border-grey-light">6</td>
                        <td class="py-2 px-4 border-b border-grey-light">5</td>
                    </tr>
                    <tr class="hover:bg-grey-lighter text-center">
                        <td class="py-2 px-4 border-b border-grey-light">HRD</td>
                        <td class="py-2 px-4 border-b border-grey-light">Depok</td>
                        <td class="py-2 px-4 border-b border-grey-light">4</td>
                        <td class="py-2 px-4 border-b border-grey-light">2</td>
                    </tr>
                    <tr class="hover:bg-grey-lighter text-center">
                        <td class="py-2 px-4 border-b border-grey-light">Administrasi</td>
                        <td class="py-2 px-4 border-b border-grey-light">Bogor</td>
                        <td class="py-2 px-4 border-b border-grey-light">3</td>
                        <td class="py-2 px-4 border-b border-grey-light">3</td>
                    </tr>
                    <tr class="hover:bg-grey-lighter text-center">
                        <td class="py-2 px-4 border-b border-grey-light">Administrasi</td>
                        <td class="py-2 px-4 border-b border-grey-light">Pamulang</td>
                        <td class="py-2 px-4 border-b border-grey-light">2</td>
                        <td class="py-2 px-4 border-b border-grey-light">2</td>
                    </tr>
                    <tr class="hover:bg-grey-lighter text-center">
                        <td class="py-2 px-4 border-b border-grey-light">VIP</td>
                        <td class="py-2 px-4 border-b border-grey-light">Cibubur</td>
                        <td class="py-2 px-4 border-b border-grey-light">1</td>
                        <td class="py-2 px-4 border-b border-grey-light">1</td>
                    </tr>
                </tbody>
            </table>

            <!-- Bottom -->
            <div class="text-right mt-4">
                <button
                    class="bg-red-500 hover:bg-red-600 text-sm text-white font-bold rounded-xl transition duration-200 py-2 px-4">
                    More
                </button>
            </div>
        </div>

        <!-- Complaints Report Section -->
        <div class="bg-white p-4 rounded-md mt-4">
            <h2 class="text-gray-500 text-lg font-semibold pb-2">Most Category</h2>

            <!-- Separator -->
            <div class="my-1"></div>
            <div class="bg-gradient-to-r from-[#991b1b] to-[#991b1b] h-px mb-2"></div>

            <!-- Table 2 -->
            <table class="w-full table-auto text-sm">
                <thead>
                    <tr class="text-sm leading-normal">
                        <th
                            class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                            Device</th>
                        <th
                            class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">
                            Date</th>
                        <th
                            class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light text-right">
                            Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-2 px-4 border-b border-grey-light">Laptop</td>
                        <td class="py-2 px-4 border-b border-grey-light">27/09/2023</td>
                        <td class="py-2 px-4 border-b border-grey-light text-right">15</td>
                    </tr>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-2 px-4 border-b border-grey-light">Monitor</td>
                        <td class="py-2 px-4 border-b border-grey-light">28/09/2023</td>
                        <td class="py-2 px-4 border-b border-grey-light text-right">9</td>
                    </tr>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-2 px-4 border-b border-grey-light">Printer</td>
                        <td class="py-2 px-4 border-b border-grey-light">29/09/2023</td>
                        <td class="py-2 px-4 border-b border-grey-light text-right">8</td>
                    </tr>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-2 px-4 border-b border-grey-light">Router</td>
                        <td class="py-2 px-4 border-b border-grey-light">30/09/2023</td>
                        <td class="py-2 px-4 border-b border-grey-light text-right">2</td>
                    </tr>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-2 px-4 border-b border-grey-light">Server</td>
                        <td class="py-2 px-4 border-b border-grey-light">31/09/2023</td>
                        <td class="py-2 px-4 border-b border-grey-light text-right">1</td>
                    </tr>
                </tbody>
            </table>
            <!-- Button More -->
            <div class="text-right mt-4">
                <button
                    class="bg-red-500 hover:bg-red-600 text-sm text-white font-bold rounded-xl transition duration-200 py-2 px-4">
                    More
                </button>
            </div>
        </div>
    </div>

</div>
