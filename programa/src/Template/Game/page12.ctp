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
        <?= $this->Html->image("breadp15.svg", ['class' => 'img-fluid']); ?>
    </header> 
    <section>
        <p class="fs22">
            <?= __('Los retos elegidos por todos los equipos (3 por equipo)') ?>
            </br>
            <?= __('Cada persona votará a los 3 retos que le parecen más relevantes (no más de uno de su equipo)') ?>
        </p>
        <table class="reduced table table-striped text-center">
            <thead>
                <tr>
                    <td></td>
                    <?php foreach ($users as $user) { ?>
                        <td><?= $user ?></td>

                    <?php } ?>
                    <th><?= __('Ámbito') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($retos as $reto) { ?>
                    <tr>
                        <td scope="row" class="text-left">
                            <?= $reto['challenge'] ?>
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
        <div id="error"></div>

    </section>
    <?php if ($admin) { ?>
        <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
        <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Siguiente') ?></button>
    <?php } else { ?>
        <div class="text-right mt-5">
            <a href="#" id="submitvotos" data-toggle="tooltip" title="<?= __('Haz click para enviar') ?>" class="d-inline-block" <?= $voted ? 'style="display:none !important"' : '' ?>>
                <i class="fa fa-check fa-2x"></i>
            </a>
        </div>
    <?php } ?>
</main>

<script>
    var page = 12;
    var cambiar = false;
    var chequeados = [];
    var users = JSON.parse('<?= json_encode($users) ?>');
    var retos = JSON.parse('<?= json_encode($retos) ?>');

    $(function () {
<?php if ($admin) { ?>


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
                        $('#error').html('<?= __('Revise los votos') ?>');
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

