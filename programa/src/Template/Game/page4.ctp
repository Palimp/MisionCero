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
    <p class="title_first py-4 text-center">
        <?=__('Misión 0 es el serious game que permite convertir una problemática inicial en ')?><b><?=__('retos concretos, ')?></b><?=__('novedosos y diversos, para optimizar la búsqueda posterior de nuevas soluciones')?>
    </p>
    <div class="fs22" style="color: #fff;  background-color: #2b2b2b;  padding: .75rem 1.25rem; margin-bottom: 1rem;">
        <img src="/img/lupa.gif" class="pull-left mr-3" alt="">
        <b>
            <?=__('¿Cómo?')?>
        </b>
        </br>
        <?=__('Con una metodología que nos permite enfocar la problemática desde sus diferentes puntos de vista.')?>
    </div>
    <section class="container">

        <div class="py-5 Xpy-20 text-center">

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

