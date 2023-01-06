<div class="form-floating mb-4">
  <input type="{{ $type }}"
         class="form-control"
         id="{{ $this->getId() }}"
         name="{{ $name }}"
         placeholder="{{ $placeholder }}"
         @if($bindValue)
           wire:model="value"
         @else
           :value="{{ $value  }}"
         @endif
         {!! $attributes !!}>
  <label :for="{{ $this->getId() }}">{{ $label }}</label>
</div>
