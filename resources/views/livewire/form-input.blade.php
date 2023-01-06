<div class="form-floating mb-4">
  <input type="{{ $type }}"
         class="form-control"
         id="{{ $this->getId() }}"
         placeholder="{{ $placeholder }}"
         wire:model="value"
      {!! $attributes !!}>
  <label :for="{{ $this->getId() }}">{{ $label }}</label>
</div>
