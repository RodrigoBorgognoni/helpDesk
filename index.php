<?php
include_once("components/header.php");
include_once("components/navbar.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<body>

  <div class="container">
    <div class="row">
      <div class="card-login">
        <div class="card">
          <div class="card-header">
            Login
          </div>
          <div class="card-body">
            <form action="assets/auth/valida_login.php" method="post">
              <div class="form-group">
                <input name="email" type="email" class="form-control" placeholder="E-mail">
              </div>
              <div class="form-group">
                <input name="senha" type="password" class="form-control" placeholder="Senha">
              </div>

              <?php
              // Verifica se o índice Login foi setado na URL atravé de GET ex: header('Location: /index.php?Login=erro');
              //e se existe uma mensagem de erro correspondente em error.php
              if (isset($_GET['Login']) && isset($errors[$_GET['Login']])) { ?>
                <div class="text-danger">
                  <?php echo $errors[$_GET['Login']]; ?>
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