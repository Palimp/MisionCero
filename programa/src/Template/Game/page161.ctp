<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
if ($admin) {
    echo $this->element('navbar');
}
//echo $url;
?>

<main class="text-center">
    <header>
        <?= $this->Html->image("breadp28.svg", ['class' => 'img-fluid mx-auto d-block head-img']); ?>
    </header>
    <div>
        <p class="title_first mt-3 pb-2">
            <?= __('Parada lúdica 1') ?>
        </p>
    </div>
    <section class="container">
        <?php if ($admin) { ?>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="<?= $url ?>" frameborder="0" allowfullscreen></iframe>
            </div>
            
            <div class="video">
                <?= __($texto) ?>
            </div>
            
            <div class="text-left mt-5 row">
                <div class="col-2">
                    <a href="#" data-toggle="modal" data-target="#modal_video_1" class="grey_link">
                        <i class="fa fa-question-circle-o fa-2x example_ic mr-3 pull-left"></i>
                        <p class="fs12"><?= __('click aquí para') ?><br><?= __(' ver pregunta') ?>
                        </p>
                    </a>
                </div>
                <div class="col-2">
                    <a href="#" data-toggle="modal" data-target="#modal_video_2" class="grey_link">
                        <i class="fa fa-check-circle-o fa-2x green mr-3 pull-left"></i>
                        <p class="fs12"><?= __('click aquí para') ?><br><?= __(' ver solución') ?>
                        </p>
                    </a>
                </div>
                <div class="col-8 text-right">
                    <button  id="otro" type="button" class="btn btn-primary"><?= __('Cambiar de vídeo') ?></button>
                    <button  id="anterior" type="button" class="btn btn-primary"><?= __('Anterior') ?></button>
                    <button  id="siguiente" type="button" class="btn btn-primary"><?= __('Continuar Etapa 2') ?></button>
                </div>
                <div>
                    <div id="modal_video_1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal_video_1LiveLabel" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header align-items-start">
                                    <div class="example fs26">
                                        <i class="fa fa-question-circle-o fa-3x example_ic align-top mr-3"></i>
                                        <div class="example_wrapper d-inline-block">
                                            <div class="example_innerX text-left py-3 px-4">
                                                <b><?= __('Pregunta') ?></b>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p class="fs22"><?= __('¿Alguien ha observado algo extraño en la escena?') ?></p>
                                    <br>
                                    <br>
                                    <?= __('Cuando todos los equipos hayan respondido, el Jefe de Expedición reproducirá el video para conocer la solución. ') ?>
                                    <br>
                                    <br>
                                    <?= __('Luego hará click en el icono ') ?><i class="fa fa-check-circle-o fa-lg green"></i> <?= __('para ver cuántos Bikles ganará cada equipo') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="modal_video_2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal_video_2LiveLabel" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content" style="background-color: #f2e500;">
                                <div class="modal-header align-items-start">
                                    <div class="example fs26 white">
                                        <i class="fa fa-check-circle-o fa-3x example_ic align-top white"></i>
                                        <div class="example_wrapper d-inline-block">
                                            <div class="example_innerX text-left py-3 px-4">
                                                <b><?= __('Solución') ?></b>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body pt-0">
                                    <p class="video_solution"><?= __($solucion) ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } else { ?>
            <div class="text-center mt-5">
                <div class="alert alert_bikles d-inline-block" role="alert">
                    <img src="/img/bikles.png" class="float-left mr-3 img-fluid" alt="">
                    <b>
                        <?= __('¡Observar bien el video!') ?>
                    </b>
                    </br>
                    <?= __('El Jefe de Expedición hará preguntas al acabar…') ?>
                </div>
            </div>
        <?php } ?>
    </section>
</main>

<script>
    var page = 16;
    $(function () {
<?php if ($admin) { ?>

            $('#otro').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page161"
    ])
    ?>';
            });
            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page17"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page16"
    ])
    ?>';
            });
<?php } else { ?>
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

