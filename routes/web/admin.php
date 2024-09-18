<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ProfileController;
use Illuminate\Support\Facades\Route;

//ROTA ADMIN
Route::get('admin/dashboard', [AdminController::class, 'dashboard'])
     ->middleware(['auth', 'admin'])
     ->name('admin.dashboard');

//ROTA ADMIN VER PERFIL
Route::get('admin/profile', [ProfileController::class, 'index'])->name('admin.profile');

//ROTA ADMIN PARA ATUALIZAR DADOS DO PERFIL
Route::post('admin/profile/update', [ProfileController::class, 'update'])->name('admin.profile.update');
