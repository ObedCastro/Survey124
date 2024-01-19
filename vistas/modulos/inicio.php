
    <!--Header-->
    <?php
        //include "header.php";
    ?>

    <div class="container-fluid py-2">

      <?php
        include "inicio/info-relevante.php";
      ?>

      <div class="row mt-4">

        <?php
          include "inicio/dispositivos-modelos.php";
          include "inicio/dispositivos-asignaciones.php";
        ?>

      </div>
      <div class="row my-4">

        <?php
          include "inicio/ultimos-movimientos.php";
        ?>

      </div>

      <?php
        //include "footer.php";
      ?>

    </div>




  <script>

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
    })

    


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
    })
  </script>

  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
