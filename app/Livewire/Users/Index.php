<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Users')]

class Index extends Component
{
    public function render()
    {
        return view('livewire.users.index', [
        'users' => User::paginate(10)
    ]);
    }
}
