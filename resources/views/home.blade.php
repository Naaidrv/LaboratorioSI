@extends('plantilla')

@section('seccion')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">TODOS LOS CURSOS</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <h3 class="alert-heading">¡Has iniciado sesión!</h3>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
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
                                            <th scope="col">Accion</th>
                                        </tr>
                                    </thead>
                                <tbody>
                                    @foreach ($cursoEst ?? '' as $item)
                                        <tr>
                                            <th scope="row"><a  href="{{ route('plan') }}">{{ $item->nombreCurso }}</a></th>
                                            <td>{{ $item->fechaInicio }}</td>
                                            <td>{{ $item->fechaTermino }}</td>
                                            <td>{{ $item->horario }}</td>
                                            <td>{{ $item->duracion }}</td>
                                            <td></td>
                                        </tr>
                                    @endforeach   
                                    @foreach ($cursoExternos ?? '' as $item)
                                        <tr>
                                                <th scope="row"><a  href="{{ route('plan') }}">{{ $item->nombreCurso }}</a></th>
                                            <td>{{ $item->fechaInicio }}</td>
                                            <td>{{ $item->fechaTermino }}</td>
                                            <td>{{ $item->horario }}</td>
                                            <td>{{ $item->duracion }}</td>
                                            <td></td>
                                        </tr>
                                    @endforeach        
                                </tbody>
                            </table>
                        </div>
                        <div class="container justify-content-center col-1">
                        {{ $cursoEst ?? ''->links() }}
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
