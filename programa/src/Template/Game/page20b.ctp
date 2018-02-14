<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
?>

<main>
    <header>
        <?= $this->Html->image("breadp33.svg", ['class' => 'img-fluid mx-auto d-block head-img']); ?>
    </header>
    <div class="title_wrap text-center">
      <span class="title">
        <?=__('Problemática: '.$trouble)?>
      </span>
    </div>
    <section class="container text-center">
        <p class="h_green">
            <i class="fa fa-lightbulb-o"></i>
            <?= __('Identificar retos basados en preguntas básicas') ?>
        </p>
        <div class="clock-c">
            <i class="fa fa-clock-o mr-2"></i><time>10'</time>
        </div>
        <p>
            <?=__('Pensar en las preguntas más básicas para identificar retos:')?>
        </p>
        
        <div class="text-left">
            <div class="pr-3 d-inline-block" style="background-color: #ebfa94;">
                <span class="mx-2">
                    <?=__('¿QUIÉN?')?>
                </span>
                <span class="mr-2">
                    <?=__('¿DÓNDE?')?>
                </span>
                <span>
                    <?=__('¿CUÁNDO?')?>
                </span>
            </div>
        </div>
        <ol class="mt-2 list-numbered text-left">
            <li>
                <?=__('Pensar en públicos objetivos (internos o externos), lugares y momentos relevantes asociados con la problemática')?>
            </li>
            <li>
                <?=__('Convertir estas respuestas en retos: ¿cómo…?')?>
            </li>
        </ol>
        <div class="text-left">
            <div class="pr-3 d-inline-block" style="background-color: #f3ed48;">
                <span class="mx-2">
                    <?=__('¿POR QUÉ?')?>
                </span>
                <span>
                    <?=__('¿PARA QUÉ?')?>
                </span>
            </div>
        </div>
        <ol class="mt-2 list-numbered text-left">
            <li>
                <?=__('Pensar en “¿por qué?/¿para qué?”  tenemos que trabajar este reto.')?>
            </li>
            <li>
                <?=__('Convertirlos en reto: ¿Cómo…? ')?>
            </li>
        </ol>
            



        <div class="fs32">
            <i class="fa fa-clock-o mr-3"></i><time id="clock" class="clock-a"><?= $time ?></time>
        </div>

        <?php
        foreach ($comments as $comment) {
            ?>
            <div id="bloque<?= $comment->id ?>" class="row form-group"><div class="col pl-0"><b><?= $comment->question ?></b></div><div class="col col-md-auto"><a href="#" id="delete<?= $comment->id ?>" onclick="delComment(<?= $comment->id ?>)" data-toggle="tooltip" title="<?= __('Haz click para borrar un comentario') ?>" class="d-inline-block pull-right"><i class="fa fa-close fa-2x"></i></a></div></div>
            <?php
        }
        ?>
        <div id="bloque" class="row form-group">
            <div class="col pl-0">
                <input type="text" name="comment" id="comment" class="form-control" placeholder="<?= __('Introduzca aquí su reto') ?>">
            </div>
            <div class="col col-md-auto">
                <a id="addcomment" href="#" data-toggle="tooltip" title="<?= __('Haz click para añadir un reto') ?>" class="d-inline-block">
                    <i class="fa fa-plus fa-2x"></i>
                </a>
            </div>
        </div>
        <div>
            <!-- Button trigger modal_ex -->

            <div class="py-3">
                <a href="#" data-toggle="modal" data-target="#modal_ex" class="grey_link">
                    <i class="fa fa fa-file-text-o fa-2x example_ic mr-2"></i>
                    <div class="fs12 d-inline-block"><?= __('click aquí para') ?><br><?= __(' ver ejemplo') ?>
                    </div>
                </a>
            </div>

            <!-- modal_ex -->
            <div>
                <div id="modal_ex" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal_exLiveLabel" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header align-items-start">
                                <div class="example row">
                                    <i class="fa fa-file-text-o fa-3x example_ic align-top col-1"></i>
                                    <div class="example_wrapper col mr-4">
                                        <div class="example_inner text-left py-3 px-4">
                                            <?=__('Siguiendo nuestra simulación de partida sobre la problemática ficticia ')?>
                                            </br>
                                            <?=__('“¿Cómo podríamos mejorar la comunicación interna?”,')?>
                                            </br>
                                            <?=__('aquí tienes ejemplos de contenidos que se podrían haber generado en este paso')?>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <p>
                                        <?=__('Para esta Etapa 2, algunos ejemplos de ')?><i><?=__('“retos basados en preguntas básicas”')?></i> <?=__(' podrían ser:')?> 
                                </p>
                                <div class="text-center">
                                    <div class="row">
                                        <div class="col">
                                            <p>
                                                <i class="fa fa-user fa-2x"></i>
                                                </br>
                                                <b>
                                                    <?= __('QUIÉN:') ?>
                                                </b>
                                                </br>
                                                <span class="h_green">
                                                    <?= __(' pensar en actores relevantes de la problemática y cómo estos expresarían el reto') ?>
                                                </span>
                                                </br>
                                                <?= __('El que manda la comunicación') ?>
                                                </br>
                                                <i class="fa fa-chevron-down"></i>
                                                </br>
                                                <?= __('¿Cómo conseguir que el que manda la comunicación conozca el colectivo que la recibe?') ?>
                                            </p>
                                            <p>
                                                <?= __('Los que la reciben') ?>
                                                </br>
                                                <i class="fa fa-chevron-down"></i>
                                                </br>
                                                <?= __('¿Cómo involucrar a la gente en la comunicación?') ?>
                                            </p>
                                        </div>
                                        <div class="col">
                                            <p>
                                                <i class="fa fa-clock-o fa-2x"></i>
                                                </br>
                                                <b>
                                                    <?= __('CUÁNDO:') ?>
                                                </b>
                                                </br>
                                                <span class="h_green">
                                                    <?= __(' pensar en momentos relevantes de la problemática y en posibles retos relacionados con estos momentos') ?>
                                                </span>
                                                </br>
                                                <?= __('Cuando hay cambios') ?>
                                                </br>
                                                <i class="fa fa-chevron-down"></i>
                                                </br>
                                                <?= __('¿Cómo comunicar bien cuando hay cambios importantes?') ?>
                                            </p>
                                            <p>
                                                <?= __('Cuando hay dudas') ?>
                                                </br>
                                                <i class="fa fa-chevron-down"></i>
                                                </br>
                                                <?= __('¿Cómo comunicar mejor en momentos de incertidumbre?') ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p>
                                                <i class="fa fa-map-pin fa-2x"></i>
                                                </br>
                                                <b>
                                                    <?= __('DÓNDE: ') ?>
                                                </b>
                                                </br>
                                                <span class="h_green">
                                                    <?= __('PENSAR EN LUGARES RELEVANTES RELACIONADOS CON LA PROBLEMÁTICA Y EN POSIBLES RETOS RELACIONADOS CON ESTOS LUGARES') ?>
                                                </span>
                                                </br>
                                                <?= __('En la fábrica') ?>
                                                </br>
                                                <i class="fa fa-chevron-down"></i>
                                                </br>
                                                <?= __('¿Cómo adecuar la comunicación al personal de fábrica?') ?>
                                            </p>
                                            <p>
                                                <?= __('En los espacios físicos donde se comunica') ?>
                                                </br>
                                                <i class="fa fa-chevron-down"></i>
                                                </br>
                                                <?= __('¿Cómo optimizar la comunicación en los paneles de los espacios comunes?') ?>
                                            </p>
                                            <p>
                                                <i class="fa fa-question-circle fa-2x"></i>
                                                </br>
                                                <b>
                                                    <?= __('POR QUÉ’S: ') ?>
                                                </b>
                                                </br>
                                                <span class="h_green">
                                                    <?= __('pensar en las razones que nos llevan a querer encontrar soluciones a nuestro problemática y transformarlas en retos') ?>
                                                </span>
                                                </br>
                                                <?= __('Porque nadie hace caso') ?>
                                                </br>
                                                <i class="fa fa-chevron-down"></i>
                                                </br>
                                                <?= __('¿Cómo podríamos conseguir que la genta haga caso a la comunicación?') ?>
                                            </p>
                                            <p>
                                                <?= __('Porque no nos enteramos de nada') ?>
                                                </br>
                                                <i class="fa fa-chevron-down"></i>
                                                </br>
                                                <?= __(' ¿Cómo conseguir que la comunicación interna nos ayude a entender mejor los objetivos?') ?>
                                            </p>
                                            <p>
                                                <?= __('Porque queremos que toda la empresa comparta la visión y los valores') ?>
                                                </br>
                                                <i class="fa fa-chevron-down"></i>
                                                </br>
                                                <?= __('¿Cómo conseguir una comunicación que involucre a la gente en los valores?') ?>
                                            </p>
                                        </div>
                                        <div class="col">
                                            <p>
                                                <i class="fa fa-crosshairs fa-2x"></i>
                                                </br>
                                                <b>
                                                    <?= __('PARA QUÉ: ') ?>
                                                </b>
                                                </br>
                                                <span class="h_green">
                                                    <?= __(' pensar en los objetivos que nos llevan a querer encontrar soluciones a nuestro problemática y transformarlos en retos') ?>
                                                </span>
                                                </br>
                                                <?= __('Para que todos lo entiendan') ?>
                                                </br>
                                                <i class="fa fa-chevron-down"></i>
                                                </br>
                                                <?= __('¿Cómo podríamos conseguir que se entienda a primera vista el mensaje clave de una comunicación?') ?>
                                            </p>
                                            <p>
                                                <?= __('Para que la comunicación ayude a la gente en su trabajo ') ?>
                                                </br>
                                                <i class="fa fa-chevron-down"></i>
                                                </br>
                                                <?= __('¿cómo conseguir que la gente perciba que la comunicación les ayuda?') ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="text-center mt-5">
            <div class="alert alert_bikles d-inline-block" role="alert">
                <img src="/img/bikles.png" class="float-left mr-3 img-fluid" alt="">
                <?= __('Escribe el máximo de retos posibles.') ?>
                </br>
                <?= __('¡Los equipos') ?>
                <b>
                    <?= __('ganarán o perderán Bikles!') ?>
                </b>
            </div>
        </div>
    </section>
