<?php
require_once('conexao.php');

class ExerciciosClass
{

    // Atributos da Class

    public $idExercicio;
    public $nomeExercicio;
    public $altExercicio;
    public $descricaoExercicio;
    public $grupoMuscularExercicio;
    public $statusExercicio;
    public $fotoExercicio;
    public $linkExercicio;

    //Metodo da Class

    public function __construct($id = false)
    {
        if ($id) {
            $this->idExercicio = $id;
            $this->Carregar();
        }
    }

    //Listar
    public function Listar()
    {
        $sql = "SELECT * FROM tblexercicios WHERE  statusExercicio = 'ATIVO' ORDER BY nomeExercicio ASC";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
    }


    //Cadastrar
    public function Cadastrar()
    {
        $query = "INSERT INTO tblexercicios (nomeExercicio,
                                            altExercicio,
                                            descricaoExercicio,
                                            grupoMuscularExercicio,
                                            statusExercicio,
                                            fotoExercicio,
                                            linkExercicio)
                    VALUES ('" . $this->nomeExercicio . "',
                             '" . $this->altExercicio . "',
                              '" . $this->descricaoExercicio . "',
                               '" . $this->grupoMuscularExercicio . "',
                                '" . $this->statusExercicio . "', 
                                '" . $this->fotoExercicio . "',
                                 '" . $this->linkExercicio . "')";

        $conn = Conexao::LigarConexao();
        $conn->exec($query);

        echo "<script>document.location='index.php?p=exercicios'</script>";


    }


    //Carregar

    public function Carregar()
    {
        $query = "SELECT * FROM tblexercicios WHERE idExercicio = " . $this->idExercicio;
        
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();

        foreach ($lista as $linha) {
            $this->nomeExercicio = $linha["nomeExercicio"];
            $this->altExercicio = $linha["altExercicio"];
            $this->descricaoExercicio = $linha["descricaoExercicio"];
            $this->grupoMuscularExercicio = $linha["grupoMuscularExercicio"];
            $this->statusExercicio = $linha["statusExercicio"];
            $this->fotoExercicio = $linha["fotoExercicio"];
            $this->linkExercicio = $linha["linkExercicio"];
        }


    }

    public function desativar(){
        
        $query = "UPDATE tblexercicios SET statusExercicio ='DESATIVADO' WHERE idExercicio = " . $this->idExercicio;
        
        $conn = Conexao::LigarConexao();
        $conn->exec($query);
    }

}
?>