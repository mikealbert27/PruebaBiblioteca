<?php

use App\Http\Livewire\libros\Index;
use App\Http\Livewire\libros\LibrosCreate;
use App\Http\Livewire\libros\LibrosEdit;
use Illuminate\Support\Facades\Route;


Route::get('/biblioteca', Index::class)->name('biblioteca.index');
Route::get('/biblioteca/crear', LibrosCreate::class)->name('libro.crear');
Route::get('/biblioteca/{libro}/editar', LibrosEdit::class)->name('libro.editar');