</main>

<script>
    var page = 20;
    function delComment(id) {
        $.get("<?=
                                                $this->Url->build([
                                                    "controller" => "Game",
                                                    "action" => "deletequestion"
                                                ])
                                                ?>", {'id': id}, function (data, status) {
            if (status == 'success') {

                $('#bloque' + id).remove();
            }
        });
    }
    $(function () {
<?php if (!$admin) { ?>
            $("#comment").keyup(function (event) {
                if (event.keyCode == 13) {
                    $("#addcomment").click();
                }
            });
            $('#addcomment').click(function () {
                $('#addcomment').attr('style', 'display: none !important');
                $.get("<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "addquestion"
    ])
    ?>", {'comment': $('#comment').val()}, function (data, status) {
                    if (status == 'success') {
                        $('#addcomment').removeAttr('style');
                        $('#bloque').before('  <div id="bloque' + data + '" class="row form-group"><div class="col pl-0"><b>' + $('#comment').val() + '</b></div><div class="col col-md-auto"><a href="#" id="delete' + data + '" onclick="delComment(' + data + ')" data-toggle="tooltip" title="Haz click para borrar un reto" class="d-inline-block pull-right"><i class="fa fa-close fa-2x"></i></a></div></div>');
                        $('#comment').val('');

                    }
                });
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

                    } else if (data != "0") {
                        alert("<?= __('Se acabó el tiempo') ?>");
                        location.href = '<?= $this->Url->build(["controller" => "Game", "action" => "index"]) ?>';
                    } else {
                        setTimeout(checkTime, 500);
                    }

                });

            }

<?php } ?>

    });
</script>

