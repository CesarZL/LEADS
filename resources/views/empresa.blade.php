@extends('layouts.app')

@section('content')


<div class="container-fluid ">
    <p class="text-muted fs-5" >Edita la información de tu empresa</p>
    <div class="mt-5">
        <div class="col">  
            <div class="card my-3 rounded-3 bg-white shadow-sm p-2 border border-light-subtle">
                <div class="card-body">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        {{-- razon social --}}
                        <div class="col-12">
                            <label for="razon_social" class="form-label">Razón social</label>
                            <input type="text" class="form-control shadow-sm bg-white" id="razon_social" name="razon_social" value="SVAM International de México">
                            @error('razon_social')
                                <p class="mt-2 text-danger fw-bold">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- direccion --}}
                        <div class="col-12 mt-4">
                            <label for="direccion" class="form-label">Dirección</label>
                            <input type="text" class="form-control shadow-sm bg-white" id="direccion" name="direccion" value="Avenida del Software Edificio Empresarial Piso 1, Parque Científico y Tecnológico de Tamaulipas, Cd. Victoria, Tamaulipas C.P.87138 Tel. 834-1071000.">
                            @error('direccion')
                                <p class="mt-2 text-danger fw-bold">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- descripcion --}}
                        <div class="col-12 mt-4">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <textarea class="form-control shadow-sm bg-white" id="descripcion" name="descripcion" rows="3">Somos un consorcio de empresas especializadas en Tecnologías de la Información, dedicado principalmente al desarrollo de Software a la medida, Staffing, consultoría de TI para negocios, y servicios de infraestructura tecnológica; ofreciendo a nuestros clientes soluciones integrales a necesidades específicas.</textarea>
                            @error('descripcion')
                                <p class="mt-2 text-danger fw-bold">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- fila con una label arriba de una card a un lado de otra igual --}}
                        <div class="row mt-4">
                            <div class="col-6">
                                <label for="curriculum" class="form-label">Currículum</label>
                                <div class="card shadow-sm bg-white">
                                    <div class="card-body">
                        
                                        <div class="d-flex align-items-center px-3 py-2">
                                            <img src="{{ asset('img/upload.png') }}" alt="upload" class="img-fluid" width="40px">
                                            <p class="ms-4 text-muted mb-0">Selecciona un archivo o arrástralo aquí</p>
                                            <button type="button" class="ms-auto btn btn-outline-primary fw-semibold">Seleccionar archivo</button>
                                        </div>
                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="curriculum" class="form-label">Logo empresarial</label>
                                <div class="card shadow-sm bg-white">
                                    <div class="card-body">
                        
                                        <div class="d-flex align-items-center px-3 py-2">
                                            <img src="{{ asset('img/upload.png') }}" alt="upload" class="img-fluid" width="40px">
                                            <p class="ms-4 text-muted mb-0">Selecciona un archivo o arrástralo aquí</p>
                                            <button type="button" class="ms-auto btn btn-outline-primary fw-semibold">Seleccionar archivo</button>
                                        </div>
                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        


                    <div class="d-flex justify-content-between mt-5">

                        <div class="d-flex">


                        </div>

                        <div class="d-flex align-items-end">
                            <button type="button" class="btn btn-primary fw-semibold">Guardar</button>
                            
                        </div>

                    </div>


                        


                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- AQUI TERMINA TODO EL CONTENIDO DE LAS TABLAS Y LO QUE SE VA A CAMBIAR -->


@endsection