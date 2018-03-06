<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
?>

<main>
    <header>
        <?= $this->Html->image("breadp49.svg", ['class' => 'img-fluid mx-auto d-block head-img']); ?>
    </header>
    <div class="title_wrap text-center">
      <span class="title">
        <?=__('Problemática: '.$trouble)?>
      </span>
    </div>
    <section class="container text-center">

        <p class="h_green">
                <?= __('El equipo escribe los retos') ?>
        </p>
        <div class="clock-c">
            <i class="fa fa-clock-o mr-2"></i><time>7'</time>
        </div>

        <div class="fs32 text-center">
            <i class="fa fa-clock-o mr-3"></i><time id="clock" class="clock-a"><?= $time ?></time>
        </div>
        <?php
        foreach ($comments as $comment) {
            ?>
            <div id="bloque<?= $comment->id ?>" class="row form-group"><div class="col pl-0">
                    <span><?= __('¿ Cómo') ?></span> <span><?= $comment->question ?> </span></div><div class="col col-md-auto"><a href="#" id="delete<?= $comment->id ?>" onclick="delComment(<?= $comment->id ?>)" data-toggle="tooltip" title="<?= __('Haz click para borrar un comentario') ?>" class="d-inline-block pull-right"><i class="fa fa-close fa-2x"></i></a></div></div>
            <?php
        }
        ?>
        <div id="bloque" class="row form-group">
            <div class="col pl-0">
                <span><?= __('¿ Cómo') ?></span>
                <input type="text" name="comment" id="comment" class="form-control d-inline w-75" placeholder="<?= __('Introduzca aquí su reto') ?>">
            </div>
            <div class="col col-md-auto">
                <a id="addcomment" href="#" data-toggle="tooltip" title="<?= __('Haz click para añadir un reto') ?>" class="d-inline-block">
                    <i class="fa fa-plus fa-2x"></i>
                </a>
            </div>
        </div>

        <div class="text-center">
            <div class="alert alert_bikles d-inline-block" role="alert">
                <img src="/img/bikles.png" class="float-left mr-3 img-fluid" alt="">
                <?= __('Escribe el máximo de comentarios posibles.') ?>
                </br>
                <?= __('¡Los equipos') ?>
                <b>
                    <?= __('ganarán o perderán Bikles!') ?>
                </b>
            </div>
        </div>
        <div>

            <div class="py-3">
              <a href="#" data-toggle="modal" data-target="#modal_ex4" class="grey_link">
                <i class="fa fa-file-text-o fa-2x example_ic mr-2"></i>
                <p class="fs12 d-inline-block"><?= __('click aquí para') ?><br><?= __(' ver ejemplo') ?>
                </p>
              </a>
            </div>
            <div id="modal_ex4" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal_ex4LiveLabel" style="display: none;" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header align-items-start">
                    <div class="example row">
                        <i class="fa fa-file-text-o fa-3x example_ic align-top col-1"></i>
                        <div class="example_wrapper col mr-4">
                           <div class="example_inner text-left py-3 px-4">
                            <?=__('Siguiendo nuestra simulación de partida sobre la problemática ficticia ')?></br>
                            <?=__('“¿Cómo podríamos mejorar la comunicación interna?”,')?></br>
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
                            <?=__('Para esta Etapa 3, algunos ejemplos de ')?><i><?=__('retos basados en puntos de vista')?></i> <?=__(' podrían ser:')?> 
                    </p>
                    <div>
                      <div class="row">
                        <div class="col">
                          <p class="fs26">
                            <b>
                              <?=__('Stakeholder')?>
                            </b>
                            </br>
                            <i class="fa fa-chevron-down"></i>
                            </br>
                                <?=__('reto visto desde su punto de vista')?>
                          </p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <p>
                            <i class="fa fa-shopping-cart fa-2x"></i>
                            </br>
                            <b>
                              <?=__('Mis clientes')?>
                            </b>
                            </br>
                            <i class="fa fa-chevron-down"></i>
                            </br>
                            <?=__('¿Cómo conseguir que mi comunicación ayude a la gente a conocer mejor a los clientes?')?>
                            </br>
                            </br>
                            <?=__('¿Cómo utilizar a mi comunicación interna para que los clientes nos conozcan mejor?')?>
                          </p>
                        </div>
                        <div class="col">
                          <p>
                            <i class="fa fa-user-o fa-2x"></i>
                            </br>
                            <b>
                              <?=__('Los jefes')?>
                            </b>
                            </br>
                            <i class="fa fa-chevron-down"></i>
                            </br>
                            <?=__('¿Cómo podríamos conseguir que los jefes ayuden a sus equipos a entender la comunicación?')?>
                            </br>
                            </br>
                            <?=__('¿Cómo podríamos informarles primero y que no digan nada hasta que sea oficial?')?>
                          </p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <p>
                            <i class="fa fa-handshake-o fa-2x"></i>
                            </br>
                            <b>
                              <?=__('Los responsables de comunicación')?>
                            </b>
                            </br>
                            <i class="fa fa-chevron-down"></i>
                            </br>
                            <?=__('¿Cómo podríamos conseguir que conozcan mejor los diferentes colectivos?')?>
                            </br>
                            </br>
                            <?=__('¿Cómo conseguir que formen a la gente en comunicación?')?>
                          </p>
                        </div>
                        <div class="col">
                          <p>
                            <i class="fa fa-crosshairs fa-2x"></i>
                            </br>
                            <b>
                              <?=__('El entorno de los trabajadores')?>
                            </b>
                            </br>
                            <i class="fa fa-chevron-down"></i>
                            </br>
                            </br>
                            <?=__('¿Cómo podríamos conseguir que parte de la comunicación corporativa pueda ayudar a mejorar nuestra imagen en el entorno?')?>
                          </p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <p>
                            <i class="fa fa-truck fa-2x"></i>
                            </br>
                            <?=__('Mis proveedores')?>
                            </br>
                            <i class="fa fa-chevron-down"></i>
                            </br>
                            <?=__('¿Cómo utilizar a mi comunicación interna para involucrar a los proveedores?')?>
                          </p>
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
                                    "action" => "deletestake"
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
        "action" => "addstake"
    ])
    ?>", {'comment': $('#comment').val()}, function (data, status) {
                    if (status == 'success') {
                        $('#addcomment').removeAttr('style');
                        $('#bloque').before('  <div id="bloque' + data + '" class="row form-group"><div class="col pl-0">¿<span><?= __('Cómo') ?></span> ' + $('#comment').val() + ' ?</div><div class="col col-md-auto"><a href="#" id="delete' + data + '" onclick="delComment(' + data + ')" data-toggle="tooltip" title="<?= __('Haz click para borrar un reto') ?>" class="d-inline-block pull-right"><i class="fa fa-close fa-2x"></i></a></div></div>');
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

