<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
if ($admin) {
    echo $this->element('navbar');
}
$ambits[-1] = new \stdClass();
$ambits[-1]->ambit = __('Sin ámbito');

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
    <section class="container">
        <p class="green1back">
            <i class="fa fa-lightbulb-o fa-lg mr-1"></i>
            <?= __('Ahora, cada ') ?><b><?= __('explorador, INDIVIDUALMENTE,') ?></b><?= __(' votará los 3 retos que le parecen más relevantes') ?>
            <br>
            <?= __('Cada miembro del equipo debe marcar su selección de 3 retos en la columna que lleva su nombre') ?>
        </p>
        <ul class="unstyled">
            <li>
                <span class="fa-stack"> <i class="fa fa-circle fa-stack-2x green4"></i> <i class="fa fa-comment-o fa-stack-1x fa-inverse"></i> </span>
                <?=__('Los retos elegidos por tu equipo son los 3 primeros.')?>
            </li>
            <li>
                <span class="fa-stack"> <i class="fa fa-circle fa-stack-2x green4"></i> <i class="fa fa-comment-o fa-stack-1x fa-inverse"></i> </span>
                <?=__('No puedes votar más de 1 reto de tu equipo')?>
            </li>
            <li>
                <span class="fa-stack"> <i class="fa fa-circle fa-stack-2x green4"></i> <i class="fa fa-comment-o fa-stack-1x fa-inverse"></i> </span>
                <?=__('Este voto es personal')?>
            </li>
        </ul>
        <?php if ($admin) { ?>
            <p>
                <?= __('Cuando todos los equipos hayan finalizado pulsa ”Continuar Etapa”') ?>
            </p>
        <?php } ?>
        <table class="reduced table table-striped text-left">
            <thead>
                <tr>
                    <th class="text-left"><?= __('Listado completo de los retos elegidos por los equipos (3 retos por equipo).') ?></th>
                    <?php foreach ($users as $user) { ?>
                        <td><?= str_replace("_", " ", $user) ?></td>

                    <?php } ?>
                    <th><?= __('Ámbito') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($retos as $reto) { ?>
                    <tr>
                        <td scope="row" class="text-left <?= in_array($reto['id'], $propios) ? " retos_propios" : '' ?>">
                            <?= __('¿Cómo ') ?><?= $reto['challenge'] ?>
                        </td>
                        <?php foreach ($users as $user) { ?>
                            <td>
                                <label class="custom-control custom-checkbox">
                                    <input id="<?= $user . $reto['id'] ?>" <?= $voted ? 'disabled="disabled"' : '' ?> type="checkbox" class="custom-control-input <?= in_array($reto['id'], $propios) ? $user . "_propio propios" : '' ?>">
                                    <span class="custom-control-indicator" data-toggle="tooltip" title="<?= __('Haz click para seleccionar') ?>"></span>
                                </label>
                            </td>
                        <?php } ?>


                        <td><?= $ambits[$reto['ambit'] - 1]->ambit ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <div id="hasvoted"></div>
        <div id="error"></div>
        <?php if ($admin) { ?>
            <div class="my-4 text-right">
                <button  id="anterior" type="button" class="btn btn-primary"><?= __('Anterior') ?></button>
                <button  id="siguiente" type="button" class="btn btn-primary"><?= __('Continuar Etapa 1') ?></button>
            </div>
        <?php } else { ?>
            <div class="my-4 text-right">
                <a href="#" id="submitvotos" data-toggle="tooltip" title="<?= __('Haz click para enviar') ?>" class="d-inline-block" <?= $voted ? 'style="display:none !important"' : '' ?>>
                    <button type="buttonx" class="btn btn-primary"><?= __('Valida') ?></button>
                </a>
            </div>
        <?php } ?>
    </section>
</main>

<script>
    var page = 12;
    var cambiar = false;
    var chequeados = [];
    var users = JSON.parse('<?= json_encode($users) ?>');
    var retos = JSON.parse('<?= addslashes(json_encode($retos)) ?>');

    $(function () {
<?php if ($admin) { ?>

            setTimeout(checkVote, 1000);
            function checkVote() {
                $.get("<?= $this->Url->build(["controller" => "Game", "action" => "checkvoteteam"]) ?>",
                        {'field': 'vc'}, function (data, status) {
                    console.log(data);
                    if (data == 0) {
                        $('#hasvoted').html('<p style="color:red"><b><?= __('Los equipos aún están votando') ?></b></p>')
                        setTimeout(checkVote, 1000);
                    } else {
                        $('#hasvoted').html('<p style="color:green"><b><?= __('Todos los equipos han votado. Ya puedes pulsar en “Continuar Etapa”') ?></b></p>')

                    }

                });
            }
            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page13"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page11"
    ])
    ?>';
            });
<?php } else { ?>


            function checkPage() {
                $.get("<?= $this->Url->build(["controller" => "Game", "action" => "pageactive"])
    ?>", function (data, status) {
                    if (data == page) {
                        setTimeout(checkPage, 1000);
                    } else {
                        location.href = '<?= $this->Url->build(["controller" => "Game", "action" => "index"]) ?>';
                    }
                });
            }
            $(":checkbox.propios").click(function () {
                var c = $(this).attr('id').replace(/[0-9]/g, '');

                $('.' + c + '_propio').not('#' + $(this).attr('id')).prop("checked", false);

            })
            $('#submitvotos').click(function () {
                $('#submitvotos').attr('style', 'display:none !important');

                $('#error').html('');
                var votos = [];
                for (var i = 0; i < users.length; i++) {
                    var cont = 0;
                    for (var j = 0; j < retos.length; j++) {
                        if ($('#' + users[i] + retos[j].id).is(':checked')) {
                            cont++;
                            votos.push(retos[j].id);
                        }
                    }
                    if (cont != 3) {
                        $('#error').html('<?= __('Ups! Explorador, algo no ha ido bien…') ?><i class="fa fa-frown-o"></i><br><?= __('Usa tus prismáticos y revisa tus votos') ?><br><?= __('(¡recuerda que no puedes elegir más de un reto de tu equipo)') ?>');
                        $('#submitvotos').attr('style', '');
                        return;
                    }
                }

                $.get("<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "saveretovotos"
    ])
    ?>", {'ids': JSON.stringify(votos)}, function (data, status) {

                    $(':checkbox').attr('disabled', 'disabled');
                    cambiar = true;
                    $('#error').html('<?= __('Votos enviados') ?>');
                    setTimeout(checkPage, 1000);
                });

            });



<?php } ?>
    });
</script>

