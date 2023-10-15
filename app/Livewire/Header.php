<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Header extends Component
{
    public string $userName;

    public function mount()
    {
        $this->userName = Auth::user()->name;
    }
    public function render()
    {
        return view('livewire.header', ['userName' => $this->userName]);
    }
}
