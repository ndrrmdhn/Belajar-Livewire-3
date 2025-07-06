<?php

namespace App\Livewire\Users;

use Livewire\Component;
use App\Models\User;

class Edit extends Component
{
    public $user;
    public $userIndex;

    public function mount($id)
    {
        $this->user = User::findOrFail($id)->toArray();
        $this->userIndex = $id;
    }

    public function update()
    {
        $this->validate([
            'user.name' => 'required|string|max:255',
            'user.email' => 'required|email|max:255',
        ]);

        $user = User::findOrFail($this->userIndex);
        $user->name = $this->user['name'];
        $user->email = $this->user['email'];
        $user->save();

        session()->flash('message', 'User updated successfully.');
    }

    public function render()
    {
        return view('livewire.users.edit');
    }
}