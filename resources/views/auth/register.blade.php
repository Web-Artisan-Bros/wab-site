<x-guest-layout>
  <x-jet-authentication-card>
    <x-slot name="logo">
      <x-jet-authentication-card-logo/>
    </x-slot>

    <x-jet-validation-errors />

    <form method="POST" action="{{ route('register') }}">
      @csrf

      <livewire:form-input :label="__('Name')"
                           :value="old('name')"
                           name="name"
                           :placeholder="__('Mario Rossi')"
                           :attrs="['autofocus' => true, 'required'=> true, 'autocomplete'=>'name']"/>

      <livewire:form-input :label="__('Email')"
                           :value="old('email')"
                           name="email"
                           :placeholder="__('mario.rossi@gmail.com')"
                           type="email"
                           :attrs="['autofocus' => true, 'required'=> true]"/>

      <livewire:form-input :label="__('Password')"
                           :value="old('password')"
                           name="password"
                           :placeholder="__('******')"
                           type="password"
                           :attrs="['autocomplete' => 'new-password', 'required'=> true]"
      />

      <livewire:form-input :label="__('Confirm Password')"
                           :value="old('password_confirmation')"
                           name="password_confirmation"
                           :placeholder="__('******')"
                           type="password"
                           :attrs="['autocomplete' => 'new-password']"
      />

      @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
        <div class="mt-4">
          <x-jet-label for="terms">
            <div class="flex items-center">
              <x-jet-checkbox name="terms" id="terms" required/>

              <div class="ml-2">
                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                ]) !!}
              </div>
            </div>
          </x-jet-label>
        </div>
      @endif


      <div class="text-center mb-4">
        <button class="btn btn-primary w-100">
          {{ __('Register') }}
        </button>
      </div>

      <a class="small" href="{{ route('login') }}">
        {{ __('Already registered?') }}
      </a>
    </form>
  </x-jet-authentication-card>
</x-guest-layout>
