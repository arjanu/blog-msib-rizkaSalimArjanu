@section('title', 'Masuk')

<x-guest-layout>
    <div class="py-12">
        <div class="w-2/3 mx-auto sm:px-6 lg:px-8">
            @if ($errors->any())
                <x-alert.error :errors="$errors->all()" />
            @endif

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <x-card.card-default class="static">
                <x-form action="{{ route('login') }}">
                    @csrf

                    <!-- Username -->
                    <div>
                        <x-input.input-label for="username" :value="__('Username')" />
                        <x-input.text-input id="username" class="mt-1 w-full" type="text" name="username"
                            :value="old('username')" required autofocus autocomplete="username" placeholder="masukkan username"/>
                        <x-input.input-error :messages="$errors->get('username')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input.input-label for="password" :value="__('Password')" />

                        <x-input.text-input id="password" class="mt-1 w-full" type="password" name="password" required
                            autocomplete="current-password" placeholder="masukkan password"/>

                        <x-input.input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Forgot Password -->
                    <div class="flex items-center justify-between mt-4">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="underline text-sm text-gray-600 hover:text-gray-900">
                                {{ __('Lupa kata sandi Anda?') }}
                            </a>
                        @endif
                    </div>


                    <!-- Remember Me -->
                    <div class="mt-4">
                        <x-input.input-label for="remember" class="label cursor-pointer mr-3">
                            <x-input.checkbox name="remember" id="remember" :title="__('Ingat saya')" />
                        </x-input.input-label>
                    </div>

                    <div class="flex items-center justify-end mt-4 col-span-2">
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">
                                <x-button.link-button type="button">
                                    {{ __('Belum Daftar?') }}
                                </x-button.link-button>
                            </a>
                        @endif

                        <x-button.primary-button class="ms-3" type="submit">
                            {{ __('Masuk') }}
                        </x-button.primary-button>
                    </div>
                </x-form>
            </x-card.card-default>
        </div>
    </div>
</x-guest-layout>
