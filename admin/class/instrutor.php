<?php
    require_once('conexao.php');

    class InstrutoresClass{

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

         //Listar
         public function Listar(){
            $sql = "SELECT * FROM tblfuncionarios WHERE statusFuncionario = 'ATIVO' ORDER BY nomeFuncionario";
            $conn = Conexao::LigarConexao();
            $resultado = $conn->query($sql);
            $lista = $resultado->fetchAll();
            return $lista;
        }
        
    }
?>