<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public function userQuery(){
        return  User::where('name',$this->search)
        ->orwhere('email',$this->search);
        
    }
    
    public function render()
    {
        $users = $this->userQuery()->paginate(10);
        return view('livewire.user-list', [
            'users' =>User::paginate(2),
        ]);
    }
}
