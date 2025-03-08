<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/components/auth/authSession.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/components/header.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/components/navbar.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">

<body>
  <?php
  // Verifica se há uma mensagem de sucesso na sessão
  if (isset($_SESSION['mensagem'])) {
    $mensagem = $_SESSION['mensagem'];
    // Remove a mensagem da sessão
    unset($_SESSION['mensagem']);
  }
  ?>
  <div class="container">
    <div class="row">

      <div class="card-chamado">
        <div class="card">
          <div class="card-header">
            Abertura de chamado
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col">

                <form method="post" action="/components/registrachamado.php">
                  <div class="form-group">
                    <label>Título</label>
                    <input type="text" name="titulo" class="form-control" placeholder="Título">
                  </div>

                  <div class="form-group">
                    <label>Categoria</label>
                    <select name="categoria" class="form-control">
                      <option>Criação Usuário</option>
                      <option>Impressora</option>
                      <option>Hardware</option>
                      <option>Software</option>
                      <option>Rede</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Descrição</label>
                    <textarea name="descricao" class="form-control" rows="3"></textarea>
                  </div>

                  <div class="row mt-5">
                    <div class="col-6">
                      <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                    </div>

                    <div class="col-6">
                      <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        <?php if (isset($mensagem)) { ?>
          alert('<?php echo $mensagem; ?>');
        <?php } ?>
      });
    </script>
</body>

</html>