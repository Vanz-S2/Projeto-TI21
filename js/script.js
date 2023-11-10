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