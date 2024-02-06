<div class="modal fade" id="modalConsultores" data-bs-backdrop="static" tabindex="-1" aria-labelledby="modalConsultoresLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalConsultoresLabel">Registrar nuevo Consultor</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post" class="needs-validation" id="formNuevoConsultor" novalidate>
          <input type="hidden" name="nuevo" value="1">

          <div class="mb-3 row">
            <div class="col-md-6">
              <label for="nombreConsultor" class="form-label">Nombre</label>
              <input type="text" class="form-control" placeholder="Ingrese nombre" id="nombreConsultor" name="nombreConsultor" minlength="10" maxlength="50" required>
              <div class="invalid-feedback">El nombre es requerido (Entre 10 y 50 caracteres).</div>
            </div>
            <div class="col-md-6">
              <label for="duiConsultor" class="form-label">DUI</label>
              <input type="text" class="form-control" placeholder="Ingrese DUI" id="duiConsultor" name="duiConsultor">
            </div>
          </div>

          <div class="mb-3 row">
                <div class="col-md-6">
                    <label for="cargoConsultor" class="form-label">Cargo</label>
                    <input type="text" class="form-control" placeholder="Ingrese el cargo" id="cargoConsultor" name="cargoConsultor" required>
                    <div class="invalid-feedback">Debe colocar un cargo para el consultor.</div>
                </div>
                <div class="col-md-3">
                    <label for="contactoConsultor" class="form-label">Contacto</label>
                    <input type="text" class="form-control" placeholder="Contacto del consultor" id="contactoConsultor" name="contactoConsultor" required>
                    <div class="invalid-feedback">El contacto es requerido.</div>
                </div>
                <div class="col-md-3">
                    <label for="sedeConsultor" class="form-label">Sede</label>
                    <select class="form-select" aria-label="Default select example" id="sedeConsultor" name="sedeConsultor" required>
                        <option value=""></option>
                        <?php 
                          $sedes = ControladorSedes::ctrMostrarSedes(null, null);
                          foreach ($sedes as $key => $value) {
                            echo '<option value="'.$value["idsede"].'">'.$value["nombresede"].' '.$value["departamentosede"].'</option>';
                          }
                        ?>
                    </select>
                    <div class="invalid-feedback">Seleccione la sede a la que pertenece el consultor.</div>
                </div>
          </div>

          <div class="mb-3 row">
                <div class="col-md-3">
                    <label for="fechaRegistroConsultor" class="form-label">Fecha</label>
                    <?php
                        date_default_timezone_set('America/El_Salvador');
                        $fechahoy = date("Y-m-d");
                        echo '<input type="text" class="form-control" value="'.$fechahoy.'" id="fechaRegistroConsultor" name="fechaRegistroConsultor" readonly>';
                    ?>
                    <div class="invalid-feedback"></div>
                </div>
          </div>


          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>

        <?php
          /* $registrarConsultor = new ControladorConsultores();
          $registrarConsultor->ctrRegistrarConsultor(); */
        ?>

      </div>
    </div>
  </div>
</div>




<!-- <script>

 // Example starter JavaScript for disabling form submissions if there are invalid fields
 (function () {
    'use strict'

      //Resetear formularios de modal, en cuanto el modal se oculte
      $("#modalConsultores").on("hidden.bs.modal", function () {
        $(this).find('form')[0].reset();
      });

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
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

        document.getElementById('modalConsultores').addEventListener('hidden.bs.modal', handleModalClose);
      })
  })()

</script> -->