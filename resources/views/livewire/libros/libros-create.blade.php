<div>
    <form wire:submit.prevent="crearlibro">
        <div class="card bg-light">
            <div class="card-body">
                <h5 class="card-title">Datos de libros a agregar</h5>
                <p class="card-text"></p>
                @include('livewire.libros.formulario')
                <div class="col-6 mx-auto">
                    <button class="btn btn-success btn-sm">Guardar</button>
                    <a href="{{route('biblioteca.index')}}" class="btn btn-secondary btn-sm">Regresar</a>
                </div>
            </div>
      </div>
    </form>
</div>
