<?php

if (isset($_POST['nomeFuncionario'])) {

    $nomeFuncionario = $_POST['nomeFuncionario'];
    $dataNascFuncionario = $_POST['dataNascFuncionario'];
    $cargoFuncionario = $_POST['cargoFuncionario'];
    $especialidadeFuncionario = $_POST['especialidadeFuncionario'];
    $emailFuncionario = $_POST['emailFuncionario'];
    $senhaFuncionario = $_POST['senhaFuncionario'];
    $nivelFuncionario = $_POST['nivelFuncionario'];
    $telefoneFuncionario = $_POST['telefoneFuncionario'];
    $dataAdmissaoFuncionario = $_POST['dataAdmissaoFuncionario'];
    $statusFuncionario = $_POST['statusFuncionario'];

    $arquivo = $_FILES['fotoFuncionario'];

    if ($arquivo['error']) {
        throw new Exception("o error foi: ", $arquivo['error']);
    }

    if (move_uploaded_file($arquivo['tmp_name'], '../img/funcionario/' . $arquivo['name'])) {
        $fotoFuncionario = 'exercicio/' . $arquivo['name']; // funcionario/fernandasouza.png

    } else {
        throw new Exception("o error foi: ", $arquivo['error']);
    }


    require_once('class/funcionario.php');

    $funcionario = new FuncionarioClass();

    $funcionario->nomeFuncionario = $nomeFuncionario;
    $funcionario->dataNascFuncionario = $dataNascFuncionario;
    $funcionario->cargoFuncionario = $cargoFuncionario;
    $funcionario->especialidadeFuncionario = $especialidadeFuncionario;
    $funcionario->emailFuncionario = $emailFuncionario;
    $funcionario->senhaFuncionario = $senhaFuncionario;
    $funcionario->nivelFuncionario = $nivelFuncionario;
    $funcionario->telefoneFuncionario = $telefoneFuncionario;
    $funcionario->dataAdmissaoFuncionario = $dataAdmissaoFuncionario;
    $funcionario->statusFuncionario = $statusFuncionario;
    $funcionario->fotoFuncionario = $fotoFuncionario;


    $funcionario->Cadastrar();
}

?>


<h2 class="display-4">Página Cadastrar Funcionários</h2>

<form action="index.php?p=funcionario&f=cadastrar" method="POST" enctype="multipart/form-data" class="formulario-funcionario">

    <div class="mb-3 foto-funcionario">
        <label for="fotoFuncionario" class="form-label">Foto:</label>
        <input type="file" class="form-control" id="fotoFuncionario" name="fotoFuncionario" style="display:none;">
        <img src="../img/imagemPNG/semImagem.png" alt="Imagem Sem Foto" id="imgFoto">
    </div>


    <div class="nome-funcionario">
        <div class="mb-3">
            <label for="nomeFuncionario" class="form-label">Nome:</label>
            <input type="text" class="form-control" name="nomeFuncionario" id="nomeFuncionario" placeholder="Nome do funcionário">
        </div>


        <div class="mb-3">
            <label for="cargoFuncionario" class="form-label">Cargo:</label>
            <input type="text" class="form-control" name="cargoFuncionario" id="cargoFuncionario" placeholder="Cargo do funcionário">
        </div>


        <div class="mb-3">
            <label for="especialidadeFuncionario" class="form-label">Especialidade:</label>
            <input type="text" class="form-control" name="especialidadeFuncionario" id="especialidadeFuncionario" placeholder="Especialidade do funcionário">
        </div>


        <div class="mb-3">
            <label for="emailFuncionario" class="form-label">E-mail:</label>
            <input type="text" class="form-control" name="emailFuncionario" id="emailFuncionario" placeholder="E-mail do funcionário">
        </div>


        <div class="mb-3">
            <label for="telefoneFuncionario" class="form-label">Telefone:</label>
            <input type="text" class="form-control" name="telefoneFuncionario" id="telefoneFuncionario" placeholder="Telefone do funcionário">
        </div>


        <div class="row">

            <div class="mb-3">
                <label for="nivelFuncionario" class="form-label">Nível:</label>

                <select class="form-select col-sm-2" aria-label="Default select example" name="nivelFuncionario" required>
                    <option selected="">Selecioneo nível do funciónario</option>
                    <option value="Administrador">Administrador</option>
                    <option value="Outros">Outros</option>
                </select>

            </div>


            <div class="mb-3">
                <label for="senhaFuncionario" class="form-label">Senha:</label>
                <input type="text" class="form-control" name="senhaFuncionario" id="senhaFuncionario" placeholder="Senha do Funcionário">
            </div>


            <div class="mb-3">
                <label for="dataNascFuncionario">Data de nascimento:</label><br>
                <input type="date" class="form-control" id="dataNascFuncionario" name="dataNascFuncionario"><br>
            </div>


            <div class="mb-3">
                <label for="dataAdmissaoFuncionario">Data de Admissao Funcionário:</label><br>
                <input type="date" class="form-control" id="dataAdmissaoFuncionario" name="dataAdmissaoFuncionario"><br>
            </div>


            <fieldset class="row mb-3">
                <div class="col-sm-10">
                    <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="statusFuncionario" id="statusFuncionario" value="ATIVO" checked>
                        <label class="form-check-label">
                            ATIVO
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="statusFuncionario" id="statusFuncionario" value="INATIVO">
                        <label class="form-check-label">
                            INATIVO
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="statusFuncionario" id="statusFuncionario" value="DESATIVADO">
                        <label class="form-check-label">
                            DESATIVADO
                        </label>
                    </div>

                </div>

            </fieldset>


            <div class="col-12">
                <button type="submit" class="btn btn-primary">Cadastrar Funciónario</button>
            </div>


        </div>

    </div>

</form>