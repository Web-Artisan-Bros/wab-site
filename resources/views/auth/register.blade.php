<x-guest-layout>
  <x-jet-authentication-card>
    <x-slot name="logo">
      <x-jet-authentication-card-logo/>
    </x-slot>

    <x-jet-validation-errors />

    <form method="POST" action="{{ route('register') }}">
      @csrf

      <livewire:form-input :label="trans('Name')"
                           :value="old('name')"
                           name="name"
                           :placeholder="trans('Mario Rossi')"
                           :attrs="['autofocus' => true, 'required'=> true, 'autocomplete'=>'name']"/>

      <livewire:form-input :label="trans('Email')"
                           :value="old('email')"
                           name="email"
                           :placeholder="trans('mario.rossi@gmail.com')"
                           type="email"
                           :attrs="['autofocus' => true, 'required'=> true]"/>

      <livewire:form-input :label="trans('Password')"
                           :value="old('password')"
                           name="password"
                           :placeholder="trans('******')"
                           type="password"
                           :attrs="['autocomplete' => 'new-password', 'required'=> true]"
      />

      <livewire:form-input :label="trans('Confirm Password')"
                           :value="old('password_confirmation')"
                           name="password_confirmation"
                           :placeholder="trans('******')"
                           type="password"
                           :attrs="['autocomplete' => 'new-password']"
      />

      @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
        <div class="mt-4">
          <x-jet-label for="terms">
            <div class="flex items-center">
              <x-jet-checkbox name="terms" id="terms" required/>

              <div class="ml-2">
                {!! trans('I agree to the :terms_of_service and :privacy_policy', [
                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.trans('Terms of Service').'</a>',
                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.trans('Privacy Policy').'</a>',
                ]) !!}
              </div>
            </div>
          </x-jet-label>
        </div>
      @endif


      <div class="text-center mb-4">
        <button class="btn btn-primary w-100">
          {{ trans('Register') }}
        </button>
      </div>

      <a class="small" href="{{ route('login') }}">
        {{ trans('Already registered?') }}
      </a>
    </form>
  </x-jet-authentication-card>
</x-guest-layout>
