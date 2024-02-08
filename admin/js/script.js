

document.getElementById('imgFoto').addEventListener('click', function () {
  document.getElementById('fotoExercicio').click();
});

document.getElementById('fotoExercicio').addEventListener('change', function (e) {

  let imgFoto = document.getElementById('imgFoto');
  let arquivo = e.target.files[0];

  if (arquivo) {
    let carregar = new FileReader();

    carregar.onload = function (e) {
      imgFoto.src = e.target.result;
      console.log(imgFoto.src);
    }

    carregar.readAsDataURL(arquivo);
  }

});


document.getElementById('imgFoto').addEventListener('click', function () {
  document.getElementById('fotoFuncionario').click();
});

document.getElementById('fotoFuncionario').addEventListener('change', function (e) {

  let imgFoto = document.getElementById('imgFoto');
  let arquivo = e.target.files[0];

  if (arquivo) {
    let carregar = new FileReader();

    carregar.onload = function (e) {
      imgFoto.src = e.target.result;
      console.log(imgFoto.src);
    }

    carregar.readAsDataURL(arquivo);
  }

});








document.getElementById('imgFotoAluno').addEventListener('click', function () {
  document.getElementById('fotoAluno').click();
});

document.getElementById('fotoAluno').addEventListener('change', function (alu) {
  let imgFotoAluno = document.getElementById('imgFotoAluno');
  let arquivo = alu.target.files[0];

  if (arquivo) {
    let carregar = new FileReader();

    carregar.onload = function (alu) {
      imgFotoAluno.src = alu.target.result;
      console.log(imgFotoAluno.src);
    }

    carregar.readAsDataURL(arquivo);
  }
});


/* onclique do Botão Desativar */
 
function confirmarDesativacao() {
  // Exibir uma caixa de diálogo de confirmação
  var confirmacao = confirm("Tem certeza de que deseja desativar este item?");

  // Retorna true se o usuário clicou em "OK", caso contrário, retorna false
  return confirmacao;
}





function closeModal(){
  modal.style.display = 'none';
}

function carregarLogin(){



  var email = document.getElementById('email').value;
  var senha = document.getElementById('password').value;


  console.log("Email:"+ email);
  console.log("Senha:"+ senha);

}