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
        <?= $this->Html->image("breadp151.svg", ['class' => 'img-fluid']); ?>
    </header>
    <div class="title_wrap text-center">
      <span class="title">
        <?=__('Problemática: '.$trouble)?>
      </span>
    </div>
    <div class="text-center">
        <p class="title_first pb-4">
            <?=__('Insights Espontáneos')?>
        </p>
    </div>
    <section class="container">
        <p>
            <i class="fa fa-lightbulb-o"></i>
            <?=__('Entre todos los comentarios generados,')?>
            <b><?=__('ahora cada equipo selecciona los 3 más relevantes')?></b>
            <br>
            <?=__('(Un reto es relevante si abre una nueva vía o ¡si es diferente a lo que trabajamos habitualmente!)')?>
        </p>
        <?php if ($admin) { ?>
            <p>
                <?=__('Cuando todos los equipos hayan finalizado su votación, pulsa ”Continuar Etapa”')?>
            </p>
            <div id="hasvoted"></div>
        <?php } else { ?>
            <table class="table table-striped">
                <tbody>
                    <?php foreach ($comments as $comment) { ?>
                        <tr>
                            <td scope="row" >
                                <span id="com<?= $comment['id'] ?>"> <?= $comment['comment'] ?></span>
                            </td>
                            <td class="text-right">
                                <label class="custom-control custom-checkbox">
                                    <input id='<?= $comment['id'] ?>' type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator" data-toggle="tooltip" title="Haz click para seleccionar"></span>
                                </label>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="text-right mt-5">
                <a href="#" id="submitcomment" data-toggle="tooltip" title="Haz click para enviar" class="d-inline-block">
                    <i class="fa fa-check fa-2x"></i>
                </a>
            </div>
        <?php } ?>
        
        <div class="col-2">
            <!-- Button trigger modal_ex2 -->
            <div class="d-inline">
                <a href="#" data-toggle="modal" data-target="#modal_ex2" class="grey_link">
                    <i class="fa fa-file-text-o fa-2x example_ic mr-3 pull-left"></i>
                    <p class="fs12"><?= __('click aquí para') ?><br><?= __(' ver ejemplo') ?>
                    </p>
                </a>
            </div>
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
      <?php if ($admin) { ?>
          <div class="my-4 text-right">
              <button  id="anterior" type="button" class="btn btn-primary"><?= __('Anterior') ?></button>
              <button  id="siguiente" type="button" class="btn btn-primary"><?= __('Continuar Etapa 1') ?></button>
          </div>
      <?php } ?>
    </section>
</main>

<script>
    var page = 10;
    var chequeados = [];
    $(function () {
<?php if ($admin) { ?>

            setTimeout(checkVote, 1000);
            function checkVote() {
                $.get("<?= $this->Url->build(["controller" => "Game", "action" => "checkvote"]) ?>",
                        {'table': 'comments'}, function (data, status) {
                           
                    if (data == 0) {
                        $('#hasvoted').html('<p style="color:red"><b><?= __('Los equipos aún están votando') ?></b></p>')
                        setTimeout(checkVote, 1000);
                    } else {
                        $('#hasvoted').html('<p style="color:green"><b><?= __('Todos los equipos han votado. Ya puedes pulsar en “Continuar Etapa”.') ?></b></p>')

                    }

                });
            }
            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page11"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page9"
    ])
    ?>';
            });
<?php } else { ?>
            $('#submitcomment').click(function () {
                if (chequeados.length == 3) {
                    $.get("<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "selectcomment"
    ])
    ?>", {'ids': JSON.stringify(chequeados)}, function (data, status) {

                        location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "index"
    ])
    ?>';
                    });
                } else {
                    alert("Debe elegir tres comentarios");
                }
            });
            $(':checkbox').click(function () {
                id = $(this).attr('id')
                $('#com' + id).toggleClass('green');
                var index = chequeados.indexOf(id);
                if (index == -1) {
                    chequeados.push(id);
                } else {

                    chequeados.splice(index, 1);
                }

            });
<?php } ?>
    });
</script>

