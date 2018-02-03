<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
if ($admin) {
    echo $this->element('navbar');
}
?>

<main class="text-center">
    <header>
        <?= $this->Html->image("breadp74.svg", ['class' => 'img-fluid']); ?>
    </header>
    <div class="title_wrap">
      <span class="title">
        <?=__('Problemática: '.$trouble)?>
      </span>
    </div>
    <div>
        <p class="title_first pb-4">
            <?= __('Parada lúdica 3') ?>
        </p>
    </div>
    <section class="container">
        <p class="h_green">
            <?= __('La parada que estabas esperando… ¡CULTURA GENERAL!') ?> <i class="fa fa-smile-o"></i>
        </p>
        <p>
            <i class="fa fa-comment-o"></i>
            <?= __('En esta etapa los Exploradores tendrán que demostrar sus conocimientos respondiendo a preguntas') ?>
            <br>
            <?= __('¡Ganaran Bikles los equipos que responden correctamente!') ?>
        </p>
        <?php if ($admin) { ?>
            <p>
                <?= __('Sigue las instrucciones al pie del video para pausar y lanzar la pregunta en el momento adecuado') ?>
            </p>
        <?php } ?>
    </section>
    <?php if ($admin) { ?>
        <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
        <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Pasar a enigmas') ?></button>
    <?php } ?>
</main>

<script>
    var page = 511;
    $(function () {
<?php if ($admin) { ?>


            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page52"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page51"
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

