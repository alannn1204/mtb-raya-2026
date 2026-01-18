<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\SuperAdminDashboard;
use App\Livewire\OperatorDashboard;
use App\Livewire\AgentDashboard;

Route::get('/', function () {
    return redirect()->route('login');
})->name('home');

// Super Admin Dashboard
Route::get('/super-admin', SuperAdminDashboard::class)
    ->middleware(['auth', 'role:super_admin'])
    ->name('super-admin');

// Operator Dashboard
Route::get('/operator', OperatorDashboard::class)
    ->middleware(['auth', 'role:operator'])
    ->name('operator');

// Agent Dashboard
Route::get('/agent', AgentDashboard::class)
    ->middleware(['auth', 'role:agent'])
    ->name('agent');



