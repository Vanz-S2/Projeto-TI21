

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