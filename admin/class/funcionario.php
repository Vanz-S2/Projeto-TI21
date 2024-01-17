<?php
require_once('conexao.php');

class FuncionarioClass
{

    // Atributos da Class

    public $idFuncionario;
    public $nomeFuncionario;
    public $altFuncionario;
    public $dataNascFuncionario;
    public $cargoFuncionario;
    public $especialidadeFuncionario;
    public $emailFuncionario;
    public $senhaFuncionario;
    public $nivelFuncionario;
    public $telefoneFuncionario;
    public $dataAdmissaoFuncionario;
    public $statusFuncionario;
    public $fotoFuncionario;
    public $linkFaceFuncionario;
    public $linkInstaFuncionario;
    public $linkLinkedinFuncionario;
    public $linkWhatsFuncionario;

    

    //Metodo da Class

    public function __construct($id = false)
    {
        if ($id) {
            $this->idFuncionario = $id;
            $this->Carregar();
        }
    }

    //Listar
    public function Listar()
    {
        $sql = "SELECT * FROM tblfuncionarios WHERE statusFuncionario = 'ATIVO' ORDER BY nomeFuncionario";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    //Cadastrar
    public function Cadastrar()
    {
        $query = "INSERT INTO tblfuncionarios (idFuncionario,
                                            nomeFuncionario,
                                            altFuncionario,
                                            dataNascFuncionario,
                                            cargoFuncionario,
                                            especialidadeFuncionario,
                                            emailFuncionario,
                                            senhaFuncionario,
                                            nivelFuncionario,
                                            telefoneFuncionario,
                                            dataAdmissaoFuncionario,
                                            statusFuncionario,
                                            fotoFuncionario,
                                            linkFaceFuncionario,
                                            linkInstaFuncionario,
                                            linkLinkedinFuncionario,
                                            linkWhatsFuncionario)
                    VALUES ('" . $this->idFuncionario . "',
                            '" . $this->nomeFuncionario . "',
                             '" . $this->altFuncionario . "',
                              '" . $this->dataNascFuncionario . "',
                               '" . $this->cargoFuncionario . "',
                                '" . $this->especialidadeFuncionario . "', 
                                '" . $this->emailFuncionario . "',
                                '" . $this->senhaFuncionario . "',
                                '" . $this->nivelFuncionario . "',
                                '" . $this->telefoneFuncionario . "',
                                
                                '" . $this->dataAdmissaoFuncionario . "',
                                '" . $this->statusFuncionario . "',
                                '" . $this->fotoFuncionario . "',
                                '" . $this->linkFaceFuncionario . "',
                                '" . $this->linkInstaFuncionario . "',
                                '" . $this->linkLinkedinFuncionario . "',
                                 '" . $this->linkWhatsFuncionario . "')";


        $conn = Conexao::LigarConexao();
        $conn->exec($query);

        echo "<script>document.location='index.php?p=funcionario'</script>";
    }


    //Carregar

    public function Carregar()
    {
        $query = "SELECT * FROM tblfuncionarios WHERE idFuncionario = " . $this->idFuncionario;

        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();

        foreach ($lista as $linha) {
            $this->idFuncionario = $linha["idFuncionario"];
            $this->nomeFuncionario = $linha["nomeFuncionario"];
            $this->altFuncionario = $linha["altFuncionario"];
            $this->dataNascFuncionario = $linha["dataNascFuncionario"];
            $this->cargoFuncionario = $linha["cargoFuncionario"];
            $this->especialidadeFuncionario = $linha["especialidadeFuncionario"];
            $this->emailFuncionario = $linha["emailFuncionario"];
            $this->senhaFuncionario = $linha["senhaFuncionario"];
            $this->nivelFuncionario = $linha["nivelFuncionario"];
            $this->telefoneFuncionario = $linha["telefoneFuncionario"];
            $this->dataAdmissaoFuncionario = $linha["dataAdmissaoFuncionario"];
            $this->statusFuncionario = $linha["statusFuncionario"];
            $this->fotoFuncionario = $linha["fotoFuncionario"];
            $this->linkFaceFuncionario = $linha["linkFaceFuncionario"];
            $this->linkInstaFuncionario = $linha["linkInstaFuncionario"];
            $this->linkLinkedinFuncionario = $linha["linkLinkedinFuncionario"];
            $this->linkWhatsFuncionario = $linha["linkWhatsFuncionario"];
        }
    }

    public function desativar()
    {

        $query = "UPDATE tblfuncionarios SET statusFuncionario ='DESATIVADO' WHERE idFuncionario = " . $this->idFuncionario;

        $conn = Conexao::LigarConexao();
        $conn->exec($query);
    }
}
