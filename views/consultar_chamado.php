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
                        echo '<pre>'; 
                            print_r($_SESSION); 
                        echo '</pre>';
                        try {
                            // Diretório onde os arquivos de chamados estão armazenados
                            $dir = $_SERVER['DOCUMENT_ROOT'] . '/arquivos/chamados/';
                            // Obtém todos os arquivos de chamados no diretório
                            //glob — Encontra arquivos que correspondam a um padrão, no caso, todos os arquivos que começam com chamado_
                            $arquivos = glob($dir . 'chamado_*.txt');

                            /* 
                                se os chamados estivessem em um único arquivo, poderia ser utilizado feof para ler o arquivo até o final
                                while (!feof($arquivo)) {
                                fgets($arquivo); // fgets() lê caracteres da posição atual do fluxo até e incluindo o primeiro caractere de nova linha
                                } 
                                */

                            // Função de comparação para ordenar os arquivos por data de criação em ordem decrescente
                            usort($arquivos, function ($dataAntiga, $dataNova) {
                                // filemtime() retorna o timestamp da última modificação de um arquivo
                                return filemtime($dataNova) - filemtime($dataAntiga);
                            });

                            foreach ($arquivos as $arquivo) {
                                try {
                                    $conteudo = file_get_contents($arquivo);
                                    if ($conteudo === false) {
                                        throw new Exception('Falha ao ler o arquivo: ' . $arquivo);
                                    }

                                    $chamado = explode(' | ', $conteudo);

                                    // Verifica se o usuário tem permissão para ver o chamado
                                    $temPermissao = ($_SESSION['tipoPerfil'] === 'usuário' && $_SESSION['id'] == $chamado[0]) ? true : false;

                                    //verifica se o usuário não tem permissão
                                    if (!$temPermissao) {
                                        continue;
                                    }

                                    if (count($chamado) == 4) {
                                        $id = $chamado[0];
                                        $titulo = $chamado[1];
                                        $categoria = $chamado[2];
                                        $descricao = $chamado[3];

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
                                } catch (Exception $e) {
                                    echo '<div class="alert alert-danger" role="alert">';
                                    echo 'Erro ao processar o arquivo: ' . htmlspecialchars($e->getMessage());
                                    echo '</div>';
                                }
                            }
                        } catch (Exception $e) {
                            echo '<div class="alert alert-danger" role="alert">';
                            echo 'Erro: ' . htmlspecialchars($e->getMessage());
                            echo '</div>';
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