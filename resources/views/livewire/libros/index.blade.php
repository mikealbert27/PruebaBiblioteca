<div>

    <div class="float-right mt-2">
        <a type="button" href="{{route('libro.crear')}}" class="btn btn-success"><i class="fas fa-plus-square"></i> Agregar nuevos datos</a>
    </div>

    <div class = "table-responsive mt-3">
        <table class="table table-striped  table-light">
            <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Titulo</th>
                  <th scope="col">Editorial</th>
                  <th scope="col">Autor</th>
                  <th scope="col">Fecha de lanzamiento</th>
                  <th scope="col">Mas opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($libros as $libro)
                <tr>
                    <th scope="row">{{$libro->id}}</th>
                    <td>{{$libro->Titulo}}</td>
                    <td>{{$libro->Editorial}}</td>
                    <td>{{$libro->Autor}}</td>
                    <td>{{$libro->Fecha_Lanzamiento}}</td>
                    <td>
                        <a href="{{route('libro.editar',$libro)}}" title="Editar" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$libros->links()}}
    </div>
</div>
