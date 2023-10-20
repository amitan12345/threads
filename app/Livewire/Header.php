<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Header extends Component
{
    public string $userName;
    public string $otherUserName = '';
    public Collection $users;

    public bool $isUserListVisible = false;

    public function mount()
    {
        $this->userName = Auth::user()->name;
        $this->updatedOtherUserName();
    }

    public function updatedOtherUserName()
    {
        if (! $this->otherUserName) {
            $this->users = collect();
            return;
        }

        $this->users = User::where('id', '!=', Auth::id())->where('name', 'like', "%{$this->otherUserName}%")->get();
    }

    public function showUserList()
    {
        $this->isUserListVisible = true;
    }

    public function hideUserList()
    {
        $this->isUserListVisible = false;
    }

    public function render()
    {
        return view('livewire.header', ['userName' => $this->userName]);
    }
}
