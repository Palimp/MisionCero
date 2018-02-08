<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
?>

<main>
    <header>
        <?= $this->Html->image("breadp15.svg", ['class' => 'img-fluid']); ?>
    </header>
    <div class="title_wrap text-center">
      <span class="title">
        <?= __('Problemática: ' . $trouble) ?>
      </span>
    </div>
    <section class="container text-center">
        <p class="h_green">
            <i class="fa fa-lightbulb-o"></i>
            <?= __('Introducir comentarios espontáneos más relevantes sobre nuestra problemática:') ?>
        </p>
        <div class="clock-c">
            <i class="fa fa-clock-o mr-2"></i><time>10'</time>
        </div>
        <div class="fs32">
            <i class="fa fa-clock-o mr-3"></i><time id="clock" class="clock-a"><?= $time ?></time>
        </div>
        <?php
        foreach ($comments as $comment) {
            ?>
            <div id="bloque<?= $comment->id ?>" class="row form-group"><div class="col pl-0"><b><?= $comment->comment ?></b></div><div class="col col-md-auto"><a href="#" id="delete<?= $comment->id ?>" onclick="delComment(<?= $comment->id ?>)" data-toggle="tooltip" title="Haz click para borrar un comentario" class="d-inline-block pull-right"><i class="fa fa-close fa-2x"></i></a></div></div>
            <?php
        }
        ?>
        <div id="bloque" class="row form-group">
            <div class="col pl-0">
                <input type="text" name="comment" id="comment" class="form-control" placeholder="Introduzca aquí su comentario">
            </div>
            <div class="col col-md-auto">
                <a id="addcomment" href="#" data-toggle="tooltip" title="<?= ('Haz click para añadir un comentario') ?>" class="d-inline-block">
                    <i class="fa fa-plus fa-2x"></i>
                </a>
            </div>
        </div>
        
        <div class="py-3">
            <a href="#" data-toggle="modal" data-target="#modal_ex1" class="grey_link">
                <i class="fa fa fa-file-text-o fa-2x example_ic mr-2"></i>
                <div class="fs12 d-inline-block"><?= __('click aquí para') ?><br><?= __(' ver ejemplo') ?>
                </div>
            </a>
        </div>

        <div id="modal_ex1" class="modal fade text-left" tabindex="-1" role="dialog" aria-labelledby="modal_ex1LiveLabel" style="display: none;" aria-hidden="true">
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
                                <?= __('Ejemplo: si nuestra problemática inicial fuera ') ?><i><?= __('“¿Cómo podríamos mejorar la comunicación interna?"') ?></i>
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
        <div class="alert alert_bikles d-inline-block" role="alert">
            <img src="/img/bikles.png" class="float-left mr-3 img-fluid" alt="">
            <?= __('Escribe el máximo de comentarios posibles.') ?>
            </br>
            <?= __('¡Los equipos') ?>
            <b>
                <?= __('ganarán o perderán Bikles!') ?>
            </b>
        </div>
    </section>
</main>

<script>
    var page = 8;
    function delComment(id) {
        $.get("<?=
                                $this->Url->build([
                                    "controller" => "Game",
                                    "action" => "deletecomment"
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
                if ($('#comment').val()===""){
                    return;
                }
                $('#addcomment').attr('style', 'display: none !important');
                $.get("<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "addcomment"
    ])
    ?>", {'comment': $('#comment').val()}, function (data, status) {

                    if (status == 'success') {
                        $('#addcomment').removeAttr('style');
                        $('#bloque').before('  <div id="bloque' + data + '" class="row form-group"><div class="col pl-0"><b>' + $('#comment').val() + '</b></div><div class="col col-md-auto"><a href="#" id="delete' + data + '" onclick="delComment(' + data + ')" data-toggle="tooltip" title="Haz click para borrar un comentario" class="d-inline-block pull-right"><i class="fa fa-close fa-2x"></i></a></div></div>');
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
                        location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "index"
    ])
    ?>';
                    } else {
                        setTimeout(checkTime, 500);
                    }

                });

            }

<?php } ?>

    });
</script>

