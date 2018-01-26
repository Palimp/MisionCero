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
        <?= $this->Html->image("breadp151.svg", ['class' => 'img-fluid']); ?>
    </header>
    <div class="title_wrap">
      <span class="title">
        <?=__('Problemática: '.$trouble)?>
      </span>
    </div>
    <div>
        <p class="title_first pb-4">
            <?=__('Insights Espontáneos')?>
        </p>
    </div>
    <section class="container">
        <p class="h_green">
            <i class="fa fa-lightbulb-o"></i>
            <?= __('Convertir estos 3 comentarios en RETOS y seleccionar a qué ÁMBITO pertenece cada uno de ellos.') ?>
        </p>
        <p>
            <b><?= __('Los equipos tienen 5 minutos') ?>
            </b>
        </p>
        <div>
            <div>
                <?=__('El Jefe de Expedición, puede ampliar, reducir o pausar el tiempo desde su cronómetro.')?>
                <h1><time id="clock" class="clock-b"><?= $time ?></time></h1>


                <?php
                echo $this->Form->create('Begin', array(
                    'url' => array('controller' => 'Game', 'action' => 'page11'), 'class' => 'd-inline-block'
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
                        'url' => array('controller' => 'Game', 'action' => 'page11'), 'class' => 'd-inline-block'
                    ));
                    ?>
                    <input type="hidden" name="stop" value="1">
                    <button class="btn btn-primary"><?= __('Parar tiempo') ?></button>
                    <?php
                } else {
                    echo $this->Form->create('Begin', array(
                        'url' => array('controller' => 'Game', 'action' => 'page11'), 'class' => 'd-inline-block'
                    ));
                    ?>
                    <input type="hidden" name="start" value="1">
                    <button class="btn btn-primary"><?= __('Reanudar tiempo') ?></button>
                <?php } ?>

                </form>
                <button id="finalizar" class="btn btn-primary"><?= __('Finalizar tiempo') ?></button>

                <?php
                echo $this->Form->create('Begin', array(
                    'url' => array('controller' => 'Game', 'action' => 'page11'), 'class' => 'd-inline-block'
                ));
                ?>
                <input type="hidden" name="time" value="-30">
                <a href="#" onclick="$(this).closest('form').submit()" data-toggle="tooltip" title="<?= ('Haz click para restar tiempo') ?>" class="d-inline-block btn btn-primary btn-green">
                    <i class="fa fa-minus"></i><time> 00:30</time>
                </a>
                </form>
            </div>
        </div>

            <!-- Button trigger modal_ex2 -->
        <div class="py-3">
            <a href="#" data-toggle="modal" data-target="#modal_ex2" class="grey_link">
                <i class="fa fa-file-text-o fa-2x example_ic mr-2"></i>
                <p class="fs12 d-inline-block"><?= __('click aquí para') ?><br><?= __(' ver ejemplo') ?>
                </p>
            </a>
            <!-- modal_ex2 -->
            <div>
                <div id="modal_ex2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal_ex2LiveLabel" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header align-items-start">
                                <div class="example row">
                                    <i class="fa fa-file-text-o fa-3x example_ic align-top col-1"></i>
                                    <div class="example_wrapper col mr-4">
                                        <div class="example_inner text-left py-3 px-4">
                                            <b><?=__('Siguiendo nuestra simulación de partida sobre la problemática ficticia ')?></b>
                                            <?=__('“¿Cómo podríamos mejorar la comunicación interna?”,')?>
                                            <b><?=__('aquí tienes ejemplos de contenidos que se podrían haber generado en este paso (transformar comentarios en retos) ')?></b>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    <b>
                                        <?= __('Para este paso, algunos ejemplos de “comentarios informales convertidos en retos”  de nuestra problemática ficticia “¿Cómo podríamos mejorar la comunicación interna?”, podrían ser:') ?>
                                    </b>
                                </p>
                                <div class="text-center">
                                    <p>
                                        <?= __('Los rumores siempre van más rápido que la información interna') ?>
                                        </br>
                                        <i class="fa fa-chevron-down"></i>
                                        </br>
                                        <?= __('¿Cómo conseguir que la información se adelante a los rumores?') ?>
                                    </p>
                                    <p>
                                        <?= __('Nadie lee los mails de comunicación interna') ?>
                                        </br>
                                        <i class="fa fa-chevron-down"></i>
                                        </br>
                                        <?= __('¿Cómo conseguir que todos abran y lean los mails de comunicación interna?') ?>
                                    </p>
                                    <p>
                                        <?= __('Mucha gente no entiende los mails de comunicación interna') ?>
                                        </br>
                                        <i class="fa fa-chevron-down"></i>
                                        </br>
                                        <?= __('¿Cómo conseguir que los mails de comunicación interna sean fáciles de entender?') ?>
                                    </p>
                                    <p>
                                        <?= __('No tocan lo que nos gustaría realmente saber') ?>
                                        </br>
                                        <i class="fa fa-chevron-down"></i>
                                        </br>
                                        <?= __('¿Cómo conseguir que la comunicación que recibimos sea la que nos interesa?') ?>
                                    </p>
                                    <p>
                                        <?= __('Para los de la fábrica, la información no es relevante') ?>
                                        </br>
                                        <i class="fa fa-chevron-down"></i>
                                        </br>
                                        <?= __('¿Cómo conseguir que la información que recibe la gente de la fábrica sea relevante para ellos?') ?>
                                    </p>
                                    <p>
                                        <?= __('Los mails de comunicación son muy aburridos') ?>
                                        </br>
                                        <i class="fa fa-chevron-down"></i>
                                        </br>
                                        <?= __('¿Cómo conseguir que los mails de comunicación sean amenos?') ?>
                                    </p>
                                    <p>
                                        <?= __('Siempre presentan un mundo perfecto') ?>
                                        </br>
                                        <i class="fa fa-chevron-down"></i>
                                        </br>
                                        <?= __('¿Cómo conseguir que la comunicación nos parezca realista ?') ?>
                                    </p>
                                    <p>
                                        <?= __('Los que mandan comunicación están muy lejos y no saben lo que hacemos') ?>
                                        </br>
                                        <i class="fa fa-chevron-down"></i>
                                        </br>
                                        <?= __('Cómo conseguir que todos perciban que los que mandan la comunicación están cerca y entienden nuestro trabajo') ?>
                                    </p>
                                    <p>
                                        <?= __('Tendríamos que tener a personas de comunicación en cada área  ') ?>
                                        </br>
                                        <i class="fa fa-chevron-down"></i>
                                        </br>
                                        <?= __('¿Cómo tener a personas de comunicación o capaces de comunicar en cada área?') ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p>
            <?=__('Cuando todos los equipos hayan finalizado pulsa ”Continuar Etapa”')?>
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
    var page = 11;
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
                            alert("<?= __('Se acabó el tiempo') ?>");
                            location.href = '<?= $this->Url->build(["controller" => "Game", "action" => "page12"]) ?>';
                        }
                    }
                });
            }
            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page12"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page10"
    ])
    ?>';
            });
<?php } ?>

    });
</script>

