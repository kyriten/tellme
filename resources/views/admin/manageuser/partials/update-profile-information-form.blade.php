<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form class="mt-6 space-y-6" method="post" action="{{ route('profile.update') }}">
        @csrf
        @method('patch')

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input class="mt-1 block w-full" id="name" name="name" type="text" :value="old('name', $user->name)"
                required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <!-- Email Address-->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input class="mt-1 block w-full" id="email" name="email" type="email" :value="old('email', $user->email)"
                required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('Your email address is unverified.') }}

                        <button
                            class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                            form="send-verification">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <!-- Job Title -->
        <div>
            <x-input-label for="position" :value="__('Position')" />
            <x-text-input class="mt-1 block w-full" id="position" name="position" type="text" :value="old('position', $user->position)"
                required autofocus autocomplete="position" />
            <x-input-error class="mt-2" :messages="$errors->get('position')" />
        </div>

        <!-- Branch -->
        <div>
            <x-input-label for="branch" :value="__('Branch')" />
            <div class="relative">
                <x-select class="block mt-1 w-full" id="branch" name="id">
                    <option value="@selected(old('branch'))" selected disabled hidden></option>

                    <option value="Bogor">Bogor</option>
                    <option value="Depok">Depok</option>
                    <option value="Cibubur">Cibubur</option>
                    <option value="Cimanggis">Cimanggis</option>
                    <option value="Parung">Parung</option>
                    <option value="Pamulang">Pamulang</option>
                </x-select>
                <x-input-error class="mt-2" :messages="$errors->get('branch')" />
            </div>

            <div class="flex items-center gap-4 mt-4">
                <x-primary-button>{{ __('Save') }}</x-primary-button>

                @if (session('status') === 'profile-updated')
                    <p class="text-sm text-gray-600 dark:text-gray-400" x-data="{ show: true }" x-show="show"
                        x-transition x-init="setTimeout(() => show = false, 2000)">{{ __('Saved.') }}</p>
                @endif
            </div>
    </form>
</section>
