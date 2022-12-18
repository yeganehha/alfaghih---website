<?php

namespace App\Http\Livewire\Client;

use App\Models\Contactus;
use Livewire\Component;

class Contact extends Component
{
    public $success ;
    public $error ;
    public $subject ;
    public $contact ;

    protected $rules = [
        'contact.name' => ['required', 'string'],
        'contact.email' => ['required', 'email'],
        'contact.mobile' => ['required' , 'digits_between:8,8'],
        'contact.message' => ['required' , 'string' , 'min:10'],
    ];

    public function updated($peroperty , $value )
    {
        $this->success = null;
        $this->error = null;
        $this->validateOnly($peroperty);
    }

    public function send()
    {
        $this->error = null;
        $this->success = null;
        $this->validate();
        $this->contact->subject =  $this->subject;
        $this->contact->is_read =  false;
        try {
            $this->contact->saveOrFail();
            $this->contact->id = null;
            $this->contact->name = null;
            $this->contact->email = null;
            $this->contact->mobile = null;
            $this->contact->message = null;
            $this->error = null;
            $this->success = trans('message_sent');
        } catch (\Exception $exception){
            $this->error = trans('message_unsent');
        }
    }

    public function mount($subject , Contactus $contact)
    {
        $this->subject = $subject;
        $this->contact = $contact;
    }

    public function render()
    {
        return view('livewire.client.contact');
    }
}
