<?php

//Iniciar sessão
session_start();


//Limpar dados da sessâo
session_unset();

//Destruir sessão
session_destroy();

header("Location:http://localhost/ti21-van/");

exit();

?>
