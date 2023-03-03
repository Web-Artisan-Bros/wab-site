<?php

namespace App\Http\Livewire\Forms;

use App\Http\Requests\StoreContacts;
use App\Models\Contact;
use Illuminate\Http\JsonResponse;
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
      'name.required'    => __('validations.name_required'),
      'name.max'         => __('validations.name_max'),
      'email.required'   => __('validations.email_required'),
      'email.email'      => __('validations.email_email'),
      'email.max'        => __('validations.email_max'),
      'phone.max'        => __('validations.phone_max'),
      'message.required' => __('validations.message_required'),
    ];
  }
  
  public function render() {
    return view('livewire.forms.contacts');
  }
  
  public function store() {
    $data = $this->validate();
    
    Contact::create([
      'name'    => $data['name'],
      'email'   => $data['email'],
      'phone'   => $data['phone'],
      'message' => $data['message'],
    ]);
    
    $this->formSent = true;
  }
}
