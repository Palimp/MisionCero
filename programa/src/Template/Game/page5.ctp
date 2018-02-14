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
    <div class="text-center">
        <h4 class="title_alt"><?=__('Binnakle Mission 0 -¿Por qué?')?></h4>
    </div>
      <div style="margin: -0.5em;">
          <?= $this->Html->image("breadp12.svg", ['class' => 'img-fluid mx-auto d-block head-img']); ?>
      </div>
    <section class="container">
      <div class="fs22 text-center mb-4 mt-4">
        <?=__('Metodología') ?>
      </div>
        <div class="fs22">
            <ul class="circle">
              <li>
                  <?=__('Partimos de una problemática inicial.') ?>
              </li>
              <li>
                  <?=__('Los exploradores deberán superar 5 etapas en las que analizarán la problemática desde diferentes puntos de vista, para obtener retos concretos complementarios entre ellos.  ') ?>
              </li>
              <li>
                  <?=__('Entre las 5 etapas los equipos encontrarán paradas lúdicas en las también podrán ganar o perder Bikles, la moneda oficial de la expedición') ?>
              </li>
              <li>
                  <?=__('Al finalizar la partida de Misión 0 se obtiene una lista de retos concretos, priorizados y clasificados por ámbito, que permitirá trabajar la problemática de manera concreta y enfocada, optimizando la búsqueda posterior de soluciones innovadoras .') ?>
              </li>
            </ul>
        </div>
        <?php if ($admin) { ?>
            <div class="my-4 text-right">
                <button  id="anterior" type="button" class="btn btn-primary"><?= __('Anterior') ?></button>
                <button  id="siguiente" type="button" class="btn btn-primary"><?= __('Siguiente') ?></button>
            </div>
        <?php } ?>
      </section>
    </main>
<script>
    var page = 5;
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
        "action" => "page6"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page4"
    ])
    ?>';
            });
<?php } ?>

    });
</script>

