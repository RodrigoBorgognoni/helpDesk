<?php
session_start();

//remover indices do array de sessão
//unset($_SESSION['autenticado']) //remove apenas se existir

//destruir variavel de sessão
session_destroy(); //é destruída mas os efeitos só ocorrem na próxima requisição

//forçar um redirecionamento para forçar o destroy
header('Location: /index.php');

/* 
echo '<pre>';
    print_r($_SESSION);
echo '</pre>'; */
?>