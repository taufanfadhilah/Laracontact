<?php

namespace App\Http\Livewire\Contact;

use Livewire\Component;
use App\Contact;

class Show extends Component
{

    public $contact;

    public function mount(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function render()
    {
        return view('livewire.contact.show');
    }
}
