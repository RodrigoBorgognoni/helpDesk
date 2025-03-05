<?php 
include_once($_SERVER['DOCUMENT_ROOT'] . '/assets/auth/authSession.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/components/header.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/components/navbar.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<body>
  <div class="container">
    <div class="row">

      <div class="card-home">
        <div class="card">
          <div class="card-header">
            Menu
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-6 d-flex justify-content-center">
                <img src="/assets/img/formulario_abrir_chamado.png" width="70" height="70">
              </div>
              <div class="col-6 d-flex justify-content-center">
                <img src="/assets/img/formulario_consultar_chamado.png" width="70" height="70">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>

</html>