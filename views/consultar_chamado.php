<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '/components/auth/authSession.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/components/header.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/components/navbar.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<body>
    <div class="container">
      <div class="row">

        <div class="card-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>

            <div class="card-body">

              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title">Título do chamado...</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Categoria</h6>
                  <p class="card-text">Descrição do chamado...</p>

                </div>
              </div>

              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title">Título do chamado...</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Categoria</h6>
                  <p class="card-text">Descrição do chamado...</p>

                </div>
              </div>

              <div class="row mt-5">
                <div class="col-6">
                <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>