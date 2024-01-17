<?php

$pagina = @$_GET['p'];


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="../css/reset.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <link rel="stylesheet" href="css/estilo.css">

</head>






<body>

    <header class="topo">

        <h1><img src="../img/icones/logoVivaBem.svg" alt=""></h1>



        <h2>
            <?php
            switch ($pagina) {
                case 'ajuda':
                    echo 'Página ajuda';
                    break;

                case 'contato':
                    echo 'Página contato';
                    break;

                case 'relatorios':
                    echo 'Página relatorios';
                    break;

                case 'pagamentos':
                    echo 'Página pagamentos';
                    break;

                case 'alunos':
                    echo 'Página alunos';
                    break;

                case 'funcionario':
                    echo 'Página funcionario';
                    break;

                case 'treinos':
                    echo 'Página treinos';
                    break;

                case 'aulas':
                    echo 'Página aulas';
                    break;

                case 'exercicios':
                    echo 'Página exercicios';
                    break;

                case 'matriculas':
                    echo 'Página matriculas';
                    break;

                case 'dashboard':
                    echo 'Página dashboard';
                    break;


                default:
                    echo 'Página dashboard';
                    break;
            }
            ?>
        </h2>


        <div>
            <img src="../img/icones/user.png" alt="">
            <h4>Nome</h4>
        </div>
    </header>


    <main>

        <section class="tabela">
            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="index.php?p=dashboard" class="<?php echo (($pagina == 'dashboard') || ($pagina == '')) ? 'menuAtivo' : ''; ?>">Dashboard</a></li>
                        <li><a href="index.php?p=matriculas" class="<?php echo ($pagina == 'matriculas') ? 'menuAtivo' : ''; ?>">Matrículas</a></li>
                        <li><a href="index.php?p=exercicios" class="<?php echo ($pagina == 'exercicios') ? 'menuAtivo' : ''; ?>">Exercícios</a></li>
                        <li><a href="index.php?p=aulas" class="<?php echo ($pagina == 'aulas') ? 'menuAtivo' : ''; ?>">Aulas</a> </li>
                        <li><a href="index.php?p=treinos" class="<?php echo ($pagina == 'treinos') ? 'menuAtivo' : ''; ?>">Treinos</a></li>
                        <li><br></li>
                        <li><a href="index.php?p=funcionario" class="<?php echo ($pagina == 'funcionario') ? 'menuAtivo' : ''; ?>">Funcionários</a></li>
                        <li><a href="index.php?p=alunos" class="<?php echo ($pagina == 'alunos') ? 'menuAtivo' : ''; ?>">Alunos</a></li>
                        <li><a href="index.php?p=pagamentos" class="<?php echo ($pagina == 'pagamentos') ? 'menuAtivo' : ''; ?>">Pagamentos</a></li>
                        <li><a href="index.php?p=relatorios" class="<?php echo ($pagina == 'relatorios') ? 'menuAtivo' : ''; ?>">Relátorios</a></li>
                        <li><a href="index.php?p=contato" class="<?php echo ($pagina == 'contato') ? 'menuAtivo' : ''; ?>">E-mail</a></li>
                        <li><a href="index.php?p=ajuda" class="<?php echo ($pagina == 'ajuda') ? 'menuAtivo' : ''; ?>">Ajuda e Suporte</a></li>
                    </ul>
                </nav>
            </div>


            <div class="conteudo">

                <?php

                switch ($pagina) {
                    case 'ajuda':
                        echo 'pg ajuda';
                        break;

                    case 'contato':
                        require_once('contato/contato.php');
                        break;

                    case 'relatorios':
                        echo 'pg relatorios';
                        break;

                    case 'pagamentos':
                        echo 'pg pagamentos';
                        break;

                    case 'alunos':
                        require_once('aluno/aluno.php');
                        break;

                    case 'funcionario':
                        require_once('funcionario/funcionario.php');
                        break;

                    case 'treinos':
                        echo 'pg treinos';
                        break;

                    case 'aulas':
                        echo 'pg aulas';
                        break;

                    case 'exercicios':
                        require_once('exercicios/exercicios.php');
                        break;

                    case 'matriculas':
                        echo 'pg matriculas';
                        break;

                    case 'dashboard':
                        echo 'pg dashboard';
                        break;


                    default:
                        echo 'pg dashboard';
                        break;
                }

                ?>

            </div>


        </section>


    </main>



    <footer class="rodape">

        <section>
            <h2>Direitos reservados ao TI21 - Senac SMP</h2>
        </section>

        <section>
            <h2>Desenvolvido por Alessandro e Ricardo</h2>
        </section>

    </footer>






    <script src="https://code.jquery.com/jquery-3.7.1.js"></script> <!--Biblioteca do JQUERY-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> <!--Biblioteca do BootStrap-->
    <script src="js/script.js"></script>

</body>

</html>