<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class Users extends Component
{
    use WithPagination;

    public $search = '';

    public function render()
    {
        $users = User::search($this->search)->orderBy('name', 'ASC')->paginate(10);

        return view('livewire.users', compact('users'));
    }
}
