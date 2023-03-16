<?php

namespace App\Http\Livewire\Forms;

use App\Http\Controllers\App;
use App\Http\Requests\StoreContacts;
use App\Mail\ContactAdminNotify;
use App\Mail\ContactClientReview;
use App\Models\Contact;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Contacts extends Component {
  public string $name;
  public string $email;
  public string $phone;
  public string $message;
  
  public bool $formSent = false;
  
  protected $rules = [
    'name'    => 'required|string|max:255',
    'email'   => 'required|email|max:255',
    'phone'   => 'nullable|string|max:255',
    'message' => 'required|string',
  ];
  
  protected array $messages = [];
  
  /*  protected $validationAttributes = [
      "name"    => "Nome",
    ];*/
  
  public function __construct($id = null) {
    parent::__construct($id);
    
    $this->messages = [
      'name.required'    => trans('validations.name_required'),
      'name.max'         => trans('validations.name_max'),
      'email.required'   => trans('validations.email_required'),
      'email.email'      => trans('validations.email_email'),
      'email.max'        => trans('validations.email_max'),
      'phone.max'        => trans('validations.phone_max'),
      'message.required' => trans('validations.message_required'),
    ];
  }
  
  public function render() {
    return view('livewire.forms.contacts');
  }
  
  public function store() {
    $contact = Contact::all()->last();
    
    $data = $this->validate();
    
    $contact = Contact::create([
      'name'    => $data['name'],
      'email'   => $data['email'],
      'phone'   => $data['phone'],
      'message' => $data['message'],
    ]);
    
    // User email
    Mail::to($contact->email)->locale(\Illuminate\Support\Facades\App::currentLocale())->queue(new ContactClientReview($contact));
    
    // Admin email
    Mail::to(User::all())->locale(\Illuminate\Support\Facades\App::currentLocale())->queue(new ContactAdminNotify($contact));
    
    $this->formSent = true;
  }
}
