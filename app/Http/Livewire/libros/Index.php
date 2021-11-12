<?php

namespace App\Http\Livewire\libros;

use App\Models\Libro;
use Livewire\Component;

class Index extends Component
{
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $libros = Libro::paginate(10);
        return view('livewire.libros.index', compact('libros'));
    }
}
