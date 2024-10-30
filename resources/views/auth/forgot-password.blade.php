<x-guest-layout>
    <div class="w-2/3 mx-auto sm:px-6 lg:px-8">
     <div class="mb-4 text-sm text-gray-600">
        {{ __('Lupa kata sandi Anda? Tidak masalah. Cukup beri tahu kami alamat email Anda dan kami akan mengirimkan email berisi tautan pengaturan ulang kata sandi sehingga Anda dapat memilih yang baru.') }}
     </div>

     <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

     <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
            <div>
              <x-input.input-label for="email" :value="__('Email')" />
              <x-input.text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus/>
              <x-input.input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

          <div class="flex items-center justify-end mt-4">
            <x-button.primary-button>
                {{ __('Email Password Reset Link') }}
            </x-button.primary-button>
          </div>
      </form>
    </div>
</x-guest-layout>
