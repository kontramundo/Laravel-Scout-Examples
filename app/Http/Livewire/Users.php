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
        $users = new User;


        if ($this->search) 
        {
            $users = User::search($this->search, function ($typesense, $query, $options) {
                
                $options['sort_by'] = 'name:asc';
                $options['min_len_1typo'] = 2;
                $options['min_len_2typo'] = 5;
         
                return $typesense->search($options);
            });
        }

        $users = $users->paginate(10);

        return view('livewire.users', compact('users'));
    }
}
