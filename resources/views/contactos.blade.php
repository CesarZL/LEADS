@extends('layouts.app')

@section('content')

<!-- MODAL -->
<div class="modal fade modal-lg" id="static-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="static-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form method="POST">
            @csrf
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="static-modalLabel">Agregar contacto</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="row g-3">

                <div class="col-12">
                    <label for="nombre" class="form-label">Selecciona un evento</label>
                    <select class="form-select shadow-sm" id="evento" name="evento">
                        <option value="todos">Selecciona un evento</option>
                        <option value="1">Evento 1</option>
                        <option value="2">Evento 2</option>
                        <option value="3">Evento 3</option>
                    </select>
                </div>

                <hr class="mt-4">
          
                <label class="fs-5 fw-semibold mt-4 mb-2">Información de contacto</label>
    
                <div class="col-md-4">
                  <label for="nombre" class="form-label">Nombre</label>
                  <input type="text" class="form-control shadow-sm" id="nombre" name="nombre" value="{{ old('nombre') }}">
                  @error('nombre')
                    <p class="mt-2 text-danger fw-bold">{{ $message }}</p>
                  @enderror
                </div>
    
                <div class="col-md-4">
                  <label for="apellido_paterno" class="form-label">Apellido paterno</label>
                  <input type="text" class="form-control shadow-sm" id="apellido_paterno" name="apellido_paterno" value="{{ old('apellido_paterno') }}">
                    @error('apellido_paterno')
                        <p class="mt-2 text-danger fw-bold">{{ $message }}</p>                    
                    @enderror
                </div>
    
                <div class="col-md-4">
                  <label for="apellido_materno" class="form-label">Apellido materno</label>
                  <input type="text" class="form-control shadow-sm" id="apellido_materno" name="apellido_materno" value="{{ old('apellido_materno') }}">
                    @error('apellido_materno')
                        <p class="mt-2 text-danger fw-bold">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-md-4">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control shadow-sm" id="email" name="email" value="{{ old('email') }}">
                    @error('email')
                        <p class="mt-2 text-danger fw-bold">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-md-4">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="text" class="form-control shadow-sm" id="telefono" name="telefono" value="{{ old('telefono') }}">
                    @error('telefono')
                        <p class="mt-2 text-danger fw-bold">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-md-4">
                    <label for="prioridad" class="form-label">Prioridad</label>
                    <select class="form-select shadow-sm" id="prioridad" name="prioridad">
                        <option value="todos">Selecciona una prioridad</option>
                        <option value="1">Alta</option>
                        <option value="2">Media</option>
                        <option value="3">Baja</option>
                    </select>
                </div>

                <div class="col-12">
                    <label for="notas" class="form-label">Notas</label>
                    <textarea class="form-control shadow-sm" id="notas" name="notas" rows="3">{{ old('notas') }}</textarea>
                    @error('notas')
                        <p class="mt-2 text-danger fw-bold">{{ $message }}</p>
                    @enderror
                </div>

                <hr class="mt-4">

                <label class="fs-5 fw-semibold mt-4 mb-2">Información de la empresa</label>

                <div class="col-md-4">
                    <label for="empresa" class="form-label">Empresa</label>
                    <input type="text" class="form-control shadow-sm" id="empresa" name="empresa" value="{{ old('empresa') }}">
                    @error('empresa')
                        <p class="mt-2 text-danger fw-bold">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-md-4">
                    <label for="puesto" class="form-label">Puesto</label>
                    <input type="text" class="form-control shadow-sm" id="puesto" name="puesto" value="{{ old('puesto') }}">
                    @error('puesto')
                        <p class="mt-2 text-danger fw-bold">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-md-4">
                    <label for="sector" class="form-label">Sector</label>
                    <select class="form-select shadow-sm" id="sector" name="sector">
                        <option value="todos">Selecciona un sector</option>
                        <option value="1">Sector 1</option>
                        <option value="2">Sector 2</option>
                        <option value="3">Sector 3</option>
                    </select>
                </div>
                
                <hr class="mt-4">

                <label class="fs-5 fw-semibold mt-4 mb-2">Productos</label>
                {{-- tres columnas de productos en forma de checkbox --}}

   
                <ul class="" style="column-count: 3">
                    <li class="list-group-item fs-7">
                        <label class="form-check-label stretched-link">
                            <input type="checkbox" class="form-check-input me-1" value="11" />
                            <span class="checkbox-control">
                            <span class="fs-7" data-bind="text: name">Kioskos Interactivos</span>
                            </span>
                        </label>
                    </li>
                    <li class="list-group-item fs-7">
                      <label class="form-check-label stretched-link">
                        <input type="checkbox" class="form-check-input me-1" value="12" />
                        <span class="checkbox-control">
                           <span class="fs-7" data-bind="text: name">EMP</span>
                        </span></label>
                    </li>
                    <li class="list-group-item fs-7">
                      <label class="form-check-label stretched-link">
                        <input type="checkbox" class="form-check-input me-1" value="13" />
                        <span class="checkbox-control">
                           <span class="fs-7" data-bind="text: name">ProTrack Plus</span>
                        </span></label>
                    </li>
                    <li class="list-group-item fs-7">
                      <label class="form-check-label stretched-link">
                        <input type="checkbox" class="form-check-input me-1" value="14" />
                        <span class="checkbox-control">
                          <span class="fs-7" data-bind="text: name">Matemática Virtual</span>
                        </span></label>
                    </li>
                    <li class="list-group-item fs-7">
                      <label class="form-check-label stretched-link">
                        <input type="checkbox" class="form-check-input me-1" value="15" />
                        <span class="checkbox-control">
                          
                          <span class="fs-7" data-bind="text: name">ZorSecure Zortag</span>
                        </span></label>
                    </li>
                    <li class="list-group-item fs-7">
                      <label class="form-check-label stretched-link">
                        <input type="checkbox" class="form-check-input me-1" value="16" />
                        <span class="checkbox-control">
                           <span class="fs-7" data-bind="text: name">YoFacturo</span>
                        </span></label>
                    </li>
                    <li class="list-group-item fs-7">
                      <label class="form-check-label stretched-link">
                        <input type="checkbox" class="form-check-input me-1" value="17" />
                        <span class="checkbox-control">
                          
                          <span class="fs-7" data-bind="text: name">SICEE (Control Escolar)</span>
                        </span></label>
                    </li>
                    <li class="list-group-item fs-7">
                      <label class="form-check-label stretched-link">
                        <input type="checkbox" class="form-check-input me-1" value="18" />
                        <span class="checkbox-control">
                          
                          <span class="fs-7" data-bind="text: name"
                            >SVENT (Expos &amp; Shows)</span
                          >
                        </span></label>
                    </li>
                    <li class="list-group-item fs-7">
                      <label class="form-check-label stretched-link">
                        <input type="checkbox" class="form-check-input me-1" value="19" />
                        <span class="checkbox-control">
                           <span class="fs-7" data-bind="text: name">Bibliothek</span>
                        </span></label>
                    </li>
                    <li class="list-group-item fs-7">
                      <label class="form-check-label stretched-link">
                        <input type="checkbox" class="form-check-input me-1" value="20" />
                        <span class="checkbox-control">
                           <span class="fs-7" data-bind="text: name">Staffing</span>
                        </span></label>
                    </li>
                    <li class="list-group-item fs-7">
                      <label class="form-check-label stretched-link">
                        <input type="checkbox" class="form-check-input me-1" value="21" />
                        <span class="checkbox-control">
                          
                          <span class="fs-7" data-bind="text: name"
                            >Dispositivos móviles Janam</span
                          >
                        </span></label>
                    </li>
                  </ul>
                  




            </div>
        </div>
        <div class="modal-footer mt-4">
            <button type="button" class="btn btn-outline-danger fw-semibold" data-bs-dismiss="modal">Cancelar</button>
        
            <div class="ms-auto"> {{-- 'ms-auto' class pushes elements to the right --}}
                <button type="button" class="btn btn-outline-primary fw-semibold">Mandar correo</button>
                <button type="button" class="btn btn-primary fw-semibold">Guardar</button>
            </div>
        </div>
        
        </div>
    </form>

    </div>
    </div>


