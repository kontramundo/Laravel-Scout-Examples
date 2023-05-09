<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class Users extends Component
{
    use WithPagination;

    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        //$users = User::search($this->search)->orderBy('name', 'ASC')->paginate(10);

        $users = User::search($this->search, function($meilisearch, $query, $options){
                
            $options['sort'] = ['name:asc'];
            //$options['filter'] = ['role = Supervisor'];
            return $meilisearch->search($query, $options);

        })->paginate(10);

        return view('livewire.users', compact('users'));
    }
}
