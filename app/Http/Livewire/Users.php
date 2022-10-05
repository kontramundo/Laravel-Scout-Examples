<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class Users extends Component
{
    use WithPagination;

    public $search = null;

    public function render()
    {

        $users = new User;


        if ($this->search) 
        {
            $users = User::search($this->search);
        }

        $users = $users->orderBy('name')->paginate(10);

        return view('livewire.users', compact('users'));
    }
}
