<?php

use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\AmbienteEdit;
use App\Livewire\AmbienteList;
use Illuminate\Support\Facades\Route;

Route::get('/ambiente/edit/{id}', AmbienteEdit::class)->name('ambiente.edit');
Route::get('/ambiente/create', AmbienteCreate::class)->name('ambiente.create');
Route::get('/ambiente/list', AmbienteList::class)->name('ambientes.list');