<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
if ($admin) {
    echo $this->element('navbar');
}
$ambits[-1]= new \stdClass();
$ambits[-1]->ambit=__('Sin ámbito');

?>


<main>
    <header>
        <?= $this->Html->image("breadp781.svg", ['class' => 'img-fluid']); ?>
    </header>
    <div class="title_wrap text-center">
      <span class="title">
        <?=__('Problemática: '.$trouble)?>
      </span>
    </div>
    <div class="text-center">
        <p class="title_first pb-4">
            <?=__('ETAPA 9- Clasificación Retos / Votos / Ámbitos')?>
        </p>
    </div>
    <section class="container text-center">
        <p class="h_green">
            <?=__('¡Enhorabuena exploradores! Hemos terminado la Etapa 9')?>
        </p>
        <p>
            <b><?=__('Los 5 retos más votados por todos los equipos pasan al Final del Viaje')?></b>
        </p>
        <table class="reduced table table-striped">
            <thead>
                <tr>
                    <td></td>
                    <th><?=__('Votos')?></th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                $cont=0;
                foreach ($ranking as $team) {
                    $cont++;
                    ?>
                    <tr <?=$cont<=5?'class="green fs16"':''?>>
                        <td scope="row" class="text-left">
                            <?=$team['question']?>
                        </td>
                        <td>
                            <?=$team['votes']?>
                        </td>
                        
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>

        <div class="text-center mt-5">
            <div class="alert d-inline-block" role="alert">
                <?=__('¡Los equipos que hayan obtenido más votos ganan Bikles!')?>
            </div>
        </div>

      <?php if ($admin) { ?>
          <div class="my-4 text-right">
              <button  id="anterior" type="button" class="btn btn-primary"><?= __('Anterior') ?></button>
              <button  id="siguiente" type="button" class="btn btn-primary"><?= __('Finalizar Etapa 9') ?></button>
          </div>
      <?php } ?>
    </section>
</main>

<script>
    var page = 61;
    $(function () {
<?php if ($admin) { ?>


            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page62"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page60"
    ])
    ?>';
            });
<?php } else { ?>
            setTimeout(checkPage, 1000);

            function checkPage() {
                $.get("<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "pageactive"
    ])
    ?>", function (data, status) {

                    if (data == page) {
                        setTimeout(checkPage, 1000);
                    } else {
                        location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "index"
    ])
    ?>';
                    }

                });

            }
<?php } ?>
    });
</script>

