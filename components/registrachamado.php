<?php
session_start();

// Define o fuso horário para América/São Paulo
date_default_timezone_set('America/Sao_Paulo');

// Gera o timestamp
$timestamp = date('Y-m-d_H-i-s');

//função para abrir um arquivo, caso não exista, será criado
$arquivo = fopen(__DIR__ . '/../arquivos/chamados/chamado_' . $timestamp . '.txt', 'a'); //https://www.php.net/manual/en/function.fopen.php


//função implode para juntar os valores do array em uma string delimitada por | e PHP_EOL para pular linha
//e str_replace para substituir o caractere | por espaço no array $_POST
$texto = implode(' | ', str_replace('|', ' ', $_POST)) . PHP_EOL;

if ($arquivo) {
    //escreve no arquivo
    fwrite($arquivo, $texto);
    // Fecha o arquivo
    fclose($arquivo);
    // Define a mensagem de sucesso na sessão
    $_SESSION['mensagem'] = 'Chamado incluído com sucesso!';
} else {
    echo 'Erro ao criar chamado.';
}

header('Location: /views/abrir_chamado.php');
exit();
?>
