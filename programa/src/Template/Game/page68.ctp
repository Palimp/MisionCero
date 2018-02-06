<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
if ($admin) {
    echo $this->element('navbar');
}
$ambits[-1] = new \stdClass();
$ambits[-1]->ambit = __('Sin ámbito');
$max = 0;
foreach ($retos as $reto) {
    if (count($reto) > $max) {
        $max = count($reto);
    }
}
$colors = ['ebfa94', 'f3ed48', 'f2e500', 'e5da00', 'd1d600', 'bcca00', 'a1c41f', 'ebfa94', 'f2e500', 'd1d600', 'a1c41f'];
?>
<main>
    <header>
        <?= $this->Html->image("breadp85.svg", ['class' => 'img-fluid']); ?>
    </header>
    <div class="title_wrap text-center">
      <span class="title">
        <?=__('Problemática: '.$trouble)?>
      </span>
    </div>
    <div class="text-center">
        <p class="title_first pb-4">
            <?=__('RESUMEN FINAL DE LA Binnakle Mission 0')?>
        </p>
    </div>
    <section class="container">

        <div class="text-right">
            <a href="#" class="mr-2" data-toggle="tooltip" title="<?=__('Haz click para descargar')?>"><i class="fa fa-download"></i></a>
            <a href="#" data-toggle="tooltip" title="Haz click para imprimir">
                <i class="fa fa-print"></i>
            </a>
            <p class="fs14">
                <?= __('Descarga o imprime el resumen de la partida') ?>
            </p>
        </div>

        <article>
            <p class="h_green">
                Ámbitos
            </p>
            <div id="accordion_a" role="tablist" aria-multiselectable="true">
                <?php
                for ($i = 0; $i <= 10; $i++) {
                    ?>
                    <?php if (isset($retos[$i])) { ?>
                        <div class="card">
                            <div class="progressa" role="tab" id="h_a<?= $i ?>">
                                <a data-toggle="collapse" data-parent="#accordion_a" href="#c_a<?= $i ?>" aria-expanded="true" aria-controls="c_a<?= $i ?>" class="w-100">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="<?= count($retos[$i]) * 100 / $max ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= count($retos[$i]) * 100 / $max ?>%; background-color: #<?= $colors[$i] ?>;">
                                        <p class="mb-0">
                                            <?= $ambits[$i - 1]->ambit ?>
                                        </p>
                                    </div>
                                </a>
                            </div>

                            <div id="c_a<?= $i ?>" class="collapse" role="tabpanel" aria-labelledby="h_a<?= $i ?>">
                                <div class="card-block">
                                    <?php
                                    foreach ($retos[$i] as $reto) {
                                        ?>
                                        <p>
                                            <?= $reto ?>
                                        </p>
                                    <?php } ?>


                                </div>
                            </div>
                        </div>
                    <?php } ?>

                <?php } ?>
            </div>
        </article>

      <?php if ($admin) { ?>
          <div class="my-4 text-right">
              <button  id="anterior" type="button" class="btn btn-primary"><?= __('Anterior') ?></button>
              <button  id="siguiente" type="button" class="btn btn-primary"><?= __('Siguiente') ?></button>
          </div>
      <?php } ?>
    </section>
</main>

<script>
    var page = 68;
    $(function () {
<?php if ($admin) { ?>
            $('#siguiente').click(function () {
                location.href = '<?= $this->Url->build(["controller" => "Game", "action" => "page69"]) ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?= $this->Url->build(["controller" => "Game", "action" => "page67"]) ?>';
            });
<?php } else { ?>
            setTimeout(checkPage, 1000);

            function checkPage() {
                $.get("<?= $this->Url->build(["controller" => "Game", "action" => "pageactive"]) ?>", function (data, status) {

                    if (data == page) {
                        setTimeout(checkPage, 1000);
                    } else {
                        location.href = '<?= $this->Url->build(["controller" => "Game", "action" => "index"]) ?>';
                    }

                });

            }
<?php } ?>
    });
</script>

