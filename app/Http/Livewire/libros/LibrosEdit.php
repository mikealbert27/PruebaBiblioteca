<?php

namespace App\Http\Livewire\libros;

use App\Models\Libro;
use Livewire\Component;

class LibrosEdit extends Component
{
    public Libro $libro;

    public function render()
    {
        return view('livewire.libros.libros-edit');
    }

    public function editarlibro(){
        $this->validate();
        $this->libro->save();
        return redirect(route('biblioteca.index'));

    }

    protected function rules(){

        return ReglasValidacion::Reglas();
    }
}
