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
    <section>
        <header class="text-center m-5 mb-10">

            <?= $this->Html->image("breadp33.svg", ['class' => 'w-100']); ?>
        </header>
        <section>
            <p class="fs22">
                <?=__('¿Cómo mejorar mi comunicación interna?')?>
            </p>
            <p>
                <?=__('Utilizar las preguntas básicas para identificar retos más concretos y, si es posible, no habituales, sobre la problemática.')?>
            </p>
            <p class="fs22">
                <?=__('Pensar en las preguntas más básicas para identificar retos:')?>
            </p>
            <div class="row fs22">
                <div class="col">
                    <?=__('¿Cuándo?')?>
                </div>
                <div class="col">
                    <?=__('¿Dónde?')?>
                </div>
                <div class="col">
                    <?=__('¿Cómo?')?>
                </div>
                <div class="col">
                    <?=__('¿Quién?')?>
                </div>
            </div>
            <ol class="green">
                <li>
                    <?=__('estas preguntas nos hacen pensar en identificar: momentos relevantes, lugares de uso o compra, maneras de hacer las cossas, públicos objetivos,')?>
                </li>
                <li>
                    <?=__('los transformamos en forma de reto ')?><em><?=__('¿cómo podríamos…?')?></em>
                </li>
            </ol>
            <div class="row fs22">
                <div class="col">
                    <?=__('¿Por qué?')?>
                </div>
                <div class="col">
                    <?=__('¿Para qué?')?>
                </div>
            </div>
            <ol class="green">
                <li>
                    <?=__('pensamos en “por qué / para qué tenemos que trabajar este reto?” y escribimos estos porqués/ para qués')?>
                </li>
                <li>
                    <?=__('los transformamos en forma de reto ')?><em><?=__('¿cómo podríamos…?')?></em>
                </li>
            </ol>
        </section>
    </section>
</section>
<?php if ($admin) { ?>
    <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
    <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Siguiente') ?></button>
<?php } ?>
</main>

<script>
    var page = 19;
    $(function () {
<?php if ($admin) { ?>


            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page20"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page18"
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

