<x-mail::message>
  # {!! trans('mail_contact-client-review.greeting', ["name"=> $contact->name]) !!}

  {!!  trans('mail_contact-client-review.message')  !!}

  <br>
  
  ---

  <div><strong>{{ trans("forms.name") }}</strong><br>{{ $contact->name }}</div><br>
  <div><strong>{{ trans("forms.email") }}</strong><br>{{ $contact->email }}</div><br>
  <div><strong>{{ trans("forms.phone") }}</strong><br>{{ $contact->phone ?? "-" }}</div><br>
  <div><strong>{{ trans("forms.date") }}</strong><br>{{ $contact->created_at->isoFormat("lll") }}</div><br>
  <div><strong>{{ trans("forms.message") }}</strong><br>{{ $contact->message }}</div>

  ---

  <br>

  {{ trans('mail_contact-client-review.bye') }},<br>
  {{ env('MAIL_FROM_NAME') }}
</x-mail::message>
