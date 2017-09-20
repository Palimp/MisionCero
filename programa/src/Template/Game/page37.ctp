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
        <p class="fs22">
            Los retos elegidos por todos los equipos (3 por equipo)
            </br>
            Cada persona votará a los 3 retos que le parecen más relevantes (no más de uno de su equipo)
        </p>
        <table class="reduced table table-striped text-center">
            <thead>
                <tr>
                    <td></td>
                    <?php foreach ($users as $user) { ?>
                        <td><?= $user ?></td>

                    <?php } ?>
                    <th>Ámbito</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($retos as $reto) { ?>
                    <tr>
                        <td scope="row" class="text-left">
                            <?= $reto['question'] ?>
                        </td>
                        <?php foreach ($users as $user) { ?>
                            <td>
                                <label class="custom-control custom-checkbox">
                                    <input id="<?= $user . $reto['id'] ?>" <?= $voted ? 'disabled="disabled"' : '' ?> type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator" data-toggle="tooltip" title="Haz click para seleccionar"></span>
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
            <a href="#" id="submitvotos" data-toggle="tooltip" title="Haz click para enviar" class="d-inline-block" <?= $voted ? 'style="display:none !important"' : '' ?>>
                <i class="fa fa-check fa-2x"></i>
            </a>
        </div>
    <?php } ?>
</main>

<script>
    var page = 37;
    var cambiar = false;
    var chequeados = [];
    var users = JSON.parse('<?= json_encode($users) ?>');
    var retos = JSON.parse('<?= json_encode($retos) ?>');
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
    $(function () {
<?php if ($admin) { ?>


            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page38"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page36"
    ])
    ?>';
            });
<?php } else { ?>
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
                        $('#error').html('Revise los votos');
                        $('#submitvotos').attr('style', '');
                        return;
                    }
                }

                $.get("<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "savestakesvotos"
    ])
    ?>", {'ids': JSON.stringify(votos)}, function (data, status) {

                    $(':checkbox').attr('disabled', 'disabled');
                    cambiar = true;
                    $('#error').html('Votos enviados');
                    setTimeout(checkPage, 1000);
                });

            });



<?php } ?>
    });
</script>

