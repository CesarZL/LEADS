@extends('layouts.app')

@section('content')

<!-- MODAL -->
<div class="modal fade modal-md" id="static-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="static-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form method="POST">
            @csrf
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="static-modalLabel">Agregar producto</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="row g-3">

                <div class="col-12">
                    <label for="nombre" class="form-label">Nombre del producto</label>
                    <input type="text" class="form-control shadow-sm" id="nombre" name="nombre" value="{{ old('nombre') }}">
                    @error('nombre')
                        <p class="mt-2 text-danger fw-bold">{{ $message }}</p>
                    @enderror
                </div>
                
                
                <div class="col-12">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea class="form-control shadow-sm" id="descripcion" name="descripcion" rows="3">{{ old('descripcion') }}</textarea>
                    @error('descripcion')
                        <p class="mt-2 text-danger fw-bold">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-12">
                    <label for="imagen" class="form-label">Imagen</label>
                    <input type="file" class="form-control shadow-sm" id="imagen" name="imagen" value="{{ old('imagen') }}">
                    @error('imagen')
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
    <p class="text-muted fs-5" >Consulta el registro de productos</p>
    <div class="mt-5">
        <div class="col">  

            <div class="card my-3 rounded-3 bg-white shadow-sm p-2 border border-light-subtle">
                <div class="card-body">

                    <div class="d-flex justify-content-between mb-3">

                        <div class="d-flex">
                            {{-- label arriba de cada select --}}
                            <div class="d-flex flex-column">
                                <input type="text" class="form-control shadow-sm bg-white" id="buscar" name="buscar" placeholder="Buscar producto...">
                            </div>
                        </div>

                        <div class="d-flex align-items-end">
                            <button type="button" class="btn btn-outline-primary shadow-sm" data-bs-toggle="modal" data-bs-target="#static-modal">
                                <i class="fa-solid fa-plus"></i>
                                Agregar producto
                            </button>
                            
                        </div>

                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <table class="table table-hover table-responsive">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody  style="line-height: 3">
                                <tr>
                                    <td>Kioskos Interactivos</td>
                                    <td>Una plataforma física diseñada para interactuar con el usuario en un punto de venta que fusiona la tecnología con la experiencia</td>
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
                                    <td>Señalización Digital</td>
                                    <td>Una plataforma física diseñada para interactuar con el usuario en un punto de venta que fusiona la tecnología con la experiencia</td>
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
                                    <td>Señalización Digital</td>
                                    <td>Una plataforma física diseñada para interactuar con el usuario en un punto de venta que fusiona la tecnología con la experiencia</td>
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
                                    <td>Señalización Digital</td>
                                    <td>Una plataforma física diseñada para interactuar con el usuario en un punto de venta que fusiona la tecnología con la experiencia</td>
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
                                    <td>Señalización Digital</td>
                                    <td>Una plataforma física diseñada para interactuar con el usuario en un punto de venta que fusiona la tecnología con la experiencia</td>
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