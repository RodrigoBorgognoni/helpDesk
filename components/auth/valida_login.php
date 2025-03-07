<?php
//inicia a sessão para a instância atual
session_start();

//variável que verifica se autenticação foi realizada
$usuario_autenticado = false;

//usuarios do sistema
$usersApp = [
    ['email' => 'adm@teste.com.br', 'senha' => '123456'],
    ['email' => 'user@teste.com.br', 'senha' => 'abcd'],
];

//Percorre o array de usuários
foreach ($usersApp as $user) {

    //verifica se o usuário do formulário é igual ao usuário cadastrado no sistema
    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
        $usuario_autenticado = true;
    };
};

//Se a autenticação for verdadeira, redireciona para a página home
if ($usuario_autenticado) {
    echo 'Usuário Autenticado';
    //Cria um índice 'autenticado' na sessão com valor de 'Sim'
    $_SESSION['autenticado'] = 'SIM';
    header('Location: /views/home.php');
} else {
    $_SESSION['autenticado'] = 'NAO';
    // Se a autenticação for falsa, redireciona para a página de login com erro (superglobal GET)
    header('Location: /index.php?Login=erro');
};

?>
