<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
?>

<!-- ** pag p15 ** -->
<main>
    <header class="text-center m-5 mb-10">
        <?= $this->Html->image("breadp15.svg", ['class' => 'img-fluid']); ?>
    </header>
    <section>
        <h4>
            <?= __('Problemática: ' . $trouble) ?>
        </h4>
        <p class="fs22 green">
            <?= __('Retos basados en preguntas básicas') ?>
        </p>
        <p>
            <?= __('Los equipos tienen 10 minutos para identificar retos basados en preguntas básicas:') ?>
        </p>
        <div class="row fs22 green">
            <div class="col">
                <?= __('¿CUÁNDO?') ?>
            </div>
            <div class="col">
                <?= __('¿DÓNDE?') ?>
            </div>
            <div class="col">
                <?= __('¿CÓMO?') ?>
            </div>
            <div class="col">
                <?= __('¿QUIÉN?') ?>
            </div>
        </div>
        <ul>
            <li>
                <?= __('Paso 1- Pensar en momentos relevantes, lugares relevantes (de uso, de compra, donde ocurre…), formas de hacer las cosas, públicos objetivos (internos o externos)') ?>
            </li>
            <li>
                <?= __('Paso 2- Convertir estas respuestas en retos: ¿cómo…?') ?>
            </li>
        </ul>
        <div class="row fs22 green">
            <div class="col">
                <?= __('¿POR QUÉ?') ?>
            </div>
            <div class="col">
                <?= __('¿PARA QUÉ?') ?>
            </div>
        </div>
        <ul>
            <li>
                <?= __('Paso 1- Pensar en “¿por qué?/¿para qué?”  tenemos que trabajar este reto. Escribir estos “¿por qué?/¿para qué?” ') ?>
            </li>
            <li>
                <?= __('Paso 2- Convertirlos en reto: ¿Cómo…? ') ?>
            </li>
        </ul>


        <div class="col fs32">
            <div class="d-flex align-items-end flex-column">
                <div>
                    <h1><time id="clock"><?= $time ?></time></h1>
                    <i class="fa fa-clock-o"></i>

                </div>

            </div>
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
            <a href="#" data-toggle="modal" data-target="#modal_ex3" class="grey_link">
                <i class="fa fa-wpforms fa-2x example_ic mr-3 pull-left"></i>
                <p class="fs12"><?= __('click aquí para<br> ver ejemplo') ?>
                </p>
            </a>
        </div>
        <div class="text-center mt-5">
            <div class="alert alert-danger d-inline-block" role="alert">
                <b>
                    <?= __('¡Ganarán Bikles los equipos con más retos!') ?>
                </b>
                </br>
                <?= __('¡Perderán Bikles los equipos con menos retos!') ?>
            </div>
        </div>
        <div>
            <!-- Button trigger modal_ex -->
            <div class="d-inline">
                <a href="#" data-toggle="modal" data-target="#modal_ex" class="grey_link">
                    <i class="fa fa-wpforms fa-2x example_ic mr-3 pull-left"></i>
                    <p class="fs12"><?= __('click aquí para') ?><br><?= __(' ver ejemplo') ?>
                    </p>
                </a>
            </div>
            <!-- modal_ex -->
            <div>
                <div id="modal_ex" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal_exLiveLabel" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header align-items-start">
                                <div class="example fs26">
                                    <i class="fa fa-wpforms fa-3x example_ic align-top mr-3"></i>
                                    <div class="example_wrapper d-inline-block">
                                        <div class="example_inner text-left py-3 px-4">
                                            <b><?= __('Siguiendo nuestra simulación de partida sobre la problemática ficticia ') ?></b>
                                            <?= __('“¿Cómo podríamos mejorar la comunicación interna?”,') ?>
                                            <b><?= __('aquí tienes ejemplos de contenidos que se podrían haber generado en este paso') ?></b>
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
                                        <?= __('Para esta Etapa 3, algunos ejemplos de ') ?><i><?= __('“retos basados en preguntas básicas”') ?></i> <?= __(' podrían ser:') ?> 
                                    </b>
                                </p>
                                <div class="text-center">
                                    <div class="row">
                                        <div class="col">
                                            <p>
                                                <i class="fa fa-user fa-2x"></i>
                                                </br>
                                                <b>
                                                    <?= __('QUIÉN: pensar en actores relevantes de la problemática y cómo estos expresarían el reto') ?>
                                                </b>
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
                                                    <?= __('CUÁNDO: pensar en momentos relevantes de la problemática y en posibles retos relacionados con estos momentos') ?>
                                                </b>
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
                                                    <?= __('DÓNDE: pensar en actores relevantes de la problemática y cómo estos expresarían el reto') ?>
                                                </b>
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
                                                    <?= __('POR QUÉ’S: pensar en las razones que nos llevan a querer encontrar soluciones a nuestro problemática y transformarlas en retos') ?>
                                                </b>
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
                                                    <?= __('PARA QUÉ: pensar en los objetivos que nos llevan a querer encontrar soluciones a nuestro problemática y transformarlos en retos') ?>
                                                </b>
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

