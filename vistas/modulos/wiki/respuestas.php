<div class="modal fade" id="modalRespuestasWiki" tabindex="-1" aria-labelledby="modalRespuestasWikiLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content respuestas">
      <div class="modal-header text-center bg-primary">
        <h5 class="modal-title text-white" id="modalRespuestasWikiLabel">RESPUESTAS</h5>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <div class="modal-body bodyModal">
        
        <div class="container text-center">
            <div class="container encabezadoProblema">
                <p class="text-lg tituloProblema mb-0"></p>
                <p class="descripcionProblema text-xs"></p>
            </div>
            <div class="container">
                <p class="mb-0 badge text-bg-secondary text-white">SOLUCIÓN PROPUESTA</p>
                <div class="container solucionpropuesta">
                    <p class="text-xs solucionProblema mt-2"></p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="text-center">
                <p class="text-primary">Otros aportes <i class="fa fa-arrow-down" aria-hidden="true"></i></p>
            </div>
            <div class="how-section1">
                
            </div>

            <form method="post" id="formNuevaColaboracion">
                <input type="hidden" name="idWikiColabora" id="idWikiColabora">
                <div class="mb-2 row">
                    <label class="form-label col-md-12">Dar un aporte
                        <textarea class="form-control" placeholder="Detalle la solución que plantea." name="taColaboracion" id="taColaboracion" required></textarea>
                    </label>
                </div>
                <div class="text-end">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
      </div>

      
    </div>
  </div>
</div>

