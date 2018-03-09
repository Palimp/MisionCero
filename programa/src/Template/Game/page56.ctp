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