<!-- AQUI VA TODO EL CONTENIDO DE LAS TABLAS Y LO QUE SE VA A CAMBIAR -->
<div class="container-fluid ">
    <p class="text-muted fs-5" >Consulta el registro de contactos</p>
    <div class="mt-5">
        <div class="col">  

            {{-- dos select a la izquierda y uno a la derecha --}}
            <div class="d-flex justify-content-between">

                <div class="d-flex">
                    {{-- label arriba de cada select --}}
                    <div class="d-flex flex-column col-9">
                        <label for="evento" class="form-label">Seleccionar evento</label>
                        <select class="form-select shadow-sm bg-white" id="evento" name="evento">
                            <option value="todos">Selecciona un evento</option>
                            <option value="1">Evento 1</option>
                            <option value="2">Evento 2</option>
                            <option value="3">Evento 3</option>
                        </select>
                    </div>

                    <div class="d-flex flex-column mx-3 col-9">
                        <label for="sector" class="form-label">Seleccionar sector</label>
                        <select class="form-select shadow-sm bg-white" id="sector" name="sector">
                            <option value="todos">Selecciona un sector</option>
                            <option value="1">Sector 1</option>
                            <option value="2">Sector 2</option>
                            <option value="3">Sector 3</option>
                        </select>
                    </div>

                </div>

                <div class="d-flex align-items-end">
                    <button type="button" class="btn btn-primary shadow-sm" data-bs-toggle="modal" data-bs-target="#static-modal">
                        <i class="fa-solid fa-user-plus me-2"></i>
                        Añadir nuevo contacto
                    </button>
                </div>

            </div>

            <div class="card my-3 rounded-3 bg-white shadow-sm p-2 border border-light-subtle">
                <div class="card-body">

                    <div class="d-flex justify-content-between mb-3">

                        <div class="d-flex">
                            {{-- label arriba de cada select --}}
                            <div class="d-flex flex-column">
                                <input type="text" class="form-control shadow-sm bg-white" id="buscar" name="buscar" placeholder="Buscar contacto...">
                            </div>
                        </div>

                        <div class="d-flex align-items-end">
                            {{-- ICONO DE DESCARGA Descargar XLS  --}}
                            <p class="text-primary fw-semibold">
                                <i class="fa-solid fa-download me-1"></i>
                                Descargar XLS
                            </p>
                        </div>

                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <table class="table table-hover table-responsive">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Empresa</th>
                                    <th>Sector</th>
                                    <th>Evento</th>
                                    <th>Registrado por</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody  style="line-height: 3">
                                <tr>
                                    <td>José Gonzales Tovar</td>
                                    <td>jgonzalezt@telcel.com</td>
                                    <td>Telcel</td>
                                    <td>Telefonía</td>
                                    <td>Foro de proveeduria Automotriz 2018 5ta edición</td>
                                    <td>admin</td>
                                    <td>
                                        <a href="" class="btn btn-outline-primary shadow-sm">
                                            <i class="fa-solid fa-pencil"></i>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Maria Rodriguez Sanchez</td>
                                    <td>mrodriguez@exxonmobil.com</td>
                                    <td>ExxonMobil</td>
                                    <td>Petróleo y Gas</td>
                                    <td>Cumbre de Energía Global 2020</td>
                                    <td>admin</td>
                                    <td>
                                        <a href="" class="btn btn-outline-primary shadow-sm">
                                            <i class="fa-solid fa-pencil"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Carlos Perez López</td>
                                    <td>cperez@ibm.com</td>
                                    <td>IBM</td>
                                    <td>Tecnología</td>
                                    <td>Conferencia de Innovación Tecnológica 2019</td>
                                    <td>admin</td>
                                    <td>
                                        <a href="" class="btn btn-outline-primary shadow-sm">
                                            <i class="fa-solid fa-pencil"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Laura Garcia Ramírez</td>
                                    <td>lgarcia@apple.com</td>
                                    <td>Apple Inc.</td>
                                    <td>Tecnología</td>
                                    <td>Expo de Productos Innovadores 2021</td>
                                    <td>admin</td>
                                    <td>
                                        <a href="" class="btn btn-outline-primary shadow-sm">
                                            <i class="fa-solid fa-pencil"></i>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Juan Martinez Herrera</td>
                                    <td>jmartinez@amazon.com</td>
                                    <td>Amazon</td>
                                    <td>Comercio Electrónico</td>
                                    <td>Conferencia de Comercio Online 2022</td>
                                    <td>admin</td>
                                    <td>
                                        <a href="" class="btn btn-outline-primary shadow-sm">
                                            <i class="fa-solid fa-pencil"></i>
                                        </a>
                                    </td>
                                </tr>
                            
                                <tr>
                                    <td>Ana Gutierrez Ramos</td>
                                    <td>agutierrez@google.com</td>
                                    <td>Google</td>
                                    <td>Tecnología</td>
                                    <td>Google I/O 2021</td>
                                    <td>admin</td>
                                    <td>
                                        <a href="" class="btn btn-outline-primary shadow-sm">
                                            <i class="fa-solid fa-pencil"></i>
                                        </a>
                                    </td>
                                </tr>
                            
                                <tr>
                                    <td>Ricardo Fernandez Ortiz</td>
                                    <td>rfernandez@mercedes-benz.com</td>
                                    <td>Mercedes-Benz</td>
                                    <td>Automotriz</td>
                                    <td>Expo Autos del Futuro 2023</td>
                                    <td>admin</td>
                                    <td>
                                        <a href="" class="btn btn-outline-primary shadow-sm">
                                            <i class="fa-solid fa-pencil"></i>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Isabel Castro López</td>
                                    <td>icastro@microsoft.com</td>
                                    <td>Microsoft</td>
                                    <td>Tecnología</td>
                                    <td>Microsoft Build 2022</td>
                                    <td>admin</td>
                                    <td>
                                        <a href="" class="btn btn-outline-primary shadow-sm">
                                            <i class="fa-solid fa-pencil"></i>
                                        </a>
                                    </td>
                                </tr>
                            
                                <!-- Fila 5 -->
                                <tr>
                                    <td>Fernando Diaz Ramirez</td>
                                    <td>fdiaz@boeing.com</td>
                                    <td>Boeing</td>
                                    <td>Aeroespacial</td>
                                    <td>Expo Aeroespacial Internacional 2021</td>
                                    <td>admin</td>
                                    <td>
                                        <a href="" class="btn btn-outline-primary shadow-sm">
                                            <i class="fa-solid fa-pencil"></i>
                                        </a>
                                    </td>
                                </tr>
                            
                                <!-- Fila 6 -->
                                <tr>
                                    <td>Carla Sánchez Velasco</td>
                                    <td>csanchez@tesla.com</td>
                                    <td>Tesla</td>
                                    <td>Automotriz</td>
                                    <td>Conferencia de Vehículos Eléctricos 2023</td>
                                    <td>admin</td>
                                    <td>
                                        <a href="" class="btn btn-outline-primary shadow-sm">
                                            <i class="fa-solid fa-pencil"></i>
                                        </a>
                                    </td>
                                </tr>
                            
                                <!-- Fila 7 -->
                                <tr>
                                    <td>Pablo Ruiz González</td>
                                    <td>pruiz@siemens.com</td>
                                    <td>Siemens</td>
                                    <td>Energía</td>
                                    <td>Siemens Energy Summit 2022</td>
                                    <td>admin</td>
                                    <td>
                                        <a href="" class="btn btn-outline-primary shadow-sm">
                                            <i class="fa-solid fa-pencil"></i>
                                        </a>
                                    </td>
                                </tr>
                            
                                <!-- Fila 8 -->
                                <tr>
                                    <td>Valeria Mendoza Torres</td>
                                    <td>vmendoza@coca-cola.com</td>
                                    <td>The Coca-Cola Company</td>
                                    <td>Bebidas</td>
                                    <td>Expo de Bebidas Innovadoras 2021</td>
                                    <td>admin</td>
                                    <td>
                                        <a href="" class="btn btn-outline-primary shadow-sm">
                                            <i class="fa-solid fa-pencil"></i>
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