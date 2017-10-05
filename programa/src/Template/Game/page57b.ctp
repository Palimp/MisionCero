<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
?>

<!-- ** pag p15 ** -->
<main>
    <header class="text-center m-5 mb-10">
        <?= $this->Html->image("breadp78.svg", ['class' => 'img-fluid']); ?>
    </header>
    <section>
        <div class="col-12 col-md-auto">
            <p class="fs22">
                <?= __('El equipo escribe los retos') ?>.
            </p>
        </div>
       
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
            <div id="bloque<?= $comment->id ?>" class="row form-group"><div class="col pl-0"> <b class="fs26">¿</b>
            <span><?=__('¿Cómo podríamos')?></span> <b><?= $comment->question ?> ?</b></div><div class="col col-md-auto"><a href="#" id="delete<?= $comment->id ?>" onclick="delComment(<?= $comment->id ?>)" data-toggle="tooltip" title="<?=__('Haz click para borrar un comentario')?>" class="d-inline-block pull-right"><i class="fa fa-close fa-2x"></i></a></div></div>
            <?php
        }
        ?>
        <div id="bloque" class="row form-group">
            <div class="col pl-0">
                <b class="fs26">¿</b>
            <span><?=__('¿Cómo podríamos')?></span>
                <input type="text" name="comment" id="comment" class="form-control d-inline w-75" placeholder="<?=__('Introduzca aquí su reto')?>">
            </div>
            <div class="col col-md-auto">
                <a id="addcomment" href="#" data-toggle="tooltip" title="<?=__('Haz click para añadir un reto')?>" class="d-inline-block">
                    <i class="fa fa-plus fa-2x"></i>
                </a>
            </div>
        </div>
   <div class="col-2">
                <!-- Button trigger modal_ex6 -->
                <div class="d-inline">
                    <a href="#" data-toggle="modal" data-target="#modal_ex6" class="grey_link">
                        <i class="fa fa-wpforms fa-2x example_ic mr-3 pull-left"></i>
                        <p class="fs12"><?=__('click aquí para')?><br><?=__(' ver ejemplo')?>
                        </p>
                    </a>
                </div>
                <!-- modal_ex6 -->
                <div>
                    <div id="modal_ex6" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal_ex6LiveLabel" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header align-items-start">
                                    <div class="example fs26">
                                        <i class="fa fa-wpforms fa-3x example_ic align-top mr-3"></i>
                                        <div class="example_wrapper d-inline-block">
                                            <div class="example_inner text-left py-3 px-4">
                                                <span>
                                                    <b><?=__('Ejemplo Problemática')?></b> 
                                                    <?=__('¿Cómo mejorar mi comunicación interna?')?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body text-center">
                                    <div class="row py-5">
                                        <div class="col">
                                            <p>
                                                <i class="fa fa-smile-o fa-3x text-success"></i>
                                                </br>
                                                <b>
                                                    <?=__('POSITIVO')?>
                                                </b>
                                                </br>
                                                </br>
                                                <?=__('motivado')?>
                                                </br>
                                                <i class="fa fa-chevron-down"></i>
                                                </br>
                                                <?=__('¿cómo motivar al cloectivo sobre nuestro problema?')?>
                                            </p>
                                        </div>
                                        <div class="col">
                                            <p>
                                                <i class="fa fa-smile-o fa-3x fa-rotate-180 text-danger"></i>
                                                </br>
                                                <b>
                                                    <?=__('NEGATIVO')?>
                                                </b>
                                                </br>
                                                </br>
                                                <?=__('eso no lo soluciona nadie')?>
                                                </br>
                                                <i class="fa fa-chevron-down"></i>
                                                </br>
                                                <?=__('¿cómo convencer que se podrá solucionar?')?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="text-center mt-5">
            <div class="alert alert-danger d-inline-block" role="alert">
                <b>
                    <?=__('¡Ganarán Bikles los equipos con más comentarios!')?>
                </b>
                </br>
                <?=__('¡Perderán Bikles los equipos con menos comentarios!')?>
            </div>
        </div>
    </section>
   <div>
      
      </div>
 </main>

<script>
    var page = 57;
    function delComment(id) {
        $.get("<?=
        $this->Url->build([
            "controller" => "Game",
            "action" => "deletemotion"
        ])
        ?>", {'id': id}, function (data, status) {
            if (status == 'success') {

                $('#bloque' + id).remove();
            }
        });
    }
    $(function () {
<?php if (!$admin) { ?>

            $('#addcomment').click(function () {
                $('#addcomment').attr('style', 'display: none !important');
                $.get("<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "addmotions"
    ])
    ?>", {'comment': $('#comment').val()}, function (data, status) {
                    if (status == 'success') {
                        $('#addcomment').removeAttr('style');
                        $('#bloque').before('  <div id="bloque' + data + '" class="row form-group"><div class="col pl-0"><b class="fs26">¿</b><span><?=__('Cómo podríamos')?></span> <b>' + $('#comment').val() + ' ?</b></div><div class="col col-md-auto"><a href="#" id="delete' + data + '" onclick="delComment(' + data + ')" data-toggle="tooltip" title="<?=__('Haz click para borrar un reto')?>" class="d-inline-block pull-right"><i class="fa fa-close fa-2x"></i></a></div></div>');
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
                        alert("<?=__('Se acabó el tiempo')?>");
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

