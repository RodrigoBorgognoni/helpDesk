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
                        <?php
                        // Diretório onde os arquivos de chamados estão armazenados
                        $dir = __DIR__ . '/../arquivos/chamados/';

                        // Obtém todos os arquivos de chamados no diretório
                        //glob — Encontra arquivos que correspondam a um padrão, no caso, todos os arquivos que começam com chamado_
                        $arquivo = glob($dir . 'chamado_*.txt');

                        //se os chamados estivessem em um único arquivo, poderia ser utilizado feof para ler o arquivo até o final
                        // while (!feof($arquivo)) {
                        // fgets($arquivo); // fgets() lê caracteres da posição atual do fluxo até e incluindo o primeiro caractere de nova linha
                        //}

                        // Função de comparação para ordenar os arquivos por data de criação em ordem decrescente
                        usort($arquivo, function ($dataAntiga, $dataNova) {
                            // filemtime() retorna o timestamp da última modificação de um arquivo
                            return filemtime($dataAntiga) - filemtime($dataNova);
                        });

                        foreach ($arquivo as $arquivo) {

                            $conteudo = file_get_contents($arquivo); //file_get_contents — Lê todo o conteúdo de um arquivo em string
                            $chamado = explode(' | ', $conteudo);
                            // 3 porque nosso formulário passa apenas 3 posições, se tiver mais, é porque tem algo errado
                            if (count($chamado) == 3) {
                                $titulo = $chamado[0];
                                $categoria = $chamado[1];
                                $descricao = $chamado[2];
                            }
                        ?>
                            <div class='card mb-3 bg-light'>
                                <div class='card-body'>
                                    <h5 class='card-title'><?php echo htmlspecialchars($titulo) ?></h5>
                                    <h6 class='card-subtitle mb-2 text-muted'><?php echo htmlspecialchars($categoria) ?></h6>
                                    <p class='card-text'><?php echo htmlspecialchars($descricao) ?></p>
                                </div>
                            </div>
                        <?php
                        }
                        ?>

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