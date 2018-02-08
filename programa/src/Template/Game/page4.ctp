<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
if ($admin) {
    echo $this->element('navbar');
}
?>
<main style="background-color: #e3e3e3;">
    <div class="text-center">
        <h4 class="title_alt"><?=__('Binnakle Mission 0 -¿Por qué?')?></h4>
    </div>
    <section class="container">
        <div class="fs22 mb-4 py-4">
            <img src="/img/lupa.svg" class="float-left mr-3" alt="">
            <b>
                <?=__('¿Cómo?')?>
            </b>
            </br>
            <?=__('Con una metodología que nos permite enfocar la problemática desde sus diferentes puntos de vista.')?>
        </div>
        <div class="fs22 mb-4">
            <?=__('Binnakle Mission 0 es el serious game que permite convertir una problemática inicial en ')?><b><?=__('retos concretos, ')?></b><?=__('novedosos y diversos, para optimizar la búsqueda posterior de nuevas soluciones')?>
        </div>

        <div class="py-5 Xpy-20">

            <?= $this->Html->image("imgp7.gif", ['class' => 'img-fluid']); ?>

        </div>
        <p class="fs22">
            <?=__('Binnakle, el juego para generar ')?><b><?=__('nuevas ideas ')?></b><?=__('sobre cualquier tipo de reto, te podrá ayudar más adelante a encontrar soluciones novedosas a estos retos')?>
        </p>
        <?php if ($admin) { ?>
            <div class="my-4 text-right">
                <button  id="anterior" type="button" class="btn btn-primary"><?= __('Anterior') ?></button>
                <button  id="siguiente" type="button" class="btn btn-primary"><?= __('Siguiente') ?></button>
            </div>
        <?php } ?>
    </section>
</main>
<script>
    var page = 4;
    $(function () {
<?php if (!$admin) { ?>
            setTimeout(checkPage, 500);

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
<?php } else { ?>
            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page5"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page3"
    ])
    ?>';
            });
<?php } ?>

    });
</script>

