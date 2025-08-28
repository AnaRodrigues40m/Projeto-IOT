<?php

use App\Livewire\Dashboard;
use App\Livewire\SensorCreate;
use App\Livewire\SensorEdit;
use App\Livewire\SensorList;
use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class);

Route::get('/sensor/list', SensorList::class)->name('sensor.list');
Route::get('/sensor/create', SensorCreate::class)->name('sensor.create');
Route::get('/sensor/edit/{id}', SensorEdit::class)->name('sensor.edit');