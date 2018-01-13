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
    <section>
        <div class="fs22 alert d-inline-block" style="color: #fff;  background-color: #2b2b2b;  border-color: transparent;">
            <h4 style="color: #fff;">
                La metodología
            </h4>
        </div>
        <!-- <div class="py-20 mx-10neg">
            <?= $this->Html->image("imgp14.svg", ['class' => 'img-fluid']); ?>
        </div> -->

        <img src="/img/ruta.gif" class="rounded mx-auto d-block img-fluid" alt="">

        <div class="fs22 alert d-inline-block" style="color: #fff;  background-color: #2b2b2b;  border-color: transparent;">
            
            <ul style="list-style-type: bullet;">
                <li>
                    Partimos de una problemática inicial.
                </li>
                <li>
                    Los exploradores deberán superar 5 etapas en las que analizarán la problemática desde diferentes puntos de vista, para obtener retos concretos complementarios entre ellos.  
                </li>
                <li>
                    Entre las 5 etapas los equipos encontrarán paradas lúdicas en las también podrán ganar o perder Bikles, la moneda oficial de la expedición
                </li>
                <li>
                    Al finalizar la partida de Misión 0 se obtiene una lista de retos concretos, priorizados y clasificados por ámbito, que permitirá trabajar la problemática de manera concreta y enfocada, optimizando la búsqueda posterior de soluciones innovadoras .
                </li>
        </div>
    </section>
    <?php if ($admin) { ?>
        <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
        <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Siguiente') ?></button>
    <?php } ?>
</main>
</main>

<script>
    var page = 6;
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
        "action" => "page7"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page5"
    ])
    ?>';
            });
<?php } ?>

    });
</script>

