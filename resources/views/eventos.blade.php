@extends('layouts.app')

@section('content')

<!-- MODAL -->
<div class="modal fade modal-md" id="static-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="static-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form method="POST">
            @csrf
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="static-modalLabel">Agregar evento</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="row g-3">

                <div class="col-12">
                    <label for="nombre" class="form-label">Nombre del evento</label>
                    <input type="text" class="form-control shadow-sm" id="nombre" name="nombre" value="{{ old('nombre') }}">
                    @error('nombre')
                        <p class="mt-2 text-danger fw-bold">{{ $message }}</p>
                    @enderror
                </div>

                {{-- fecha del evento --}}
                <div class="col-12">
                    <label for="fecha" class="form-label">Fecha del evento</label>
                    <input type="date" class="form-control shadow-sm" id="fecha" name="fecha" value="{{ old('fecha') }}">
                    @error('fecha')
                        <p class="mt-2 text-danger fw-bold">{{ $message }}</p>
                    @enderror
                </div>

                {{-- fecha fin del evento --}}
                <div class="col-12">
                    <label for="fecha_fin" class="form-label">Fecha fin del evento</label>
                    <input type="date" class="form-control shadow-sm" id="fecha_fin" name="fecha_fin" value="{{ old('fecha_fin') }}">
                    @error('fecha_fin')
                        <p class="mt-2 text-danger fw-bold">{{ $message }}</p>
                    @enderror
                </div>

                {{-- lugar del evento --}}
                <div class="col-12">
                    <label for="lugar" class="form-label">Lugar del evento</label>
                    <input type="text" class="form-control shadow-sm" id="lugar" name="lugar" value="{{ old('lugar') }}">
                    @error('lugar')
                        <p class="mt-2 text-danger fw-bold">{{ $message }}</p>
                    @enderror
                </div>
            
            </div>
        </div>
        <div class="modal-footer mt-4">
            <button type="button" class="btn btn-outline-danger fw-semibold" data-bs-dismiss="modal">Cancelar</button>
        
            <div class="ms-auto"> {{-- 'ms-auto' class pushes elements to the right --}}
                <button type="button" class="btn btn-primary fw-semibold">Guardar</button>
            </div>
        </div>
        
        </div>
    </form>

    </div>
    </div>


<!-- AQUI VA TODO EL CONTENIDO DE LAS TABLAS Y LO QUE SE VA A CAMBIAR -->
<div class="container-fluid ">
    <p class="text-muted fs-5" >Consulta el registro de eventos</p>
    <div class="mt-5">
        <div class="col">  

            <div class="card my-3 rounded-3 bg-white shadow-sm p-2 border border-light-subtle">
                <div class="card-body">

                    <div class="d-flex justify-content-between mb-3">

                        <div class="d-flex">
                            {{-- label arriba de cada select --}}
                            <div class="d-flex flex-column">
                                <input type="text" class="form-control shadow-sm bg-white" id="buscar" name="buscar" placeholder="Buscar evento...">
                            </div>
                        </div>

                        <div class="d-flex align-items-end">
                            <button type="button" class="btn btn-outline-primary shadow-sm" data-bs-toggle="modal" data-bs-target="#static-modal">
                                <i class="fa-solid fa-plus"></i>
                                Agregar evento
                            </button>
                            
                        </div>

                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <table class="table table-hover table-responsive">
                            <thead>
                                <tr>
                                    <th>Evento</th>
                                    <th>Lugar del evento</th>
                                    <th>Fecha del evento</th>
                                    <th>Fecha fin del evento</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody  style="line-height: 3">
                                <tr>
                                    <td>Foro de proveeduría Automotriz 2018 5ta edición</td>
                                    <td>Centro de convenciones de la ciudad de Chihuahua</td>
                                    <td>2018-10-10</td>
                                    <td>2018-10-11</td>
                                    <td>
                                        <a href="" class="btn btn-outline-primary shadow-sm">
                                            <i class="fa-solid fa-pencil"></i>
                                        </a>

                                        <a href="" class="btn btn-outline-danger shadow-sm">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Foro de proveeduría Automotriz 2019 6ta edición</td>
                                    <td>Centro de convenciones de la ciudad de Chihuahua</td>
                                    <td>2019-10-10</td>
                                    <td>2019-10-11</td>
                                    <td>
                                        <a href="" class="btn btn-outline-primary shadow-sm">
                                            <i class="fa-solid fa-pencil"></i>
                                        </a>

                                        <a href="" class="btn btn-outline-danger shadow-sm">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Foro de proveeduría Automotriz 2020 7ma edición</td>
                                    <td>Centro de convenciones de la ciudad de Chihuahua</td>
                                    <td>2020-10-10</td>
                                    <td>2020-10-11</td>
                                    <td>
                                        <a href="" class="btn btn-outline-primary shadow-sm">
                                            <i class="fa-solid fa-pencil"></i>
                                        </a>

                                        <a href="" class="btn btn-outline-danger shadow-sm">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                    </td>

                                </tr>

                                <tr>
                                    <td>Foro de proveeduría Automotriz 2021 8va edición</td>
                                    <td>Centro de convenciones de la ciudad de Chihuahua</td>
                                    <td>2021-10-10</td>
                                    <td>2021-10-11</td>
                                    <td>
                                        <a href="" class="btn btn-outline-primary shadow-sm">
                                            <i class="fa-solid fa-pencil"></i>
                                        </a>

                                        <a href="" class="btn btn-outline-danger shadow-sm">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                    </td>

                                </tr>

                                <tr>
                                    <td>Foro de proveeduría Automotriz 2022 9na edición</td>
                                    <td>Centro de convenciones de la ciudad de Chihuahua</td>
                                    <td>2022-10-10</td>
                                    <td>2022-10-11</td>
                                    <td>
                                        <a href="" class="btn btn-outline-primary shadow-sm">
                                            <i class="fa-solid fa-pencil"></i>
                                        </a>

                                        <a href="" class="btn btn-outline-danger shadow-sm">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                    </td>

                                </tr>

                                

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- AQUI TERMINA TODO EL CONTENIDO DE LAS TABLAS Y LO QUE SE VA A CAMBIAR -->


@endsection