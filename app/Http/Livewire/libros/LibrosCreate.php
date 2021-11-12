<?php

namespace App\Http\Livewire\libros;

use App\Models\Libro;
use Livewire\Component;

class LibrosCreate extends Component
{

    public Libro $libro;

    public function mount(){
        $this->libro = new Libro();
    }

    public function render()
    {
        return view('livewire.libros.libros-create');
    }

    public function crearlibro(){
        $this->validate();
        $this->libro->save();
        return redirect(route('biblioteca.index'));

    }

    protected function rules(){
        return ReglasValidacion::Reglas();
    }
}
