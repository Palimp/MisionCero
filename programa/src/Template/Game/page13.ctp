<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
if ($admin) {
    echo $this->element('navbar');
}
?>

<main class="text-center">
    <header>
        <?= $this->Html->image("breadp152.svg", ['class' => 'img-fluid mx-auto d-block head-img']); ?>
    </header>
    <div class="title_wrap">
      <span class="title">
        <?=__('Problemática: '.$trouble)?>
      </span>
    </div>
    <div>
        <p class="title_first pb-4">
            <?=__('ETAPA 1- Clasificación Retos / Votos / Ámbitos')?>
        </p>
    </div>
    <section class="container">
        <p class="h_green">
            <?=__('¡Enhorabuena exploradores! Hemos terminado la Etapa 1')?>
        </p>
        <p>
            <?=__('Los 5 retos más votados por todos los equipos pasan al Final del Viaje')?>
        </p>

        <table class="reduced table table-striped text-center">
            <thead>
                <tr>
                    <td></td>
                    <th><?=__('Votos')?></th>
                    <th><?=__('Ámbito')?></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $cont=0;
                foreach ($ranking as $team) {
                    $cont++;
                    ?>
                    <tr <?=$cont<=5?'class="green"':''?>>
                        <td scope="row" class="text-left">
                           <?= __('¿Cómo ') ?> <?=$team['challenge']?>
                        </td>
                        <td>
                            <?=$team['votes']?>
                        </td>
                        <td><?= $ambits[$team['ambit']-1]->ambit ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <div class="text-center mt-5">
            <div class="alert alert_bikles d-inline-block" role="alert">
                <img src="/img/bikles.png" class="float-left mr-3 img-fluid" alt="">
                <?=__('¡Los equipos que hayan obtenido más votos ganan Bikles!')?>
            </div>
        </div>
        <?php if ($admin) { ?>
            <div class="my-4 text-right">
                <button  id="anterior" type="button" class="btn btn-primary"><?= __('Anterior') ?></button>
                <button  id="siguiente" type="button" class="btn btn-primary"><?= __('Finalizar Etapa 1') ?></button>
            </div>
        <?php } ?>
    </section>
</main>

<script>
    var page = 13;
    $(function () {
<?php if ($admin) { ?>


            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page14"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page12"
    ])
    ?>';
            });
<?php } else { ?>
            setTimeout(checkPage, 500);

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

