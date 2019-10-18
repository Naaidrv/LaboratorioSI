@extends('plantilla')

@section('seccion')
<div class="container">
    <h2 class="col-6 display-4 text-white"><strong>Comunidad UNAM Cursos</strong></h2>
</div>
<div class="container bg-light">
    <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Fecha de Inicio</th>
                    <th scope="col">Fecha de Termino</th>
                    <th scope="col">Horario</th>
                    <th scope="col">Duracion</th>
                </tr>
            </thead>
        <tbody>
            @foreach ($cursoEst as $item)
                <tr>
                    <th scope="row">{{ $item->nombreCurso }}</th>
                    <td>{{ $item->fechaInicio }}</td>
                    <td>{{ $item->fechaTermino }}</td>
                    <td>{{ $item->horario }}</td>
                    <td>{{ $item->duracion }}</td>
                </tr>
            @endforeach          
        </tbody>
    </table>
</div>
<div class="container justify-content-center col-1">
{{ $cursoEst->links() }}
</div>
@endsection