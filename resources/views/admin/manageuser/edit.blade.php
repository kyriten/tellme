<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="flex max-w-7xl mx-auto sm:px-6 lg:px-6 space-y-6">
            <div class="flex-auto p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('admin.manageuser.partials.update-profile-information-form')
                </div>
            </div>

            <div class="flex-1 p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('admin.manageuser.partials.update-password-form')
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
