<?php

namespace App\Http\Livewire\Pages\Contact;

use Livewire\Component;
use App\Models\Contact;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class Main extends Component
{
    use LivewireAlert;
        public $name, $email, $title, $subject ;

        protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'title' => 'required',
        'subject' => 'required',
    ];

    //add contact

    public function add(Contact $contact)
    {
        $this->validate();

        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'title' => $this->title,
            'subject' => $this->subject,
        ];
        $contact = new Contact();
        $contact->create($data);
        $this->reset();

        $this->alert('success', 'شكرا لتواصلك معنا  ', [
                'position' => 'center',
                'timer' => 3000,
                'toast' => true,
            ]);

    }

    public function render()
    {
        return view('livewire.pages.contact.main');
    }
}
