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
        <?= $this->Html->image("breadp28.svg", ['class' => 'img-fluid']); ?>
    </header>
    <div class="title_wrap">
      <span class="title">
        <?=__('Problemática: '.$trouble)?>
      </span>
    </div>
    <div>
        <p class="title_first pb-4">
            <?= __('Parada lúdica 1') ?>
        </p>
    </div>
    <section class="container">
            <p class="h_green">
                <?= __('ATENCIÓN exploradores! ') ?>
                <i class="fa fa-smile-o"></i>
            </p>
            <p>
                <i class="fa fa-comment-o"></i>
                <?= __('En esta etapa los Exploradores deberán observar con atención video que se mostrará a continuación. ') ?>
                <br>
                <?= __('El Jefe de Expedición realizará algunas preguntas al terminar…') ?>
                <br>
                <?= __('¡Los equipos que respondan correctamente ganarán Bikles!') ?>
                <b>
                    <?= __('No pierdas ningún detalle!') ?>
                </b>
            </p>
        <?php if ($admin) { ?>
            <p>
                <?= __('El Jefe de Expedición seguirá las instrucciones al pie del vídeo para lanzar la pregunta en el momento adecuado') ?>
            </p>
        <?php } ?>
        <?php if ($admin) { ?>
            <div class="my-4 text-right">
                <button  id="anterior" type="button" class="btn btn-primary"><?= __('Anterior') ?></button>
                <button  id="siguiente" type="button" class="btn btn-primary"><?= __('Pasar al vídeo') ?></button>
            </div>
        <?php } ?>
    </section>
</main>

<script>
    var page = 151;
    $(function () {
<?php if ($admin) { ?>


            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page16"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page15"
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

