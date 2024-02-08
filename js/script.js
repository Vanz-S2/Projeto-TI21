/*-----Banner-----*/ 
$(document).ready(function () {
  $('.banner').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    dots: true,

  });
});


/*-----Galeria-----*/
$('.galeria').slick({
  centerMode: true,
  centerPadding: '5%',
  slidesToShow: 7,
  autoplay: true,
  responsive: [
    {
      breakpoint: 1001,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 5
      }
    },
    {
      breakpoint: 601,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
})


/*-----WOW js-----*/
new WOW().init();


/*-----Menu Fixo-----*/
window.onscroll = function () {
  let top = window.scrollY;
 
  if(top > 1200){
   document.getElementById("menufixo").classList.add("menufixo");
  }else{
    document.getElementById("menufixo").classList.remove("menufixo");
    
  }
  
}


/*----Menu Mobile----*/

document.querySelector(".abrir-menu").onclick = function (){
  console.log("Menu")
  document.documentElement.classList.add("menu-mobile")

}


document.querySelector(".fechar-menu").onclick = function (){
  console.log("Menu")
  document.documentElement.classList.remove("menu-mobile")

}


// Enviar dados do form por Whatsaap

function EnviarWhats (){
  
  let assunto = '*Site - Viva Bem Academia*';
  let nome    = '*Nome:* '  + document.querySelector('#nome').value;
  let email   = '*E-mail:* ' + document.querySelector('#email').value;
  let fone    = '*Telefone:* ' + document.querySelector('#fone').value;
  let mens    = '*Mensagem:* ' + document.querySelector('#mens').value;

  let numeroWhats = '5511977877878';

  let quebraDeLinha = '%0A'

  window.open('https://api.whatsapp.com/send?phone=' +
    numeroWhats + '&text=' +
    assunto + quebraDeLinha + quebraDeLinha + 
    nome + quebraDeLinha + 
    email + quebraDeLinha + 
    fone + quebraDeLinha + 
    mens, '_blank');//abrir uma nova aba
}







var modal = document.getElementById('loginModal');
var loginModal = document.getElementById('loginButton');

loginButton.onclick = function(){
  modal.style.display = 'block'
}

function closeModal(){
  modal.style.display = 'none';
}


function carregarLogin(){
  closeModal();


  $('#login-form').click(function(){
    //Pegar os dados
    var formData = $('#login-form').serialize();

    //Enviar a solitação -class de aluno
    //ajax é usado para não ser necessario atualizar a página
    $.ajax({
      url: './admin/class/class-aluno.php',
      method:'POST',
      data: formData,
      dataType:'json',
      
      
      success: function(data){
        //Bem sucedido
        if(data.success){
          $('#msgLogin').html('<div class="msgSucess">' + data.message +  '</div>');
        var idAluno = data.idAluno;
        window.location.href = 'http://localhost/ti21-van/admin/index.php?p=dashboard'
        }else{
          //Inválido
          $('#msgLogin').html('<div class="msgInvalido">' + data.message +  '</div>');
        }  
      },//Fim


      error: function (xhr, status, error){
          console.log(error);
      }

    })

  });



//Verificar se o form está pegando os dados

//método usando o Jquery
  //var formData = $('#login-form').serialize();
  //console.log("Dados do Formulário:" + formData);

//método normal
  //var email = document.getElementById('email').value;
  //var senha = document.getElementById('password').value;
  //console.log("Email:"+ email);
  //console.log("Senha:"+ senha);

}





document.querySelector(".abrir-login").onclick = function (){
  console.log("Login")
  document.documentElement.classList.add("login-pc")

}


 document.querySelector(".fechar-login").onclick = function (){
  console.log("Login")
  document.documentElement.classList.remove("login-pc")

}

