<!DOCTYPE html>
<html lang="pt-BR">
<?php
include_once("header.php");
?>
  <body>
  <?php 
    include_once("navbar.php");
  ?>

    <div class="container">
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Senha">
                </div>
                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
  </body>
</html>