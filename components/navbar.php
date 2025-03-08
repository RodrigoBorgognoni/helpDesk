<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="/views/home.php">
        <img src="/assets/styles/img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
    </a>
    <?php
    // Verifica se o arquivo atual não é index.php
    if (basename($_SERVER['PHP_SELF']) != 'index.php') {
        echo '<ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="/components/auth/logoff.php"><img src="/assets/styles/img/sair.png" alt="sair" width="30" height="30"></a>
        </ul>';
    }
    ?>
</nav>
<?php 
/* echo '<pre>';
    print_r($_SERVER);
echo '</pre>'; */
?>