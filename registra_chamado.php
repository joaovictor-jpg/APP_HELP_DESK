<?php
    session_start();

    //Trabalhando na montagem do texto
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-',$_POST['categoria']);
    $descricao = str_replace('#', '-',$_POST['descricao']);

    $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

    //Abrir arquivo
    $arquivo = fopen('arquivo.txt', 'a');

    //escrever no arquivo
    fwrite($arquivo, $texto);

    //fechar o arquivo
    fclose($arquivo);

    header('Location: abrir_chamado.php');
?>