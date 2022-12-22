<?php

namespace App\Http\Livewire\Pages\Contact;

use Livewire\Component;
use App\Models\Contact;

class Info extends Component
{
    public $contacts;
    public function render()
    {   
        $this->contacts = Contact::all();
        return view('livewire.pages.contact.info');
    }
}
