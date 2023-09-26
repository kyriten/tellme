<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="flex flex-wrap">
            <!-- Name -->
            <div class="md:w-1/2 ">
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

            {{-- <!-- Job Title -->
            <div class="mt-4 md:w-1/2">
                <x-input-label for="position" :value="__('Position')" />
                <x-text-input class="block mt-1 w-full" id="position" name="position" type="text" :value="old('position')"
                    required autocomplete="position" placeholder="Programmer" />
                <x-input-error class="mt-2" :messages="$errors->get('Position')" />
            </div> --}}

            {{-- <!-- Branch -->
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
            </div> --}}
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Sign up') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
