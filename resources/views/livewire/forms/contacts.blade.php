@if(!$formSent)
  <form wire:submit.prevent="store" method="POST">
    @csrf

    <fieldset>
      <div class="form-floating mb-3">
        <input type="text"
               class="form-control @error('name') is-invalid @enderror"
               id="nameFormInput"
               placeholder="{{ trans('forms.name_placeholder') }}" wire:model="name">
        @error('name')
        <div class="invalid-feedback">{{ $message }}</div> @enderror

        <label for="nameFormInput" class="form-label">
          <span class="accent-color">*</span>
          {{ trans('forms.name') }}
        </label>
      </div>

      <div class="form-floating mb-3">
        <input type="email"
               class="form-control @error('email') is-invalid @enderror"
               id="emailFormInput" placeholder="{{ trans('forms.email_placeholder') }}"
               wire:model="email">
        @error('email')
        <div class="invalid-feedback">{{ $message }}</div> @enderror

        <label for="emailFormInput">
          <span class="accent-color">*</span>
          {{ trans('forms.email') }}
        </label>
      </div>

      <div class="form-floating mb-3">
        <input type="text"
               class="form-control @error('phone') is-invalid @enderror"
               id="phoneFormInput" placeholder="{{ trans('forms.phone_placeholder') }}"
               wire:model="phone">
        @error('phone')
        <div class="invalid-feedback">{{ $message }}</div> @enderror

        <label for="phoneFormInput" class="form-label">{{ trans('forms.phone') }}</label>
      </div>

      <div class="form-floating mb-3">
      <textarea class="form-control @error('message') is-invalid @enderror"
                id="messageFormInput" rows="3"
                placeholder="{{ trans('forms.message_placeholder') }}"
                wire:model="message"
                contenteditable></textarea>
        @error('message')
        <div class="invalid-feedback">{{ $message }}</div> @enderror

        <label for="messageFormInput" class="form-label">
          <span class="accent-color">*</span>
          {{ trans('forms.message') }}
        </label>
      </div>
    </fieldset>

    <p class="accent-color mb-5 ms-3 mt-2">* {{ trans('forms.required_field_msg') }}</p>

    <button type="submit" class="btn btn-themed w-100 mb-4" wire:loading.attr="disabled" wire:target="submit">
      <div class="spinner-border spinner-border-sm" role="status" wire:loading.delay.class="d-inline-block"
           style="display: none;">
        <span class="visually-hidden">Loading...</span>
      </div>

      {{ trans('forms.send_btn') }}

      <x-svg-icon icon="VectorArrow"></x-svg-icon>
    </button>
  </form>
@else
  <div class="display-6 text-center p-5 border border-3 border-dark">
    {{ __('Grazie per averci contattato! Ti risponderemo il prima possibile!') }}
  </div>
@endif
