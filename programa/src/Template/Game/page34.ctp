<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
if ($admin) {
    echo $this->element('navbar');
}
?>

<!-- ** pag p15 ** -->
<main>
    <header class="text-center m-5 mb-10">
        <?= $this->Html->image("breadp49.svg", ['class' => 'img-fluid']); ?>
    </header> 
    <section>
        <div class="row no-gutters mb-5">
            <div class="col-12 col-md-auto">
                <h4>
                    <?=__('Problemática: '.$trouble)?><br>
                    <?=__('Etapa 5- Ranking de retos')?>
                </h4>
                <p>
                    <?= __('¡Los equipos con más retos ganaron Bikles y los equipos con menos perdieron!') ?>

                </p>
            </div>

        </div>
        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th></th>
                    <th><?= __('Equipo') ?></th>
                    <th><?= __('Comentarios') ?></th>
                    <th><?= __('Bikles') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($ranking as $team) {
                    ?>
                    <tr>
                        
                                    <b><?=__('Ejemplo: ')?></b>
                                    <?=__('si nuestra problemática inicial fuera')?>
                                    <b><?=__('¿Cómo mejorar la comunicación interna?')?></b>
                        <td><?= $this->Html->image("exp" . str_pad($teams[$i]['img'],2, "0", STR_PAD_LEFT).".png", ['class' => 'img-fluid']); ?>
                        </td>
                        <td><?= $team['name'] ?></td>
                        <td><?= $team['num'] ?></td>
                        <td><?= $team['bikles'] ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </section>
    <?php if ($admin) { ?>
        <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
        <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Continuar Etapa 5') ?></button>
    <?php } ?>
</main>

<script>
    var page = 34;
    $(function () {
<?php if ($admin) { ?>


            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page35"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page33"
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
                        setTimeout(checkPage, 500);
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

