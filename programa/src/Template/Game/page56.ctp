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
        <?= $this->Html->image("breadp78.svg", ['class' => 'img-fluid mx-auto d-block head-img']); ?>
    </header>
    <div class="title_wrap text-center">
      <span class="title">
        <?=__('Problemática: '.$trouble)?>
      </span>
    </div>
    <div class="text-center">
        <p class="title_first pb-4">
            <?=__('Etapa 5- Me siento')?>
        </p>
    </div>
    <section class="container text-center">
        <p class="h_green">
            <?= __('¿Cómo me siento ante la problemática?') ?>
        </p>
        <p class="green1back">
            <i class="fa fa-lightbulb-o fa-lg mr-1"></i>
            <?= __('Seleccionar los 3 estados de ánimo o sensaciones que mejor representan cómo se siente el equipo ante la problemática planteada.') ?>
        </p>
        <p>
            <i class="fa fa-comment-o"></i>
            <?= __('Pueden ser positivos y/o negativos: pueden ser de columnas diferentes') ?>
        </p>
        <div class="m-auto text-left">
            <div class="row justify-content-center">
                <div class="col-3">
                    <ul class="unstyled">
                        <li class="ml-3">
                            <i class="fa fa-smile-o fa-3x text-success ml-4"></i>
                            </br>
                            <?= __('POSITIVO') ?>
                        </li>
                        <?php foreach ($pos as $t) {
                            ?>
                            <li>
                                <label class="custom-control custom-checkbox">
                                    <input id="_<?= $t->id ?>" type="checkbox" <?=$admin?'disabled':''?> class="custom-control-input">
                                    <span class="custom-control-indicator" data-toggle="tooltip" title="<?= __('Haz click para seleccionar') ?>"></span>
                                    <span class="custom-control-description"><?= __($t->name) ?></span>
                                </label>
                            </li>
                        <?php } ?>

                    </ul>
                </div>
                <div class="col-2">
                    <ul class="unstyled">
                        <li class="ml-3">
                            <i class="fa fa-smile-o fa-3x fa-rotate-180 text-danger ml-4"></i>
                            </br>
                            <?= __('NEGATIVO') ?>
                        </li>
                        <?php foreach ($neg as $t) {
                            ?>
                            <li>
                                <label class="custom-control custom-checkbox">
                                    <input id="_<?= $t->id ?>" type="checkbox" <?=$admin?'disabled':''?> class="custom-control-input">
                                    <span class="custom-control-indicator" data-toggle="tooltip" title="<?= __('Haz click para seleccionar') ?>"></span>
                                    <span class="custom-control-description"><?= __($t->name) ?></span>
                                </label>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        <div id="error"></div>
        
        
        <div>
            <!-- Button trigger modal_ex6 -->
            <div class="py-3">
                <a href="#" data-toggle="modal" data-target="#modal_ex6" class="grey_link">
                    <i class="fa fa-file-text-o fa-2x example_ic mr-2"></i>
                    <div class="fs12 d-inline-block"><?= __('click aquí para') ?><br><?= __(' ver ejemplo') ?>
                    </div>
                </a>
             
            </div>
            <!-- modal_ex6 -->
            <div>
                <div id="modal_ex6" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal_ex6LiveLabel" style="display: none;" aria-hidden="true">
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
                            <div class="modal-body">
                                <p>
                                        <?= __('Para la Etapa 5, algunos ejemplos de ') ?><i><?= __('retos basados en estados de ánimo') ?></i> <?= __(' podrían ser:') ?> 
                                </p>
                                <table class="reduced table table-striped">
                                    <thead class="text-center">
                                        <tr>
                                            <th class="fs22 fw100 w30" style="position: relative;">
                                                <i class="fa fa-chevron-right " style="right: -0.8rem;position: absolute;bottom: 1.1rem;"></i>

                                                <?= __('ESTADO DE ÁNIMO') ?> 
                                            </th>
                                            <th class="fs22 fw100 w30" style="position: relative;">
                                                <?= __('RETOS') ?> 
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="fs16">
                                        <tr>
                                            <td scope="row"><?= __(' Motivado') ?></td>
                                            <td><?= __('¿Cómo conseguir que todo el equipo tenga nuestro nivel de motivación?') ?></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2"><?= __('Enfadado') ?></td>
                                            <td><?= __('¿Cómo conseguir que el enfado no se comunique?') ?></td>
                                        </tr>
                                        <tr>
                                            <td><?= __('¿Cómo pasar cuanto antes del enfado a un ánimo más constructivo?') ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="row" rowspan="2"><?= __('Pesimista') ?></td>
                                            <td><?= __('¿Cómo conseguir transformar nuestro pesimismo en optimismo?') ?></td>
                                        </tr>
                                        <tr>
                                            <td><?= __(' ¿Cómo conseguir que sea un éxito a pesar de nuestro pesimismo?') ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php if ($admin) { ?>
            <p><?= __('Cuando todos los equipos hayan finalizado su votación, pulsa ”Continuar Etapa”') ?></p>
              <div class="my-4 text-right">
                  <button  id="anterior" type="button" class="btn btn-primary"><?= __('Anterior') ?></button>
                  <button  id="siguiente" type="button" class="btn btn-primary"><?= __('Iniciar Etapa 5') ?></button>
              </div>
        <?php } else { ?>
            <div class="text-right mt-5">
                <a href="#" id="submitvotos" data-toggle="tooltip" title="<?= __('Haz click para enviar') ?>" class="d-inline-block" <?= $voted ? 'style="display:none !important"' : '' ?>>
                    <button type="buttonx" class="btn btn-primary"><?= __('Valida') ?></button>
                </a>
            </div>
        <?php } ?>
    </section>
</main>

<script>
    var page = 56;
    var cambiar = false;
    var chequeados = [];
    function checkPage() {
        $.get("<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "pageactive"
    ])
    ?>", function (data, status) {

            if (data == page) {
                setTimeout(checkPage, 1000);
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
    $(function () {
<?php if ($admin) { ?>


            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page57"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page55"
    ])
    ?>';
            });
<?php } else { ?>
            $('#submitvotos').click(function () {
console.log("ww");
                $('#error').html('');
                var votos = [];
                $(':checkbox:checked').each(function () {
                    votos.push($(this).attr('id').replace("_", ""));
                });
                console.log(votos);
                if (votos.length!=3){
                    $('#error').html('<?= __('Ups! Explorador, algo no ha ido bien…') ?><i class="fa fa-smile-o fa-rotate-180 text-danger"></i><?= __('Usa tus prismáticos y revisa tus votos') ?>');
                    return;
                }
                                $('#submitvotos').attr('style', 'display:none !important');

                $.get("<?=
    $this->Url->build(["controller" => "Game", "action" => "savefeelings"])
    ?>", {'ids': JSON.stringify(votos)}, function (data, status) {

                    $(':checkbox').attr('disabled', 'disabled');
                    cambiar = true;
                    $('#error').html('<?= __('Votos enviados') ?>');
                    setTimeout(checkPage, 1000);
                });

            });



<?php } ?>
    });
</script>

