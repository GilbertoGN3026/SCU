@extends('adminlte::page')
@section('title', 'Gráficos')

@section('content_header')
<h1>Gráficas de Equipo de Cómputo, Impresiones y Escaneo.</h1>
@stop

@section('content')

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<figure class="highcharts-figure">
  <div id="container"></div>
  
  </figure>
<script>
var datas = <?php echo json_encode($datas)?>;
 Highcharts.chart('container', {
    chart: {
    type: 'column'
  },
        title: {
            text: 'Registros de solicitantes por mes "Equipo de Cómputo, Impresiones y Escaneo" '
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre',
                'Octubre', 'Noviembre', 'Diciembre'
            ]
        },
        yAxis: {
            title: {
                text: 'Número de registros'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Registros de EC-I-E',
            data: datas
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });

</script>
<figure class="highcharts-figure">
  <div id="container2"></div>
  
  </figure>
<script>
var comp2 = <?php echo json_encode($comp2)?>;
 Highcharts.chart('container2', {
    chart: {
    type: 'column'
  },
        title: {
            text: 'Tipo de Servicio'
        },
        subtitle: {
            text: 'Registro de los solicitantes por tipo de servicio'
        },
        xAxis: {
            categories: ['Equipo de computo','Escaneo', 'Impresiones', 
            ]
           
        },
        yAxis: {
            title: {
                text: 'Número de registros'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Solicitantes de tipo de servicio',
             colorByPoint: true,
            data: comp2
            
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });

</script>
<figure class="highcharts-figure">
  <div id="container3"></div>
  
  </figure>
<script>
var comp3 = <?php echo json_encode($comp3)?>;
 Highcharts.chart('container3', {
    chart: {
    type: 'column'
  },
        title: {
            text: 'Licenciaturas'
        },
        subtitle: {
            text: 'Registro de los solicitantes por carrera'
        },
        xAxis: {
            categories: ['Cultura Física y Deporte',
                         'Educación',
                         'Psicología',
                         'Trabajo Social',
                         'Otros',
            ]
        },
        yAxis: {
            title: {
                text: 'Número de registros'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Solicitantes por Carrera',
             colorByPoint: true,
            data: comp3
            
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });
</script>

<figure class="highcharts-figure">
  <div id="container4"></div>
 
  </figure>
<script>
var comp4 = <?php echo json_encode($comp4)?>;
 Highcharts.chart('container4', {
    chart: {
    type: 'column'
  },
        title: {
            text: 'Usuarios'
        },
        subtitle: {
         text: 'Registro de los solicitantes por usuario'

        },
        xAxis: {
            categories: ['Administrativo','Alumno','Externo'
            ]
        },
        yAxis: {
            title: {
                text: 'Número de registros'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Solicitantes por tipo de usuario',
            data: comp4
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });

</script>

@stop

