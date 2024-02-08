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
         <img class="login-img" src="img/icones/logoVivaBem.svg" alt="">
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
                 <button type="button"  onclick="carregarLogin()"></button>
             </form>
             <div id="msgLogin"></div>
         </div>
     </div>
 </header>