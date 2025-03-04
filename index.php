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
            <form action="/components/valida_login.php" method="post">
              <div class="form-group">
                <input name="email" type="email" class="form-control" placeholder="E-mail">
              </div>
              <div class="form-group">
                <input name="senha" type="password" class="form-control" placeholder="Senha">
              </div>

              <?php
              // Verifica se a índice Login (valida_login.php) foi setado e se é igual a erro
              if (isset($_GET['Login']) && $_GET['Login'] == 'erro') { ?>
                <div class="text-danger">
                  Usuário ou senha inválido(s)
                </div>
              <?php } ?>
              <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</body>

</html>