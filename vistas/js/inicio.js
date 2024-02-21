
/* Gráfico de barras */
var ctx = document.getElementById("chart-bars").getContext("2d");

$.ajax({
  url: "ajax/graficobarras.ajax.php",
  cache: false,
  contentType: false,
  processData: false,
  success: function(resultado){
    var respuesta = JSON.parse(resultado);

    var mostrarModelos = [];
    var mostrarCantidadModelos = [];
    respuesta.forEach(e => {
      mostrarCantidadModelos.push(e[0]);
      mostrarModelos.push(e[1]);
    });

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: mostrarModelos,
        datasets: [{
          label: "Cantidad",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "#fff",
          data: mostrarCantidadModelos,
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 15,
              font: {
                size: 14,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
              color: "#fff"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false
            },
            ticks: {
              display: false
            },
          },
        },
      },
    });
  }
});    

//------------------------------------------------------------------------------------------------------------
/* Gráfico de líneas */
var ctx2 = document.getElementById("chart-line").getContext("2d");

var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors 

$.ajax({
  url: "ajax/graficolineas.ajax.php",
  cache: false,
  contentType: false,
  processData: false,
  success: function(respuesta){
    var datos = JSON.parse(respuesta);
    var meses = ["Ene", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"];
    var mostrarMes = [];
    var mostrarCantidadAsignaciones = [];
    var mostrarCantidadRecepciones = [];

    for (let i = 0; i < datos.length; i++) {
      if(meses[(datos[i].mes)-1]){
        mostrarMes.push(meses[(datos[i].mes)-1]);            
      }
      mostrarCantidadAsignaciones.push(datos[i].total);
    }

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: mostrarMes,
        datasets: [{
            label: "Asignaciones",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#cb0c9f",
            borderWidth: 3,
            backgroundColor: gradientStroke1,
            fill: true,
            data: mostrarCantidadAsignaciones,
            maxBarThickness: 6

          },
          /*{
            label: "Recepciones",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#3A416F",
            borderWidth: 3,
            backgroundColor: gradientStroke2,
            fill: true,
            data: mostrarCantidadRecepciones,
            maxBarThickness: 6
          },*/
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#b2b9bf',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#b2b9bf',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  }
});

//------------------------------------------------------------------------------------------------------------------
/* Gráfico de donas */

// Obtén el contexto del lienzo
var ctx3 = document.getElementById('chart-doughnut').getContext('2d');

$.ajax({
  url: "ajax/graficodonas.ajax.php",
  cache: false,
  contentType: false,
  processData: false,
  success: function(respuesta){

    var datos = JSON.parse(respuesta);
    /* console.log(datos); */

    var sedes = [];
    var cantidadPorSede = [];

    for (let i = 0; i < datos.length; i++) {
      sedes.push(datos[i].sede);
      cantidadPorSede.push(datos[i].cantidad);     
    }

    // Define los datos para el gráfico Doughnut
    var data = {
      labels: sedes,
      datasets: [
        {
          data: cantidadPorSede,
          backgroundColor: ['#02253d', '#365b77', '#c6c6c6'],
          hoverBackgroundColor: ['#02253d', '#365b77', '#c6c6c6']
        }
      ]
    };

    // Configuración del gráfico
    var options = {
      radius: 100,
      responsive: true,
      maintainAspectRatio: false,
      cutoutPercentage: 50, // Porcentaje de recorte para hacer un gráfico de donut
      plugins: {
        legend: {
          title: {
            display: true,
            text: "Dispositivos por sede",
          }
        }
      }
    };

    // Crea el gráfico Doughnut
    new Chart(ctx3, {
      type: 'doughnut',
      data: data,
      options: options
    });
  }
});

//------------------------------------------------------------------------------------------------------------------
/* Mostrar cantidad de dispositivos, con select */
/* Desde el inicio */
$(document).ready(function(){
  var id = $("#selectMostrarPorSede").val();
  var dato = new FormData();
  dato.append("sede", id);

  dispositivosPorSede(dato);
});

/* Cuando cambia el valor del select */
$("#selectMostrarPorSede").on("change", function(){
  var sede = $(this).val();
  var dato = new FormData();
  dato.append("sede", sede);

  dispositivosPorSede(dato);
});

function dispositivosPorSede(dato){
  $.ajax({
    url: "ajax/inicio.ajax.php",
    method: "POST",
    data: dato,
    cache: false,
    contentType: false,
    processData: false,
    dataType: "json",
    success: function(respuesta){
      console.log(respuesta);
      $(".mostrarProgress").empty();
      
      for (let i = 0; i < respuesta.length; i++) {
        icono = respuesta[i].tipo == "Telefono" ? "mobile" : respuesta[i].tipo;

        $(".mostrarProgress").append(
          '<div class="progress-wrapper d-flex align-items-center">'
            +'<i class="fa fa-'+icono.toLowerCase()+' mx-2" aria-hidden="true"></i>'
            +'<div class="progress w-80">'
              +'<div class="progress-bar bg-success" role="progressbar" aria-valuenow="'+respuesta[i].cantidad+'" aria-valuemin="0" aria-valuemax="100" style="width: '+respuesta[i].cantidad+'%;"></div>'
            +'</div>'
            +'<div class="progress-info w-20">'
              +'<span class="text-sm font-weight-bold px-2">'+respuesta[i].cantidad+'%</span>'
            +'</div>'
          +'</div>'
        );
      }
    }
  });
}