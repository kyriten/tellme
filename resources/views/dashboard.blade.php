@role('admin')
    <x-admin-layout>
        <x-success-message />
    </x-admin-layout>
@endrole

@role('employee')
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

        <x-success-message />
    </x-app-layout>
@endrole

@role('user')
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

        <x-success-message />
    </x-app-layout>
@endrole
