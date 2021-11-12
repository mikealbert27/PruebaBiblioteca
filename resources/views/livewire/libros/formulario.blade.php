<div class="row mt-5">
    <div class="col-6 mx-auto">
        <form>
            <div class="form-group">
                <label>Titulo</label>
                <input wire:model="libro.Titulo" type="text" class="form-control">
                @error('libro.Titulo')<span class="text-danger">{{$message}}</span> @enderror
            </div>
            <div class="form-group">
                <label>Editorial</label>
                <input wire:model="libro.Editorial" type="text" class="form-control">
                @error('libro.Editorial')<span class="text-danger">{{$message}}</span> @enderror
            </div>
            <div class="form-group">
                <label>Autor</label>
                <input wire:model="libro.Autor" type="text" class="form-control">
                @error('libro.Autor')<span class="text-danger">{{$message}}</span> @enderror
            </div>
            <div class="form-group">
                <label>Fecha de lanzamiento</label>
                <input wire:model="libro.Fecha_Lanzamiento" type="text" class="form-control">
                @error('libro.Fecha_Lanzamiento')<span class="text-danger">{{$message}}</span> @enderror
            </div><br>
        </form>
    </div>
</div>
