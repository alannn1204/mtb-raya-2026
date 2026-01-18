<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\SuperAdminDashboard;
use App\Livewire\OperatorDashboard;
use App\Livewire\AgentDashboard;


// Homepage
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Dashboard generic (boleh tak guna lagi kalau ada Livewire sendiri)
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

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

// Load additional routes
require __DIR__.'/settings.php';

