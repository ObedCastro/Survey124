//PARA LIMPIAR EL FORMULARIO DE CAMBIO DE CONTRASEÑA
var miElemento = $(".offcanvas")[0];
var observer = new MutationObserver(function(mutations) {
    mutations.forEach(function(mutation) {
        // Verifica si se han removido clases
        if (mutation.type === 'attributes' && mutation.attributeName === 'class' && !miElemento.classList.contains('show')) {
            $("#anteriorPassword").val("");
            $("#nuevaPassword").val("");
            $("#repetirPassword").val("");
            $(".mensajeError").text("");
            $("#accordionPassword .collapse").collapse("hide");
        }
    });
});

var config = { attributes: true };
observer.observe(miElemento, config);

//-----------------------------------------------------------------------------------------------------
//CAMBIAR CONTRASEÑA DE USUARIO
$("#formCambioPassword").on("submit", function(e){
    e.preventDefault();

    var passwords = $("#formCambioPassword").serialize();
    //console.log(passwords);

    var anteriorPassword = $("#formCambioPassword #anteriorPassword").val();
    var nuevaPassword = $("#formCambioPassword #nuevaPassword").val();
    var repetirPassword = $("#formCambioPassword #repetirPassword").val();

    if(anteriorPassword == "" || nuevaPassword == "" || repetirPassword == ""){
        $(".mensajeError").text("Por favor complete todos los campos");
    }else if(nuevaPassword != repetirPassword){
        $(".mensajeError").text("Las contraseñas no coinciden");

        $("#nuevaPassword").on("input", function(){
            $(".mensajeError").text("");
        })
    }else{
        $.ajax({
            url: 'ajax/administradores.ajax.php',
            method: "POST",
            dataType: "json",
            data: passwords,
            success: function(respuesta){
                if(respuesta.error){
                    $(".mensajeError").text(respuesta.error);

                    $("#anteriorPassword").on("input", function(){
                        $(".mensajeError").text("");
                    })
                } else{
                    Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "Exito",
                        text: respuesta.mensaje,
                        showConfirmButton: false,
                        timer: 1500
                      });
    
                      setTimeout(() => {
                        window.location.replace("salir");
                      })
                }

            }
        })
    }
    
})


