<?php
//verificando se a variável "nomeAluno" está definida no $_POST usando um formulário com o método POST
if (isset($_POST['nomeAluno'])) {

    $nomeAluno = $_POST['nomeAluno'];
    $emailAluno = $_POST['emailAluno'];
    $dataNascAluno = $_POST['dataNascAluno'];
    $dataCadAluno = $_POST['dataCadAluno'];
    $statusAluno = $_POST['statusAluno'];

    //atribuindo o valor "fotoAluno" para a variável "$arquivo"
    //o $_FILES é usado para armazenar informações de arquivos enviados atavés do formmulário
    $arquivo = $_FILES['fotoAluno'];


    //A primeira condição verifica se ocorreu algum erro durante o upload do arquivo
    if ($arquivo['error']) {
        throw new Exception("o error foi: ", $arquivo['error']);

    }

    //A segunda condição utiliza a função "move_uploaded_file" para mover o arquivo para um diretório específico
    if (move_uploaded_file($arquivo['tmp_name'], '../img/aluno/' . $arquivo['name'])) {
        $fotoAluno = 'aluno/' . $arquivo['name']; // aluno/jaoasilva.png

    } else {
        throw new Exception("o error foi: ", $arquivo['error']);

    }

    //criando um caminho do arquivo "class-aluno.php"
    require_once('class/class-aluno.php');

    //criando uma nova instância usando o comando "new" e atribuindo para variável "$aluno" os métodos e atributos da classe "AlunosClass"
    $aluno = new AlunosClass();

    //atribuindo a variável "$nomeAluno" para "nomeAluno"
    //a variável "$aluno" está chamando o "nomeAluno" que tem os atributos guardada nele
    $aluno->nomeAluno = $nomeAluno;
    //$aluno->altAluno = $altAluno;
    $aluno->emailAluno = $emailAluno;
    $aluno->dataNascAluno = $dataNascAluno;
    $aluno->dataCadAluno = $dataCadAluno;
    $aluno->statusAluno = $statusAluno;
    $aluno->fotoAluno = $fotoAluno;

    //a variável "$aluno" está chamando o método guardado no "Cadastrar()"
    $aluno->Cadastrar();
}

//o var_dump é usado para exibir informações detalhadas sobre uma variável

//print($_POST['nomeAluno']);
//var_dump ($_POST['emailAluno']);
//var_dump ($_POST['dataNascAluno']);
//var_dump ($_POST['dataCadAluno']);
//var_dump ($_POST['statusAluno']);
//var_dump ($_POST['fotoAluno']);

?>


<h2 class="display-4">Página Cadastrar Alunos</h2>



<!--criando um formulário usando o comando "form" com o método "POST" e "multipart/form-data" para enviar arquivos  -->

<!-- o formulário está enviando as informações colocadas nele para o arquivo "index.php?p=alunos&alu=cadastrar" -->
<form action="index.php?p=alunos&alu=cadastrar" method="POST" enctype="multipart/form-data"
    class="formulario-exercicio">


    <!-- nessa parte será inserida a foto do aluno -->
    <!--criando uma parte do formulário que será respondida -->
    <!-- o (input type="file") define um campo de seleção de arquivo e um botão para uploads de arquivos-->
    <!-- o (id="fotoAluno") define um identificador único para o campo de entrada -->
    <!-- o (name="fotoAluno") define o nome do campo de entrada.-->

    <div class="mb-3 foto-exercicio">
        <label for="fotoAluno" class="form-label">Foto:</label>
        <input type="file" class="form-control" id="fotoAluno" name="fotoAluno" style="display:none;">
        <img src="../img/imagemPNG/semImagem.png" alt="Imagem Sem Foto" id="imgFotoAluno">
    </div>


    <!-- nessa parte será inserida o nome do aluno -->
    <!-- o (input type="text") define um campo de entrada de texto de linha única-->
    <!-- o (placeholder="Nome do aluno") exibe um texto/dica de como o campo deve ser respondido  -->
    <div class="nome-exercicio">
        <div class="mb-3">
            <label for="nomeAluno" class="form-label">Nome:</label>
            <input type="text" class="form-control" name="nomeAluno" id="nomeAluno"
                placeholder="Nome do aluno">
        </div>


        <!-- nessa parte será inserida o e-mail do aluno -->
        <div class="mb-3">
            <label for="emailAluno" class="form-label">E-mail:</label>
            <input type="text" class="form-control" name="emailAluno" id="emailAluno"
                placeholder="E-mail do aluno">
        </div>


        <div class="row data">


            <!-- nessa parte será inserida a data de nascimento do aluno -->
            <!-- o (input type="date") define um campo de entrada que devem conter uma data-->
            <div class="mb-3">
                <label for="dataNascAluno" class="form-label">Data de Nascimento:</label>
                <input type="date" class="form-control" name="dataNascAluno" id="dataNascAluno"
                    placeholder="Data de nascimento do aluno">
            </div>

            <div class="mb-3">
                <label for="dataCadAluno" class="form-label">Data de Cadastro:</label>
                <input type="date" class="form-control" name="dataCadAluno" id="dataCadAluno"
                    placeholder="Data de cadastro do aluno">
            </div>

        </div>




        <fieldset class="row mb-3">
            <div class="col-sm-10">

                <!-- "legend" é usado para fornecer uma legenda para um campo do formulário. -->
                <legend class="col-form-label col-sm-2 pt-0">Status</legend>

                <!-- nessa parte será inserida o status do aluno -->
                <!-- o (input type="radio") define um campo de botão de opção onde só pode ser selecionado um-->
                <!-- o (value="ATIVO") coloca um valor para o campo-->
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="statusAluno" id="status1" value="ATIVO"
                        checked>
                    <label class="form-check-label" for="status1">
                        ATIVO
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="statusAluno" id="status2" value="INATIVO">
                    <label class="form-check-label" for="status2">
                        INATIVO
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="statusAluno" id="status3" value="DESATIVADO">
                    <label class="form-check-label" for="status3">
                    DESATIVADO
                    </label>
                </div>

            </div>


        </fieldset>


        <!-- nessa parte será enviado o formulário do aluno -->
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Cadastrar Aluno</button>
        </div>

    </div>

    </div>

</form>