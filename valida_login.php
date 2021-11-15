<?php
    /*print_r($_POST);
    echo '<br>';
    echo $_POST['email'];
    echo '<br>';
    echo $_POST['senha'];*/

    //variável verifica se a autenticação foi realizada
    $usuario_autenticado = false;

    //verificação de usuário
    $usuario_app = [
        ['email' => 'adm@teste.com.br', 'senha' => '123456'],
        ['email' => 'user@teste.com.br', 'senha' => 'abcd']
    ];

    /*echo '<pre>';
        print_r($usuario_app);
    echo '</pre>';*/

    foreach($usuario_app as $user) {
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
        }
    }

    if($usuario_autenticado){
        echo 'Usuário autenticado';
    }else {
        header('Location: index.php?login=erro');
    }
?>