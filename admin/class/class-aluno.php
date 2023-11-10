<?php

//criando um caminho do arquivo "conexao.php"
require_once('conexao.php');


//criando um instância chamada "AlunoClass" que vai guardar as informações e comandos dentro dela
class AlunosClass
{

    //Atributos
    //criando as variáveis baseada no banco de dados
    public $idAluno;
    public $nomeAluno;
    public $dataNascAluno;
    public $emailAluno;
    public $senhaAluno;
    public $dataCadAluno;
    public $statusAluno;
    public $fotoAluno;



    //Métodos
    //criando uma função que vai pegar os dados do banco de dados e criar uma lista das informações
    public function Listar()
    {
        //comando pra gerar as informações
        $sql = "SELECT * FROM tblalunos WHERE statusAluno = 'ATIVO' ORDER BY nomeAluno ASC";

        //ligar e fazer uma conexão com banco de dados
        $conn = Conexao::LigarConexao();

        //prepara e executa uma instrução SQL e guarda no "$resultado"
        $resultado = $conn->query($sql);

        //cria uma matriz com as informações guardada no "$resultado"
        $lista = $resultado->fetchAll();
        return $lista;
    }



    //criando uma função que vai inserir um novo cadastro na tabela do banco de dados
    public function Cadastrar()
    {
        //comando que vai inserir as informações na tabela
        $query = "INSERT INTO tblalunos (nomeAluno, dataNascAluno, emailAluno, senhaAluno, dataCadAluno, statusAluno, fotoAluno) 
        VALUES ('" . $this->nomeAluno . "','" . $this->dataNascAluno . "','" . $this->emailAluno . "','" . $this->senhaAluno . "','" . $this->dataCadAluno . "','" . $this->statusAluno . "','" . $this->fotoAluno . "')";
        
        //ligar e fazer uma conexão com banco de dados
        $conn = Conexao::LigarConexao();

        //cpmando que executa a instrução
        $conn->exec($query);

        //retorna pra página inicial do aluno
        echo "<script>document.location='index.php?p=alunos'</script>";


    }



} //FIM da Class
?>