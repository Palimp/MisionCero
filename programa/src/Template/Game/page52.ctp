<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
if ($admin) {
    echo $this->element('navbar');
}

$trouble = $puzzle->puzzle;
$answers = [[-1, $puzzle->answer1], [0, $puzzle->answer2], [1, $puzzle->answer3], [2, $puzzle->answer4]];
$solution = $puzzle->answer1;
shuffle($answers);
?>
<main class="text-center">
    <header>
        <?= $this->Html->image("breadp74.svg", ['class' => 'img-fluid mx-auto d-block head-img']); ?>
    </header>
    <section class="container">
        <p class="title_first mt-3 pb-2">
            <?= __('Parada lúdica 4') ?>
        </p>
        <div class="clock-c">
            <i class="fa fa-clock-o mr-2"></i><time>1'</time>
        </div>
        <p class="h_green">
            <?= __('Cada equipo tendrá que leer el enigma') ?>
        </p>
        <div>
            <?= __('El Jefe de Expedición, puede ampliar, reducir o pausar el tiempo desde su cronómetro.') ?>
            <?php if ($admin) { ?>
            <h1><time id="clock" class="clock-b"><?= $time ?></time></h1>
            <?php } else { ?>
            <h1><i class="fa fa-clock-o mr-3"></i><time id="clock" class="clock-a"><?= $time ?></time></h1>
            
            <?php
            }
            if ($admin) {
                echo $this->Form->create('Begin', array(
                    'url' => array('controller' => 'Game', 'action' => 'page52'), 'class' => 'd-inline-block'
                ));
                ?>
                <input type="hidden" name="time" value="30">
                <a href="#" onclick="$(this).closest('form').submit()" data-toggle="tooltip" title="<?= ('Haz click para añadir tiempo') ?>" class="d-inline-block btn btn-primary btn-red">
                    <i class="fa fa-plus"></i><time> 00:30</time>
                </a>
                </form>
                <?php
                if ($stop) {
                    echo $this->Form->create('Begin', array(
                        'url' => array('controller' => 'Game', 'action' => 'page52'), 'class' => 'd-inline-block'
                    ));
                    ?>
                    <input type="hidden" name="stop" value="1">
                    <button class="btn btn-primary"><?= __('Parar tiempo') ?></button>
                    <?php
                } else {
                    echo $this->Form->create('Begin', array(
                        'url' => array('controller' => 'Game', 'action' => 'page52'), 'class' => 'd-inline-block'
                    ));
                    ?>
                    <input type="hidden" name="start" value="1">
                    <button class="btn btn-primary"><?= __('Activar tiempo') ?></button>
                <?php } ?>

                </form>
                <button id="finalizar" class="btn btn-primary"><?= __('Finalizar tiempo') ?></button>

                <?php
                echo $this->Form->create('Begin', array(
                    'url' => array('controller' => 'Game', 'action' => 'page52'), 'class' => 'd-inline-block'
                ));
                ?>
                <input type="hidden" name="time" value="-30">
                <a href="#" onclick="$(this).closest('form').submit()" data-toggle="tooltip" title="<?= ('Haz click para restar tiempo') ?>" class="d-inline-block btn btn-primary btn-green">
                    <i class="fa fa-minus"></i><time> 00:30</time>
                </a>
            <?php } ?>
            </form>
        </div>
        <p>
            <?= __('El primer equipo en marcar la solución correcta gana Bikles') ?>
            </br>
            </br>
            <b><?= __('Enigma') ?></b>
            </br>
        <div class="title_first">
            <?= __($trouble) ?>
        </div>
        </p>
        <table class="reduced table table-striped text-left">
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
        <?php if ($admin) { ?>
            <div class="text-center mt-5">
                <div class="alert alert_bikles d-inline-block" role="alert">
                    <img src="/img/bikles.png" class="float-left mr-3 img-fluid" alt="">
                    <?= __('¡3 Bikles para el primer equipo que da la respuesta correcta!') ?>
                </div>
            </div>
            <div class="my-4 text-right">
                <button  id="anterior" type="button" class="btn btn-primary"><?= __('Anterior') ?></button>
                <button  id="siguiente" type="button" class="btn btn-primary"><?= __('Finalizar etapa lúdica') ?></button>
            </div>
            <?php
        } else if (!isset($voted)) {
            ?>
            <div class="text-right">
                <a href="#" id="sendretos" data-toggle="tooltip" title="<?= __('Haz click para enviar') ?>" class="d-inline-block">
                    <button type="buttonx" class="btn btn-primary"><?= __('Valida') ?></button>
                </a>
            </div>

            <div class="text-center mt-5">
                <div class="alert alert_bikles d-inline-block" role="alert">
                    <img src="/img/bikles.png" class="float-left mr-3 img-fluid" alt="">
                    <?= __('¡3 Bikles para el primer equipo que da la respuesta correcta!') ?>
                </div>
            </div>
        <?php } ?>
    </section>
