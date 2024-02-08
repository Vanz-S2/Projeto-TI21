

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






<body class="login">

   
<div id="loginModal" class="login">

    <div class="login-container">
    <img class="login-img" src="../img/icones/logoVivaBem.svg" alt="">
    
    <span class="fechar-login" onclick="closeModal()">&times;</span>
        <h2>Login</h2>
        
        <form id="login-form" class="login-form">
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="button" onclick="carregarLogin()">Entrar</button>

        </form>


</div>

</div>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script> <!--Biblioteca do JQUERY-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> <!--Biblioteca do BootStrap-->
    <script src="js/script.js"></script>

</body>

</html>
