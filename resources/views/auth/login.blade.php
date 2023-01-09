<x-guest-layout>
  <x-jet-authentication-card>
    <x-slot name="logo">
      <x-jet-authentication-card-logo/>
    </x-slot>

    <x-jet-validation-errors/>

    @if (session('status'))
      <div class="mb-4">
        {{ session('status') }}
      </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
      @csrf

      <livewire:form-input :label="__('Email')"
                           :value="old('email')"
                           :bindValue="false"
                           name="email"
                           :placeholder="__('mario.rossi@gmail.com')"
                           type="email"
                           :attrs="['autofocus' => true, 'required'=> true]"/>

      <livewire:form-input :label="__('Password')"
                           :value="old('password')"
                           :bindValue="false"
                           name="password"
                           :placeholder="__('******')"
                           type="password"
                           :attrs="['autocomplete' => 'current-password', 'required'=> true]"
      />

      {{--<div class="block mt-4">
        <label for="remember_me" class="flex items-center">
          <x-jet-checkbox id="remember_me" name="remember"/>
          <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
        </label>
      </div>--}}

      <div class="text-center mb-4">
        <button class="btn btn-outline-primary w-100">
          {{ __('Log in') }}
        </button>
      </div>

      @if (Route::has('password.request'))
        <a class="small d-block" href="{{ route('password.request') }}">
          {{ __('Forgot your password?') }}
        </a>
      @endif
    </form>
  </x-jet-authentication-card>
</x-guest-layout>
