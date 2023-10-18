<x-admin-layout>
    <form method="POST" action="users/store">
        @csrf

        <div class="flex justify-start mt-4 container">
            <!-- Button - Cancel -->
            <a href="javascript:history.back()" type="button" class="flex items-center justify-center text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 mx-2 py-2 dark:bg-gray-600 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">
                {{ __('Back') }}
            </a>
        </div>

        <div class="flex flex-wrap mx-auto container mt-4">
            <!-- Name -->
            <div class="md:w-1/2">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input class="block mt-1 w-full" id="name" name="name" type="text" :value="old('name')"
                    required autofocus autocomplete="name" placeholder="Abimanyu" />
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>

            <!-- Email Address -->
            <div class="md:w-1/2 md:pl-3">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input class="block mt-1 w-full" id="email" name="email" type="email" :value="old('email')"
                    required autocomplete="username" placeholder="example@mail.com" />
                <x-input-error class="mt-2" :messages="$errors->get('email')" />
            </div>

            <!-- Password -->
            <div class="mt-4 md:w-1/2">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input class="block mt-1 w-full" id="password" name="password" type="password" required
                    autocomplete="new-password"
                    placeholder="&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;" />

                <x-input-error class="mt-2" :messages="$errors->get('password')" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4 md:w-1/2 md:pl-3">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input class="block mt-1 w-full" id="password_confirmation" name="password_confirmation"
                    type="password" required autocomplete="new-password"
                    placeholder="&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;&#x2022;" />

                <x-input-error class="mt-2" :messages="$errors->get('password_confirmation')" />
            </div>

            <!-- Job Title -->
            <div class="mt-4 md:w-1/2">
                <x-input-label for="position" :value="__('Position')" />
                <x-text-input class="block mt-1 w-full" id="position" name="position" type="text" :value="old('position')"
                    required autocomplete="position" placeholder="Programmer" />
                <x-input-error class="mt-2" :messages="$errors->get('Position')" />
            </div>

            <!-- Branch -->
            <div class="mt-4 md:w-1/2 md:pl-3">
                <x-input-label for="branch" :value="__('Branch')" />

                <div class="relative">
                    <x-select class="appearence-none block mt-1 w-full" id="branch" name="id">
                        <option value="" selected disabled hidden>
                            {{ __('Select Branch') }}</option>
                        @foreach ($branches as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach

                    </x-select>
                </div>
                <x-input-error class="mt-2" :messages="$errors->get('branch')" />
            </div>
        </div>

        <div class="flex justify-end mt-4 container">
            <!-- Button - Cancel -->
            <a href="{{ url()->previous() }}" type="button" class="flex items-center justify-center text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 mx-2 py-2 dark:bg-gray-600 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">
                {{ __('Cancel') }}
            </a>

            <!-- Button - Add User -->
            <button class="flex items-center justify-center text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800">
                {{ __('Add Data') }}
            </button>
        </div>
    </form>
</x-admin-layout>
