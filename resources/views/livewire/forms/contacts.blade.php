{{-- The site is archived: the contact form is disabled and nothing is sent or stored --}}
@php
  $archivedMessages = [
    'it' => 'Questo sito è archiviato e il modulo dei contatti non è più attivo.',
    'en' => 'This website is archived and the contact form is no longer active.',
    'ro' => 'Acest site este arhivat, iar formularul de contact nu mai este activ.',
  ];
@endphp

<div class="display-6 text-center p-5 border border-3 border-dark">
  {{ $archivedMessages[app()->getLocale()] ?? $archivedMessages['it'] }}
</div>
