<?php

namespace App\Http\Livewire\Pages\Admins;

use Livewire\Component;
use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Add extends Component
{
    use LivewireAlert;
    public $user = [];
    protected $listeners = ['$refresh'];
    protected $rules = [
        'user.name' => 'required',
        'user.email' => 'required|email|unique:users,email',
        // 'user.username' => 'required|string|regex:/\w*$/|max:255|unique:users,username',
        'user.password' => 'required|min:6',
        'user.phone_number' => 'required',
        // 'user.telegram_username' => 'required',
        // 'user.profile_photo_path' => '',
    ];

    public function mount()
    {
        // $this->user['profile_photo_path'] = null;
    }



    public function save()
    {
        // dd('jjjjjjj');
        $this->validate();
        $this->user['password'] = bcrypt($this->user['password']);
        $this->user['is_admin'] = true;

        $user = User::create($this->user);

        // if ($this->user['profile_photo_path'])
        //     $user->add_file('profile_photo_path', $this->user['profile_photo_path'], 'users/' . $user->id . '/profile_photo/');

        // $employee = $user->create([
        //     'state' => $this->user['employee']['state'] ?? 1,
        //     'job' => $this->user['employee']['job'],
        // ]);

        // if (count($this->files) > 0)
        //     foreach ($this->files as $file) {
        //         $new_file = $employee->files()->create([
        //             'name' => 'File',
        //         ]);
        //         $new_file->add_file('name', $file, 'employees/' . $employee->id . '/files/' . $new_file->id);
        //     }


        $this->reset();
        $this->emitTo('pages.admins.main', '$refresh');

        $this->alert('success','تمت الاضافة', [
            'position' => 'top',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => true,
            'width' => '400',
        ]);
    }

    // public function removeFile($index)
    // {
    //     unset($this->files[$index]);
    // }
    public function render()
    {
        return view('livewire.pages.admins.add');
    }
}
