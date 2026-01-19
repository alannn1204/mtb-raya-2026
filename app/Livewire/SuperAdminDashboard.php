<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class SuperAdminDashboard extends Component
{
    public $totalOperator;
    public $totalAgent;
    public $totalSales;

    public function mount()
    {
        $this->totalOperator = User::role('operator')->count();
        $this->totalAgent    = User::role('agent')->count();
        $this->totalSales    = 0; // dummy dulu
    }

    public function render()
    {
        return view('livewire.super-admin.dashboard');
    }
}

