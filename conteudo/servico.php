<section class="contServico wow animate__animated animate__fadeInUp">
    <h2>Treinos</h2>

    <div class="site">
        <div>
            <?php 
            
            $listaRand = array_rand($lista, min(3, count($lista)));//exibir no modo randomico

            //var_dump($listaRand);
            //foreach (array_slice($lista, 0, 3) as $linha): //exibir sempre o número escolhido

            foreach ($listaRand as $key) : { $linha = $lista[$key]; }
            
            ?>

                <div>
                    <h3><?php echo $linha['nomeExercicio']?></h3>

                    <img src="<?php echo 'img/' . $linha['fotoExercicio']?>" alt="<?php echo $linha['nomeExercicio']?>">

                    <p> <?php echo $linha['descricaoExercicio']?> </p>

                    <a href="<?php echo $linha['linkExercicio']?>">Conheça</a>
                </div>

            <?php endforeach; ?>

        </div>
    </div>

</section>