</main>

<script>
    var page = 52;
    var stop =<?= $stop ?>;

    $(function () {

 $('#finalizar').click(function () {
                $('#siguiente').click();
            });
        setTimeout(checkTime, 1000);

<?php if ($admin) { ?>
            function checkTime() {

                $.get("<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "gettime"
    ])
    ?>", function (data, status) {
                    if (data != "0" && data != "00:00") {

                        $('#clock').html(data);
                        setTimeout(checkTime, 1000);
                    } else {
                        if (stop) {
                            alert("<?= __('Se acabó el tiempo') ?>");
                            location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => $admin ? 'page53' : 'index'
    ])
    ?>';
                        }
                    }
                });
            }

            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page53"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page511"
    ])
    ?>';
            });
    <?php
} else {
    ?>
            $('#sendretos').click(function () {
                var voto = $('input[name=opcion]:checked').val();

                if (voto == undefined) {
                    $('#error').html('<?= __('Debe seleccionar una opción') ?>');
                    return;
                }
                $.get("<?=
    $this->Url->build(["controller" => "Game", "action" => "savepuzzle"])
    ?>", {'bikles': voto, 'puzzle': 1}, function (data, status) {
                    console.log(data);
                    $(':radio').attr('disabled', 'disabled');
                    var textos = ['<?= __('La respuesta es incorrecta, lo sentimos mucho.') ?><br/><div class="alert alert_bikles float-right text-center m-3" role="alert"><img src="/img/bikles.png" class="mb-1 img-fluid" alt=""></br><?= __('Tu equipo no gana ni pierde bikles') ?></div>',
                        '<?= __('Bien.. la respuesta es correcta pero no has sido el primero') ?><br/><div class="alert alert_bikles float-right text-center m-3" role="alert"><img src="/img/bikles.png" class="mb-1 img-fluid" alt=""></br><?= __('Tu equipo no gana ni pierde bikles') ?></div>',
                        '<?= __('¡Felicidades! Has sido el primero en adivinar la respuesta.') ?><br/><div class="alert alert_bikles float-right text-center m-3" role="alert"><img src="/img/bikles.png" class="mb-1 img-fluid" alt=""></br><?= __('Tu equipo ha ganado: ') ?><b><?= __('3 Bikles') ?></b></div>'];
                    var texto = 0;
                    $('#sended').html('<div class="mb-3"><?= __('El Jefe de Expedición ha recibido tu selección') ?></div>');
                    if (voto == -1){
                        if (data == 1) {
                            texto = 1;
                        } else {
                            texto = 2;
                        }
                    }
                        
                    $('#error').html('<div class="alert alert_solution d-inline-block text-left rounded"><h4 class="green"><i class="fa fa-check-circle-o mr-2"></i><?= __('Solución') ?></h4>' + textos[texto] + '<br/>La solución es:<br/><b><?= $solution ?></b>');
                    $('#sendretos button').hide();

                    setTimeout(checkPage, 1000);
                });
            });

            $(':radio').click(function () {
                id = $(this).attr('id')
                $('[id^=fila]').removeClass('green');
                $('#fila' + id).addClass('green');
            });
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
            function checkTime() {

                $.get("<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "gettime"
    ])
    ?>", function (data, status) {
                    if (data != "0" && data != "00:00") {

                        $('#clock').html(data);
                        setTimeout(checkTime, 1000);
                    } else if (data != "0") {
                        alert("<?= __('Se acabó el tiempo') ?>");
                        location.href = '<?= $this->Url->build(["controller" => "Game", "action" => "index"]) ?>';
                    } else {
                        setTimeout(checkTime, 1000);
                    }

                });
            }
    <?php
}
?>



    });
</script>

