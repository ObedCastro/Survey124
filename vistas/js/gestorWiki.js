/* la variable "localhost" está definida en el archivo base */
$("#formNuevaEntradaWiki").on("submit", function(e){
    e.preventDefault();

    if($("#iTituloProblema").val() != "" && $("#taDescripcionProblema").val() != ""){
        var datos = $("#formNuevaEntradaWiki").serialize();
    
        /* console.log(datos); */
    
        $.ajax({
            url: localhost+"ajax/wiki.ajax.php",
            method: "POST",
            data: datos,
            dataType: "json",
            success: function(respuesta){
                Swal.fire({
                    position: "center",
                    icon: respuesta.icono,
                    title: respuesta.titulo,
                    text: respuesta.mensaje,
                    showConfirmButton: true
                  });
    
                $("#modalNuevaEntradaWiki").modal('hide');
                location.reload();                
            }
        });
    }

});


//PARA MOSTRAR LAS RESPUESTAS
$(".mostrarRespuestas").on("click", function(){

    var idWiki = $(this).attr("idWiki");

    var data = new FormData();
    data.append("idWiki", idWiki);
    //console.log(idWiki);

    $.ajax({
        type: "POST",
        url: localhost+"ajax/wiki.ajax.php",
        data: data,
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'json',
        success: function(respuesta){
            $(".how-section1").empty();
            //console.log(respuesta);
            
            var contador = 1;
            
            if(respuesta.length > 0){
                $(".respuestas .tituloProblema").text(respuesta[0].tituloproblema);
                $(".respuestas .descripcionProblema").text(respuesta[0].descripcionproblema);
                $(".respuestas .solucionProblema").text(respuesta[0].solucionproblema);

                if(respuesta[0].solucionproblema == ""){
                    $(".respuestas .solucionProblema").text("No propuso una respuesta");
                }

                for(var key in respuesta){
                    $("#idWikiColabora").val(respuesta[key].idwiki);
                    contador += 1;
                    if(contador % 2){
                        $(".how-section1").append(
                            '<div class="row text-start">'
                                +'<div class="col-md-1 how-img px-0 pb-0">'
                                    +'<img src="'+localhost+'vistas/assets/img/'+respuesta[key].usuario+'.jpg" class="rounded-circle img-fluid" alt=""/>'
                                +'</div>'
                                +'<div class="col-md-10 px-0 mx-0">'
                                    +'<h5 class="text-primary nombreAdminRespuesta">'+respuesta[key].nombreadmin+'</h5>'
                                    +'<h4 class="subheading cargoAdminRespuesta">'+respuesta[key].cargoadmin+'</h4>'
                                    +'<p class="text-muted text-xs respuesta">'+respuesta[key].colaboracion+'</p>'
                                +'</div>'
                            +'</div><hr>');
                    } else{
                        $(".how-section1").append(
                            '<div class="row text-end">'
                                +'<div class="col-md-10 px-0 mx-0">'
                                    +'<h5 class="text-primary nombreAdminRespuesta">'+respuesta[key].nombreadmin+'</h5>'
                                    +'<h4 class="subheading cargoAdminRespuesta">'+respuesta[key].cargoadmin+'</h4>'
                                    +'<p class="text-muted text-xs respuesta">'+respuesta[key].colaboracion+'</p>'
                                +'</div>'
                                +'<div class="col-md-1 how-img px-0">'
                                    +'<img src="'+localhost+'vistas/assets/img/'+respuesta[key].usuario+'.jpg" class="rounded-circle img-fluid" alt=""/>'
                                +'</div>'
                            +'</div><hr>');
                    }

                    
                }

                $('#modalRespuestasWiki').on('shown.bs.modal', function () {
                    $('#modalRespuestasWiki').modal('handleUpdate');
                    $('#modalRespuestasWiki').scrollTop(1);
                })                

            } else{
                //console.log(respuesta);
                $("#idWikiColabora").val(respuesta.idwiki);
                $(".respuestas .tituloProblema").text(respuesta.tituloproblema);
                $(".respuestas .descripcionProblema").text(respuesta.descripcionproblema);
                $(".respuestas .solucionProblema").text(respuesta.solucionproblema);

                if(respuesta.solucionproblema == ""){
                    $(".respuestas .solucionProblema").text("No propuso una respuesta");
                }
                return;
            }
        }
      });

})

//PARA REALIZAR UN APORTE
$("#formNuevaColaboracion").on("submit", function(e){
    e.preventDefault();
    var aporte = $("#formNuevaColaboracion").serialize();
    //console.log(aporte);

    $.ajax({
        type: "POST",
        url: localhost+"ajax/wiki.ajax.php",
        data: aporte,
        dataType: 'json',
        success: function(respuesta){

            $(".how-section1").append(
                '<div class="row text-end">'
                    +'<div class="col-md-10 px-0 mx-0">'
                        +'<h5 class="text-primary nombreAdminRespuesta">'+respuesta.colaborador+'</h5>'
                        +'<h4 class="subheading cargoAdminRespuesta">'+respuesta.cargo+'</h4>'
                        +'<p class="text-muted text-xs respuesta">'+respuesta.colaboracion+'</p>'
                    +'</div>'
                    +'<div class="col-md-1 how-img px-0">'
                        +'<img src="'+localhost+'vistas/assets/img/'+respuesta.usuario+'.jpg" class="rounded-circle img-fluid" alt=""/>'
                    +'</div>'
                +'</div><hr>');

            $("#taColaboracion").val("");
        }
    });
});


 //Validación de campos del formulario
 (function () {
    'use strict'

      //Resetear formularios de modal, en cuanto el modal se oculte
      $("#modalNuevaEntradaWiki").on("hidden.bs.modal", function () {
        $(this).find('form')[0].reset();
      });

    var forms = document.querySelectorAll('.needs-validation');

    Array.prototype.slice.call(forms).forEach(function (form) {

      function handleButtonClick(event) {
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
          }

          form.classList.add('was-validated');
        }

        form.addEventListener('submit', handleButtonClick);

        function handleModalClose(){
          form.classList.remove('was-validated');
        }

        document.getElementById('modalNuevaEntradaWiki').addEventListener('hidden.bs.modal', handleModalClose);
      })
  })();