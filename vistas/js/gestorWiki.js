$("#formNuevaEntradaWiki").on("submit", function(e){
    e.preventDefault();

    var datos = $("#formNuevaEntradaWiki").serialize();

    console.log(datos);

    $.ajax({
        url: "ajax/wiki.ajax.php",
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
    })
}) 


//PARA MOSTRAR LAS RESPUESTAS
$(".mostrarRespuestas").on("click", function(){

    var idWiki = $(this).attr("idWiki");

    var data = new FormData();
    data.append("idWiki", idWiki);
    //console.log(idWiki);

    $.ajax({
        type: "POST",
        url: "ajax/wiki.ajax.php",
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

                for(var key in respuesta){
                    $("#idWikiColabora").val(respuesta[key].idwiki);
                    contador += 1;
                    if(contador % 2){
                        $(".how-section1").append(
                            '<div class="row text-start">'
                                +'<div class="col-md-1 how-img px-0 pb-0">'
                                    +'<img src="vistas/assets/img/'+respuesta[key].usuario+'.jpg" class="rounded-circle img-fluid" alt=""/>'
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
                                    +'<img src="vistas/assets/img/'+respuesta[key].usuario+'.jpg" class="rounded-circle img-fluid" alt=""/>'
                                +'</div>'
                            +'</div><hr>');
                    }
                
                    
                }

            } else{
                console.log(respuesta);
                $("#idWikiColabora").val(respuesta.idwiki);
                $(".respuestas .tituloProblema").text(respuesta.tituloproblema);
                $(".respuestas .descripcionProblema").text(respuesta.descripcionproblema);
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
        url: "ajax/wiki.ajax.php",
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
                        +'<img src="vistas/assets/img/'+respuesta.usuario+'.jpg" class="rounded-circle img-fluid" alt=""/>'
                    +'</div>'
                +'</div><hr>');
        }
    })
})