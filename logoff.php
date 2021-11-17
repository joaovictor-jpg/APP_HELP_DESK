<?php

    session_start();
 /*
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

    //Remove índices do array de sessão
    //unset()

    unset($_SESSION['x']); //Para remover o índice apenas se ele existir

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

    //destruir a variável de sessão
    //session_destroy()

    session_destroy(); //será destruida
    //lembrar de fazer um redirecionamento

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
*/

    session_destroy();
    header('Location: index.php');

?>