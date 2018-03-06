<main>
    <div class="text-center" style="background-color: #A6BD49;">
        <table>
<<<<<<< HEAD
          <tr>
            <td>
                <img src="http://misioncero.binnakle.com/img/logo_m0_es.svg" alt="" width="150">
            </td>
            <td>
                <img src="http://misioncero.binnakle.com/img/logo_binnakle_es_big.png" alt="" width="150">
            </td>
          </tr>
        </table>
        <h3><?= __('- BINNAKLE MISSION 0 -')?></h3>
        <h2><?= $sesion['trouble'] ?></h2>
        
=======
            <tr>
                <td>
                    <img src="http://misioncero.binnakle.com/img/logo_m0_es.svg" alt="" width="150">
                </td>
                <td>
                    <img src="http://misioncero.binnakle.com/img/logo_binnakle_es_big.png" alt="" width="150">
                </td>
            </tr>
        </table>
        <h3><?= __('- BINNAKLE MISSION 0 -') ?></h3>
        <h2><?= $sesion['trouble'] ?></h2>

>>>>>>> b872cf39a4593f5c4c235217999de87d322bc84c
        <br>
        <?= __('Código ') . $sesion['code'] ?>
        <br>
        <?= __('Fecha: ') . date('d/m/Y') ?>
    </div>
    <div>
        <div class="text-center"><b><?= __('EQUIPOS') ?></b></div>
        <div>
            <?php
            foreach ($teams as $team) {
                ?>
<<<<<<< HEAD
                
                    <b>
                        <?= $team['name'] ?>
                    </b> -  
                    <?= __('Participantes: ') . $team['members'] ?>
                    <br>
                
=======

                <b>
                    <?= $team['name'] ?>
                </b> -  
                <?= __('Participantes: ') . $team['members'] ?>
                <br>

>>>>>>> b872cf39a4593f5c4c235217999de87d322bc84c
                <?php
            }
            ?>

        </div>
        <table>
<<<<<<< HEAD
          <tr>
            <td colspan="2">
                <h1 class="text-center"><span style="background-color:#edf69d"><?= __(' TOP 25 RETOS ') ?></span></h1>
                <?php
                
                foreach ($comments as $comment) {
                    if ($comment['ambit']==0){
                        $comment['ambit']=10;
                    }
                    ?>
                    <span> - <?= $comment['question'] ?> <b>(<?=$ambits[$comment['ambit']-1]->ambit?>)</b></span><br><?php
                }
                ?>
            </td>
          </tr>
          <tr>
            <td>
                <h2 class="text-center"><span style="background-color:#e4d949"><?= __(' TOP 5 RETOS PRIORITARIOS ') ?></span></h2>
                FALTAN
                        <br>
                FALTAN
                        <br>
                FALTAN
                        <br>
                FALTAN
                        <br>
                FALTAN
                        <br>
                FALTAN
            </td>
            <td>
                <h2 class="text-center"><span style="background-color:#e4d949"><?= __(' TOP 5 RETOS OPERATIVOS (QUICK WINS) ') ?></span></h2>
                <div>
                    <?php
                    foreach ($quick as $comment) {
                          if ($comment['ambit']==0){
                            $comment['ambit']=10;
                        }
                        ?>
                       <span> - <?= $comment['question'] ?> <b>(<?=$ambits[$comment['ambit']-1]->ambit?>)</b></span><br><?php
                    }
                    ?>  
                </div>  
            </td>
          </tr>
          <tr>
            <td>
                <h2 class="text-center"><span style="background-color:#fff"><?= __(' Retos con votos ') ?></span></h2>
                <div>
                    <?php
                    foreach ($con as $comment) {
                        ?>
                        <span> - <?= $comment['question'] ?></span><br><?php
                    }
                    ?>
                </div>
                
            </td>
            <td>
                <h2 class="text-center"><span style="background-color:#fff"><?= __(' Retos sin votos ') ?></span></h2>
                <div>
                    <?php
                    foreach ($sin as $comment) {
                        ?>
                        <span> - <?= $comment['question'] ?></span><br><?php
                    }
                    ?>
                </div>
            </td>
          </tr>
=======
            <tr>
                <td colspan="2">
                    <h1 class="text-center"><span style="background-color:#edf69d"><?= __(' TOP 25 RETOS ') ?></span></h1>
                    <?php
                    foreach ($comments as $comment) {
                        if ($comment['ambit'] == 0) {
                            $comment['ambit'] = 10;
                        }
                        ?>
                        <span> - <?= $comment['question'] ?> <b>(<?= $ambits[$comment['ambit'] - 1]->ambit ?>)</b></span><br><?php
                }
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <h2 class="text-center"><span style="background-color:#e4d949"><?= __(' TOP 5 RETOS PRIORITARIOS ') ?></span></h2>
                    <?php
                    $cont = 0;
                    foreach ($comments as $comment) {
                        if ($comment['ambit'] == 0) {
                            $comment['ambit'] = 10;
                        }
                        ?>
                        <span> - <?= $comment['question'] ?> <b>(<?= $ambits[$comment['ambit'] - 1]->ambit ?>)</b></span><br><?php
                    $cont++;
                    if ($cont > 5) {
                        break;
                    }
                }
                    ?>
                </td>
                <td>
                    <h2 class="text-center"><span style="background-color:#e4d949"><?= __(' TOP 5 RETOS OPERATIVOS (QUICK WINS) ') ?></span></h2>
                    <div>
                        <?php
                        foreach ($quick as $comment) {
                            if ($comment['ambit'] == 0) {
                                $comment['ambit'] = 10;
                            }
                            ?>
                            <span> - <?= $comment['question'] ?> <b>(<?= $ambits[$comment['ambit'] - 1]->ambit ?>)</b></span><br><?php
                        }
                        ?>  
                    </div>  
                </td>
            </tr>
            <tr>
                <td>
                    <h2 class="text-center"><span style="background-color:#fff"><?= __(' Retos con votos ') ?></span></h2>
                    <div>
                        <?php
                        foreach ($con as $comment) {
                            ?>
                            <span> - <?= $comment['question'] ?></span><br><?php
                        }
                        ?>
                    </div>

                </td>
                <td>
                    <h2 class="text-center"><span style="background-color:#fff"><?= __(' Retos sin votos ') ?></span></h2>
                    <div>
                        <?php
                        foreach ($sin as $comment) {
                            ?>
                            <span> - <?= $comment['question'] ?></span><br><?php
                        }
                        ?>
                    </div>
                </td>
            </tr>
>>>>>>> b872cf39a4593f5c4c235217999de87d322bc84c
        </table>
    </div>
</main>
