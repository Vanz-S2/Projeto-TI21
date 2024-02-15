 <header id="menufixo">

     <!-------------------------------------Começo do TOPO-1------------------------------------>
     <div class="topoContato">
         <div class="site">
             <a href="mailto:contato@projetoti21.com.br">vivabem@ti21.smpsistema.com.br</a>
             <a href="tel:+55 (11)90708-2023">(11) 99345-4355</a>

             <ul class="topoRedeSocial">

                 <li><a href="#" target="_blank">Facebook</a></li>
                 <li><a href="#" target="_blank">Instagram</a></li>
                 <li><a href="#" target="_blank">Whatsaap</a></li>

             </ul>

         </div>
     </div>
     <!-------------------------------------------Fim do TOPO-1------------------------------------------>






     <!----------------------------------Começo do TOPO-2-------------------------------------->
     <div class="site">
         <h1 class="animate__animated animate__bounce">Projeto TI21</h1>

         <button class="abrir-menu"></button>
         <nav class="menu">
             <button class="fechar-menu"></button>
             <ul>
                 <li><a href="index.php" class="ativo">HOME</a></li>
                 <li><a href="sobre.php">SOBRE</a></li>


                 <li class="subMenu">
                     <a href="servico.php">Treino</a>
                     <ul>
                         <li><a href="admin/index.php">Treino 01</a></li>
                         <li><a href="#">Treino 02</a></li>
                         <li><a href="#">Treino 03</a></li>
                         <li><a href="#">Treino 04</a></li>
                         <li><a href="#">Treino 05</a></li>
                     </ul>
                 </li>
                 <li><a href="contato.php">Contato</a></li>
             </ul>
            <button id="loginButton" class="abrir-login">Login</button>
             

         </nav>
     </div>
     <!---------------------------------Fim do TOPO-2------------------------------------------>

     <div id="loginModal" class="login">
         <div class="login-container">
         
             <span class="fechar-login" onclick="closeModal()"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
</svg></span>
         <img class="login-img" src="img/icones/logoVivaBem.svg" alt="">
             
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
                 <button type="button"  onclick="carregarLogin()">Entrar</button>
             </form>
             <div id="msgLogin"></div   >
         </div>
     </div>
 </header>