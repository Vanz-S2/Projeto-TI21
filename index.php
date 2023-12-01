<?php

require_once('admin/class/exercicios.php');

$exercicios = new ExerciciosClass();
$lista = $exercicios->Listar();

var_dump($lista);




?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto TI21</title>

    <link rel="stylesheet" href="css/reset.css">>

    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/lity.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>


<body>


    <!------------------Começo do Cabeçalho-------------------->
    <?php require_once('conteudo/topo.php') ?>
    <!------------------Fim do Cabeçalho-------------------->


    <main> <!--Começo do Corpo-->


        <!-------------Começo do Banner---------------->
        <?php require_once('conteudo/banner.php') ?>
        <!---- --------Fim do banner------------------->


        <!-------------Começo do Sobre----------------->
        <?php require_once('conteudo/sobre.php') ?>
        <!-------------Fim do Sobre-------------------->


        <!-------------Começo do Serviço--------------->
        <?php require_once('conteudo/servico.php') ?>
        <!-------------Fim do Serviço------------------>


        <!-------------Começo da galeria--------------->
        <?php require_once('conteudo/galeria.php') ?>
        <!-------------Fim da galeria------------------>


        <!-------------Começo da equipe---------------->
        <?php require_once('conteudo/equipe.php') ?>
        <!-------------Fim da equipe------------------->


        <!-------------Começo do Destaque-------------->
        <?php require_once('conteudo/destaque.php') ?>
        <!-------------Fim do Destaque----------------->


    </main> <!-----Fim do Corpo-->


    <!-----------------Começo do Rodape---------------->
    <?php require_once('conteudo/rodape.php') ?>
    <!-----------------Fim do Rodape------------------->


    <!-----------------Java Script--------------------->

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script> <!--Biblioteca do JQUERY-->

    <script src="js/slick.min.js"></script> <!--Livro da Biblioteca-->
    <script src="js/lity.min.js"></script> <!--Livro da Biblioteca-->
    <script src="js/wow.min.js"></script> <!--Livro da Biblioteca-->


    <script src="js/script.js"></script> <!--Animações do java-->

    <!-----------------Java Script--------------------->

</body>

</html>