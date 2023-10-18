<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2>
    </header>

    <form class="mt-6 space-y-6" method="post" action="/users/{{ $users->id }}">
        @csrf

        @method('patch')
        <!-- User Name -->
        <div>
            <x-input-label for="user_name" :value="__('Username')" />
            <x-text-input class="mt-1 block w-full" id="username" name="username" type="text" :value="old('username', $users->username)"
                required autofocus autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('username')" />
        </div>

        <!-- Full Name -->
        <div>
            <x-input-label for="full_name" :value="__('Fullname')" />
            <x-text-input class="mt-1 block w-full" id="fullname" name="fullname" type="text" :value="old('fullname', $users->fullname)"
                required autofocus autocomplete="fullname" />
            <x-input-error class="mt-2" :messages="$errors->get('fullname')" />
        </div>

        <!-- Email Address-->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input class="mt-1 block w-full" id="email" name="email" type="email" :value="old('email', $users->email)"
                required autocomplete="email" />
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

        <!-- Phone -->
        <div>
            <x-input-label for="phone" :value="__('Phone Number')" />
            <x-text-input class="mt-1 block w-full" id="phone" name="phone" type="text" :value="old('phone', $users->phone)"
                required autofocus autocomplete="phone" />
            <x-input-error class="mt-2" :messages="$errors->get('phone')" />
        </div>

        <!-- Gender -->
        <div>
            <x-input-label for="gender" :value="__('Gender')" />
            <x-text-input class="mt-1 block w-full" id="gender" name="gender" type="text" :value="old('gender', $users->gender)"
                required autofocus autocomplete="gender" />
            <x-input-error class="mt-2" :messages="$errors->get('gender')" />
        </div>

        <!-- Department -->
        <div>
            <x-input-label for="department" :value="__('Department')" />
            <x-text-input class="mt-1 block w-full" id="department" name="department" type="text" :value="old('department', $users->department)"
                required autofocus autocomplete="department" />
            <x-input-error class="mt-2" :messages="$errors->get('department')" />
        </div>

        <!-- Position -->
        <div>
            <x-input-label for="position" :value="__('Position')" />
            <x-text-input class="mt-1 block w-full" id="position" name="position" type="text" :value="old('position', $users->position)"
                required autofocus autocomplete="position" />
            <x-input-error class="mt-2" :messages="$errors->get('position')" />
        </div>

        <!-- Branch Office -->
        <div>
            <x-input-label for="branch_id" :value="__('Branch Office')" />
            <div class="relative">
                <x-select class="block mt-1 w-full" id="branch_id" name="branch_id">
                    @foreach ($branches as $branch)
                        <option value="{{ $branch->branch_id }}"
                            {{ old('branch_id', $users->branch_id) == $branch->id ? 'selected' : '' }}>
                            {{ $branch->name }}
                        </option>
                    @endforeach
                </x-select>
                <x-input-error class="mt-2" :messages="$errors->get('branch_office')" />
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
