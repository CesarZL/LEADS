@extends('layouts.app')

@section('content')

<div class="container-fluid ">
    <div class="mt-4">
        <div class="col">  

            <div class="card my-3 rounded-3 bg-white shadow-sm p-2 border border-light-subtle">
                <!-- INICIA CONTENIDO DENTRO DE CARD -->
                <div class="row">
                    <div class="col border-end">
                        <div class="card-body">
                            
                            <h5 class="card-title mt-2 fw-medium fs-5">Eventos</h5>
                            <p class="card-text mb-4 text-muted fw-normal">Selecciona un evento para ver sus solicitudes</p>
                            <input type="text" class="form-control shadow-sm mb-3 bg-white" placeholder="Buscar evento...">

                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center active">
                                    Foro de proveeduría Automotriz 2018 5ta edición
                                    <span><i class="fa-solid fa-chevron-right"></i></span>
                                </li>               
                            </ul>

                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center bg-white mt-2">
                                    Foro de proveeduría Automotriz 2018 5ta edición
                                    <span><i class="fa-solid fa-chevron-right"></i></span>
                                </li> 
                                
                                <li class="list-group-item d-flex justify-content-between align-items-center bg-white mt-2">
                                    Automotive Meetings Day
                                    <span><i class="fa-solid fa-chevron-right"></i></span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center bg-white mt-2">
                                    Enertam
                                    <span><i class="fa-solid fa-chevron-right"></i></span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center bg-white mt-2">
                                    Expo Proveedor Industrial Matamoros 2019
                                    <span><i class="fa-solid fa-chevron-right"></i></span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center bg-white mt-2">
                                    Consejo de Petroleo
                                    <span><i class="fa-solid fa-chevron-right"></i></span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center bg-white mt-2">
                                    FORO GO3
                                    <span><i class="fa-solid fa-chevron-right"></i></span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center bg-white mt-2">
                                    Expo Manufactura 2023
                                    <span><i class="fa-solid fa-chevron-right"></i></span>
                                </li>
                                
                            </ul>

                        </div>
                    </div>

                    <div class="col-8">
                        <div class="card-body vh-100 mx-2">
                            <div class="hstack align-items-start mb-1">
                                <div>
                                    <h5 class="card-title mt-2 fw-medium fs-5">Solicitudes</h5>
                                    <p class="card-text mb-4 text-muted fw-normal">Foro de proveeduría Automotriz 2018 5ta edición</p>
                                </div>

                                <div class=" ms-auto mt-2">
                                    <p class="text-primary fw-semibold">
                                        <i class="fa-solid fa-download me-1"></i>
                                        Descargar XLS
                                    </p>
                                </div>
                            </div>

                        
                            <div id="grafica" class="charts" style="width: 100%; height: 95%;"></div>


                        </div>
                    </div>
                </div>
                <!-- TERMINA CONTENIDO DENTRO DE CARD -->
            </div>
        </div>
    </div>
</div>
<!-- AQUI TERMINA TODO EL CONTENIDO DE LAS TABLAS Y LO QUE SE VA A CAMBIAR -->

<!-- Inicia el contenido de la gráfica -->
<script type="text/javascript">
    // Carga la biblioteca de Google Charts
    google.charts.load('current', {'packages':['bar']});

    // Dibuja la gráfica cuando la biblioteca está cargada
    google.charts.setOnLoadCallback(drawChart);

    // Función para dibujar la gráfica
    function drawChart() {
        // Datos de la gráfica
        var data = google.visualization.arrayToDataTable([
            ['Producto', 'Número de solicitudes'],
            ['Kioskos interactivos', 25],
            ['Pantallas interactivas', 10],
            ['Pantallas táctiles', 15],
            ['Pantallas LED', 20],
            ['Pantallas LCD', 5],
            ['Pantallas OLED', 10],
            ['Pantallas de plasma', 5],
            ['Pantallas LED', 20],
            ['Pantallas LCD', 5],
            ['Pantallas OLED', 10],
            ['Pantallas de plasma', 5],
            ['Pantallas de proyección', 10]
        ]);

        // Opciones de la gráfica
        var options = {
            colors: ['#b5e4ca'], // Color de las barras
            bars: 'horizontal', // Tipo de gráfica horizontal
            axes: {
                x: {
                    0: { side: 'top', label: '' } // Oculta las etiquetas del eje x
                },
                y: {
                    0: { side: 'left', label: '' } // Oculta las etiquetas del eje y
                }
            },
        };

        // Configura el tamaño del contenedor
        var container = document.getElementById('grafica');
        var containerWidth = container.clientWidth;
        var containerHeight = container.clientHeight;

        // Configura la altura de la gráfica (puedes ajustar según sea necesario)
        var chartHeight = containerHeight - 40; // Resta 40 para dar espacio al título

        // Configura las opciones de altura para la gráfica
        options.height = chartHeight;

        // Crea una instancia de la gráfica de barras
        var chart = new google.charts.Bar(container);

        // Dibuja la gráfica con los datos y opciones proporcionados
        chart.draw(data, google.charts.Bar.convertOptions(options));
    }
</script>




@endsection