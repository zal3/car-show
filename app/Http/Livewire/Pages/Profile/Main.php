<?php

namespace App\Http\Livewire\Pages\Profile;
use Livewire\Component;
use App\Modles\User;
class Main extends Component
{
    protected $listeners = [ '$refresh'];
    

    public function mount(){
        $this->user = auth()->user();
    }

    public function render(){
        return view('livewire.pages.profile.main');
    }
}