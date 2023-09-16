@if (session('message'))
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 relative shadow-sm sm:rounded-lg inline-flex w-full items-center"
                role="alert">
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                        clip-rule="evenodd" />
                </svg>
                <div class="text-gray-800 dark:text-gray-100 ml-3">
                    {{ session('message') }} <strong class="text-red-500">{{ Auth::user()->name }}</strong>
                    {{ __('you are logged in!') }}
                </div>
            </div>
        </div>
    </div>
@endif
