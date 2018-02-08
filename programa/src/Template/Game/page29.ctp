<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
if ($admin) {
    echo $this->element('navbar');
}
$trouble = $practical->trouble;
$answers = [[-1, $practical->answer1], [0, $practical->answer2], [1, $practical->answer3], [2, $practical->answer4]];
shuffle($answers);
$solution = $practical->answer4;
?>

<main>
    <header>
        <?= $this->Html->image("breadp45.svg", ['class' => 'img-fluid']); ?>
    </header>
    <section class="container">
        <div>
            <p class="title_first mt-3 pb-2 text-center">
                <?= __('Parada lúdica 2') ?>
            </p>
        </div>
        <p><?=__($trouble)?></p>
        <table class="reduced table table-striped">
            <tbody>
                <?php
                for ($i = 0; $i < count($answers); $i++) {
                    ?>
                    <tr>
                        <td scope="row">
                            <span id="fila<?= $i ?>"><?= __($answers[$i][1]) ?></span>
                        </td>
                        <td class="text-right">
                            <label class="custom-control custom-radio">
                                <input name="opcion" id="<?= $i ?>" type="radio" value="<?= $answers[$i][0] ?>" class="custom-control-input">
                                <span class="custom-control-indicator" data-toggle="tooltip" title="<?= __('Haz click para seleccionar') ?>"></span>
                            </label>
                        </td>
                    </tr>                
                <?php } ?>

            </tbody>
        </table>
        <div class="text-center">
            <div id="sended"></div>
            <div id="error"></div>
        </div>
        <div class="my-4 text-right">
            <?php if ($admin) { ?>
                  <button  id="anterior" type="button" class="btn btn-primary"><?= __('Anterior') ?></button>
                  <button  id="siguiente" type="button" class="btn btn-primary"><?= __('Continuar Parada lúdica 2') ?></button>
                <?php
            } else if (!isset($voted)) {
                ?>
                <a href="#" id="sendretos" data-toggle="tooltip" title="<?= __('Haz click para enviar') ?>" class="d-inline-block">
                    <button type="buttonx" class="btn btn-primary"><?= __('Valida') ?></button>
                </a>
            <?php } ?>
        </div>
    </section>
</main>

<script>
    var page = 29;
    $(function () {
<?php if ($admin) { ?>


            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page30"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page28"
    ])
    ?>';
            });
<?php } else { ?>

            $('#sendretos').click(function () {
                var voto = $('input[name=opcion]:checked').val();

                if (voto == undefined) {
                    $('#error').html('<?= __('Debe seleccionar una opción') ?>');
                    return;
                }
                $.get("<?=
    $this->Url->build(["controller" => "Game", "action" => "savepractical"])
    ?>", {'bikles': voto}, function (data, status) {
                    $(':radio').attr('disabled', 'disabled');
                    var textos = ['<?= __('Con este reto va a ser muy difícil alcanzar el objetivo planteado… ¡con las preguntas de siempre obtendremos las respuestas de siempre!<br/>Tu equipo pierde -1 Bikle') ?>',
                        '<?= __('Bueno… Los equipos que no arriesgan, ni ganan ni pierden') ?><br/><div class="alert alert_bikles float-right text-center m-3" role="alert"><img src="/img/bikles.png" class="mb-1 img-fluid" alt=""></br><?= __('Tu equipo no gana ni pierde bikles') ?></div>',
                        '<?= __('Bien… aunque el reto seleccionado no es el mejor reto, es bastante innovador!') ?><br/><div class="alert alert_bikles float-right text-center m-3" role="alert"><img src="/img/bikles.png" class="mb-1 img-fluid" alt=""></br><?= __('Tu equipo ha ganado: ') ?><b><?= __('1 Bikle') ?></b></div>',
                        '<?= __('¡Felicidades! El reto seleccionado es el que mejor va a ayudar a cumplir con el objetivo!') ?><br/><div class="alert alert_bikles float-right text-center m-3" role="alert"><img src="/img/bikles.png" class="mb-1 img-fluid" alt=""></br><?= __('Tu equipo ha ganado: ') ?><b><?= __('2 Bikles') ?></b></div>'];
                    $('#sended').html('<div class="mb-3"><?= __('El Jefe de Expedición ha recibido tu selección') ?></div>');
                    $('#error').html('<div class="alert alert_solution d-inline-block text-left rounded"><h4 class="green"><i class="fa fa-check-circle-o mr-2"></i><?= __('Solución') ?></h4>' + textos[parseInt(voto) + 1] + '<br/>La solución es:<br/><b><?= $solution ?></b>');
                    setTimeout(checkPage, 1000);
                });
            });

            $(':radio').click(function () {
                id = $(this).attr('id')
                $('[id^=fila]').removeClass('green');
                $('#fila' + id).addClass('green');
            });
            setTimeout(checkPage, 1000);

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

