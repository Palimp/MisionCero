<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
if ($admin) {
    echo $this->element('navbar');
}
?>

<main>
    <header>
        <?= $this->Html->image("breadp78.svg", ['class' => 'img-fluid mx-auto d-block head-img']); ?>
    </header>
    <div class="title_wrap text-center">
      <span class="title">
        <?=__('Problemática: '.$trouble)?>
      </span>
    </div>
    <section class="container text-center">
        <p>
            <?= __('Cada miembro del equipo debe marcar su selección de 3 retos en la columna que lleva su nombre') ?>
        </p>
        <ul class="unstyled">
            <li>
                <i class="fa fa-comment-o"></i>
                <?=__('Los retos elegidos por tu equipo son los 3 primeros.')?>
            </li>
            <li>
                <i class="fa fa-comment-o"></i>
                <?=__('No puedes votar más de 1 reto de tu equipo')?>
            </li>
            <li>
                <i class="fa fa-comment-o"></i>
                <?=__('Este voto es personal')?>
            </li>
        </ul>

        <table class="reduced table table-striped text-left">
            <thead>
                <tr>
                    <th class="text-left"><?= __('Listado completo de retos (3 retos por equipo).') ?></th>
                    <?php foreach ($users as $user) { ?>
                        <td><?= str_replace("_", " ", $user) ?></td>

                    <?php } ?>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($retos as $reto) { ?>
                    <tr>
                        <td scope="row" class="text-left <?= in_array($reto['id'], $propios) ? " retos_propios" : '' ?>">
                            <?= $reto['question'] ?>
                        </td>
                        <?php foreach ($users as $user) { ?>
                            <td>
                                <label class="custom-control custom-checkbox">
                                    <input id="<?= $user . $reto['id'] ?>" <?= $voted ? 'disabled="disabled"' : '' ?> type="checkbox" class="custom-control-input <?= in_array($reto['id'], $propios) ? $user . "_propio propios" : '' ?>">
                                    <span class="custom-control-indicator" data-toggle="tooltip" title="<?= __('Haz click para seleccionar') ?>"></span>
                                </label>
                            </td>
                        <?php } ?>



                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <div id="hasvoted"></div>
        <div id="error"></div>


      <?php if ($admin) { ?>
          <div class="my-4 text-right">
              <button  id="anterior" type="button" class="btn btn-primary"><?= __('Anterior') ?></button>
              <button  id="siguiente" type="button" class="btn btn-primary"><?= __('Continuar Etapa 5') ?></button>
          </div>
        <?php } else { ?>
            <div class="text-right mt-5">
                <a href="#" id="submitvotos" data-toggle="tooltip" title="<?= __('Haz click para enviar') ?>" class="d-inline-block" <?= $voted ? 'style="display:none !important"' : '' ?>>
                    <button type="buttonx" class="btn btn-primary"><?= __('Valida') ?></button>
                </a>
            </div>
        <?php } ?>
    </section>
</main>

<script>
    var page = 60;
    var cambiar = false;
    var chequeados = [];
    var users = JSON.parse('<?= json_encode($users) ?>');
    var retos = JSON.parse('<?= str_replace("\\\"","\\\\\"",json_encode($retos)) ?>');
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
    $(function () {
<?php if ($admin) { ?>

            setTimeout(checkVote, 1000);
            function checkVote() {
                $.get("<?= $this->Url->build(["controller" => "Game", "action" => "checkvoteteam"]) ?>",
                        {'field': 'vm'}, function (data, status) {
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
        "action" => "page61"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page57"
    ])
    ?>';
            });
<?php } else { ?>

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
                        $('#error').html('<?= __('Ups! Explorador, algo no ha ido bien…') ?><i class="fa fa-smile-o fa-rotate-180 text-danger"></i><?= __('Usa tus prismáticos y revisa tus votos') ?>');
                        $('#submitvotos').attr('style', '');
                        return;
                    }
                }

                $.get("<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "savemotionvotos"
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

