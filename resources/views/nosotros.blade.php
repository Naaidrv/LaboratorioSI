@extends('plantilla')

@section('seccion')
<div class="container">
        <div class="row justify-content-center">
                <h2 class="col-3 display-3 text-white"><strong>SISCU</strong></h2>
                <h4 class="col-12 text-white">SISCU pretende hacer más fácil la inscripción, registro y control de los cursos que ofrece la Facultad por ello los principales objetivos son:
        
                        <br><br>&nbsp;&nbsp;&nbsp;&nbsp;-Optimizar la información dejando atrás el sistema obsoleto de los registros en papel.
                        <br>&nbsp;&nbsp;&nbsp;&nbsp;-Tener un mejor control de la información y quitar los estorbosos “archiveros”.
                        <br>&nbsp;&nbsp;&nbsp;&nbsp;-Ser una herramienta de fácil uso para los usuarios.<br><br>
                </h4>
        </div>
        <div class="accordion" id="accordionExample">
                <div class="card">
                  <div class="card-header bg-secondary" id="headingOne">
                    <h2 class="mb-0">
                      <button class="btn btn-link text-light" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        MISION
                      </button>
                    </h2>
                  </div>
              
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                            SISCU, tiene el compromiso de ayudar al docente, estudiantes y personal administrativo resolviendo la problemática de los registros y control de la información que se requiere para la inscripción a los cursos ofrecidos por la Facultad.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header bg-secondary" id="headingTwo">
                    <h2 class="mb-0" >
                      <button class="btn btn-link text-light collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        VISION
                      </button>
                    </h2>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                            Ser una herramienta de gran ayuda para los usuarios involucrados, así mismo llegar a otras universidades que puedan tener el mismo problema.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header bg-secondary" id="headingThree">
                    <h2 class="mb-0" >
                      <button class="btn btn-link text-light collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                       VALORES
                      </button>
                    </h2>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                            Comprometidos con nuestra labor, nos regimos bajo los valores de honestidad y responsabilidad.
                    </div>
                  </div>
                </div>
              </div>
</div>
    

@endsection