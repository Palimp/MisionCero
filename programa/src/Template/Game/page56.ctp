<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
if ($admin) {
    echo $this->element('navbar');
}
?>

<!-- ** pag p15 ** -->
<main>
    <header class="text-center m-5 mb-10">
        <?= $this->Html->image("breadp78.svg", ['class' => 'img-fluid']); ?>
    </header> 
    <section>
        <p class="fs22">
            <?= __('Encontrarás abajo una serie de estado de animo o sensaciones.') ?>
            </br>
            <?= __('El equipo tendrá que elegir los 3 estados que más representan lo que siente ante la problemática trabajada.') ?>
            </br>
            <?= __('¡Pueden ser de columnas diferentes! ') ?>
        </p>
        <div class="m-auto">
            <div class="row justify-content-center top6">
                <div class="col-4 offset-sm-1">
                    <ul>
                        <li class="ml-5 fs22">
                            <i class="fa fa-smile-o fa-3x text-success ml-4"></i>
                            </br>
                            <?= __('POSITIVO') ?>
                        </li>
                        <?php foreach ($pos as $t) {
                            ?>
                            <li>
                                <label class="custom-control custom-checkbox">
                                    <input id="_<?= $t->id ?>" type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator" data-toggle="tooltip" title="<?= __('Haz click para seleccionar') ?>"></span>
                                    <span class="custom-control-description"><?= __($t->name) ?></span>
                                </label>
                            </li>
                        <?php } ?>

                    </ul>
                </div>
                <div class="col-4">
                    <ul>
                        <li class="ml-5 fs22">
                            <i class="fa fa-smile-o fa-3x fa-rotate-180 text-danger ml-4"></i>
                            </br>
                            <?= __('NEGATIVO') ?>
                        </li>
                        <?php foreach ($neg as $t) {
                            ?>
                            <li>
                                <label class="custom-control custom-checkbox">
                                    <input id="_<?= $t->id ?>" type="checkbox" class="custom-control-input">
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

    </section>
    <?php if ($admin) { ?>
        <p>Cuando todos los equipos hayan finalizado su votación, pulsa ”Continuar Etapa”</p>
        <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
        <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Continuar Etapa 9') ?></button>
    <?php } else { ?>
        <div class="text-right mt-5">
            <a href="#" id="submitvotos" data-toggle="tooltip" title="<?= __('Haz click para enviar') ?>" class="d-inline-block" <?= $voted ? 'style="display:none !important"' : '' ?>>
                <i class="fa fa-check fa-2x"></i>
            </a>
        </div>
    <?php } ?>
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

                $('#error').html('');
                var votos = [];
                $(':checkbox:checked').each(function () {
                    votos.push($(this).attr('id').replace("_", ""));
                });
                if (votos.length!=3){
                    $('#error').html('<b style="color:red"><?=__('Los equipos aún están votando')?></b>');
                    return;
                }
                                $('#submitvotos').attr('style', 'display:none !important');

                $.get("<?=
    $this->Url->build(["controller" => "Game", "action" => "savefeelings"])
    ?>", {'ids': JSON.stringify(votos)}, function (data, status) {

                    $(':checkbox').attr('disabled', 'disabled');
                    cambiar = true;
                    $('#error').html('<?= __('Todos los equipos han votado. Ya puedes pulsar en “Continuar Etapa”') ?>');
                    setTimeout(checkPage, 1000);
                });

            });



<?php } ?>
    });
</script>

