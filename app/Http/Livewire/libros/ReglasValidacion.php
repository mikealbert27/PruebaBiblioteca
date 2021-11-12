<?php

namespace App\Http\Livewire\libros;

class ReglasValidacion
{
    public static function Reglas(){
        return[
            'libro.Titulo' => 'required|string',
            'libro.Editorial' => 'required|string',
            'libro.Autor' => 'required|string',
            'libro.Fecha_Lanzamiento' => 'required|string',
        ];
    }
}
