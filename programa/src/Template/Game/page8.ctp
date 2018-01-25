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
    <header>
        <?= $this->Html->image("breadp15.svg", ['class' => 'img-fluid']); ?>
    </header>
    <div class="title_wrap text-center">
      <span class="title">
        <?=__('Problemática inicial: '.$trouble)?>
      </span>
    </div>
    <section class="container text-center">
        <div>
            <p class="h_green">
                <?= __('Comentarios espontáneos más relevantes sobre nuestra problemática:') ?>
            </p>
            <p>
                <?= __('Los equipos tienen 10 minutos para introducir todos los comentarios posibles.') ?><br>
                <b><?= __('¡Los equipos con más comentarios ganarán Bikles, y los equipos con menos comentarios perderán Bikles!') ?></b>
            </p>
        </div>
        <div>
            <?= __('El Jefe de Expedición, puede ampliar, reducir o pausar el tiempo desde su cronómetro.') ?>
        </div>
        <div>
            <h1><time id="clock" class="clock-b"><?= $time ?></time></h1>
            <?php
            echo $this->Form->create('Begin', array(
                'url' => array('controller' => 'Game', 'action' => 'page8'), 'class' => 'd-inline-block'
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
                    'url' => array('controller' => 'Game', 'action' => 'page8'), 'class' => 'd-inline-block'
                ));
                ?>
                <input type="hidden" name="stop" value="1">
                <button class="btn btn-primary"><?= __('Parar tiempo') ?></button>
                <?php
            } else {
                echo $this->Form->create('Begin', array(
                    'url' => array('controller' => 'Game', 'action' => 'page8'), 'class' => 'd-inline-block'
                ));
                ?>
                <input type="hidden" name="start" value="1">
                <button class="btn btn-primary"><?= __('Activar tiempo') ?></button>
            <?php } ?>

            </form>
            <button id="finalizar" class="btn btn-primary"><?= __('Finalizar tiempo') ?></button>

            <?php
            echo $this->Form->create('Begin', array(
                'url' => array('controller' => 'Game', 'action' => 'page8'), 'class' => 'd-inline-block'
            ));
            ?>
            <input type="hidden" name="time" value="-30">
            <a href="#" onclick="$(this).closest('form').submit()" data-toggle="tooltip" title="<?= ('Haz click para restar tiempo') ?>" class="d-inline-block btn btn-primary btn-green">
                <i class="fa fa-minus"></i><time> 00:30</time>
            </a>
            </form>
        </div>
        <div class="py-3">
            <a href="#" data-toggle="modal" data-target="#modal_ex1" class="grey_link">
                <i class="fa fa fa-file-text-o fa-2x example_ic mr-2"></i>
                <div class="fs12 d-inline-block"><?= __('click aquí para') ?><br><?= __(' ver ejemplo') ?>
                </div>
            </a>
        </div>

        <div id="modal_ex1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal_ex1LiveLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header align-items-start">
                        <div class="example row">
                            <i class="fa fa-file-text-o fa-3x example_ic align-top col-1"></i>
                            <div class="example_wrapper col mr-4">
                                <div class="example_inner text-left py-3 px-4">
                                    <p>
                                        <b>
                                            <?= __('Podremos seguir una simulación de partida sobre la problemática ficticia ') ?>
                                            <br>
                                            <i><?= __('“¿Cómo podríamos mejorar la comunicación interna?” ') ?></i>
                                            <br>
                                            <?= __('para que los exploradores puedan comprender mejor el trabajo a realizar en cada etapa. ') ?>
                                        </b>
                                    </p>
                                    <p>
                                        <?= __('Al abrir el cuadro ‘Ejemplo’ en cada una de las etapas los equipos podrán leer o consultar los contenidos que se podrían haber generado sobre esta problemática, en cada momento de la partida. Les ayudará a entender cómo aplicar lo mismo a su problemática') ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <p class="green">
                            <b>
                                <?= __('Ejemplo: si nuestra problemática inicial fuera ') ?><i><?= __('“¿Cómo podríamos mejorar la comunicación interna?"') ?></i>
                            </b>
                        </p>
                        <p>
                            <b>
                                <?= __('Para esta Etapa 1, algunos ejemplos de ') ?><i><?= __('comentarios informales') ?></i> <?= __('sobre la problemática podrían ser:') ?> 
                            </b>
                        </p>
                        <ul>
                            <li>
                                <?= __('Los rumores siempre van más rápido que la información interna') ?>
                            </li>
                            <li>
                                <?= __('Nadie lee los mails de comunicación interna') ?> 
                            </li>
                            <li>
                                <?= __('Mucha gente no entiende los mails de comunicación interna') ?>
                            </li>
                            <li>
                                <?= __('No tocan lo que nos gustaría realmente saber') ?>
                            </li>
                            <li>
                                <?= __('Para los de la fábrica, la información no es relevante') ?>
                            </li>
                            <li>
                                <?= __('Los mails de comunicación son muy aburridos') ?>
                            </li>
                            <li>
                                <?= __('Siempre presentan un mundo perfecto') ?>
                            </li>
                            <li>
                                <?= __('Los que mandan comunicación están muy lejos y no saben lo que hacemos') ?>
                            </li>
                            <li>
                                <?= __('Tendríamos que tener a personas de comunicación en cada área ') ?>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>


        <div class="text-center">
            <div class="alert d-inline-block" role="alert">
                <b>
                    <?= __('¡Ganarán Bikles los equipos con más comentarios!') ?>
                </b>
                </br>
                <?= __('¡Perderán Bikles los equipos con menos comentarios!') ?>
            </div>
        </div>
        <p>
            <?= __('Cuando todos los equipos hayan finalizado pulsa ”Continuar Etapa”') ?>
        </p>
      <?php if ($admin) { ?>
          <div class="my-4 text-right">
              <button  id="anterior" type="button" class="btn btn-primary"><?= __('Anterior') ?></button>
              <button  id="siguiente" type="button" class="btn btn-primary"><?= __('Continuar etapa 1') ?></button>
          </div>
      <?php } ?>
    </section>
</main>

<script>
    var page = 8;
    var stop =<?= $stop ?>;
    $(function () {
<?php if ($admin) { ?>
            $('#finalizar').click(function () {
                $('#siguiente').click();
            });
            setTimeout(checkTime, 500);
            function checkTime() {

                $.get("<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "gettime"
    ])
    ?>", function (data, status) {
                    if (data != "0" && data != "00:00") {
                        $('#clock').html(data);
                        setTimeout(checkTime, 500);
                    } else {
                        if (stop) {
                            alert("Se acabó el tiempo");
                            location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page9"
    ])
    ?>';
                        }
                    }
                });
            }
            $('#siguiente').click(function () {
                location.href = '<?= $this->Url->build(["controller" => "Game", "action" => "page9"]) ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page7"
    ])
    ?>';
            });
<?php } ?>

    });
</script>

