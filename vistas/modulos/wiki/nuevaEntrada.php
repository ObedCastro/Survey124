<div class="modal fade" id="modalNuevaEntradaWiki" tabindex="-1" aria-labelledby="modalNuevaEntradaWikiLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-white" id="modalNuevaEntradaWikiLabel">Nueva entrada</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" id="formNuevaEntradaWiki" class="needs-validation" novalidate>
            <input type="hidden" name="nuevaEntradaWiki" value="1">
            <div class="mb-3 row">
                <label class="form-label col-md-12">Título
                    <input type="text" class="form-control" id="iTituloProblema" name="iTituloProblema" required>
                    <div class="invalid-feedback">Este campo es requreido.</div>
                </label>
            </div>
            <div class="mb-2 row">
                <label class="form-label col-md-12">Descripción
                    <textarea class="form-control" placeholder="Dé una descripión sobre el problema" name="taDescripcionProblema" id="taDescripcionProblema" required></textarea>
                    <div class="invalid-feedback">Por favor describa el problema.</div>
                </label>
            </div>

            <div class="accordion" id="accordionSolucion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                    <a class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <u style="cursor:pointer;">Agregar la solución</u>
                    </a>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse mb-0" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body mt-0">
                            <div class="mb-3 row">
                                <label class="form-label col-md-12">Solución
                                    <textarea class="form-control" placeholder="Describa la solución para este problema" name="taSolucionProblema" id="taSolucionProblema"></textarea>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-end">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
      </div>
      
    </div>
  </div>
</div>