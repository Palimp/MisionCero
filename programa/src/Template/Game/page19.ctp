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
            <h4>
                <?=__('Etapa 3- Preguntas básicas')?>
                <br>
                <?=__('Problemática: '.$trouble)?>
            </h4>
            <p class="fs22 green">
                <?=__('Utilizar las preguntas básicas para identificar retos más concretos y, si es posible, no habituales, sobre la problemática.')?>
            </p>
            <p class="fs22">
                <?=__('Pensar en las preguntas más básicas para identificar retos:')?>
            </p>
            <div class="row fs22 green">
                <div class="col">
                    <?=__('¿CUÁNDO?')?>
                </div>
                <div class="col">
                    <?=__('¿DÓNDE?')?>
                </div>
                <div class="col">
                    <?=__('¿CÓMO?')?>
                </div>
                <div class="col">
                    <?=__('¿QUIÉN?')?>
                </div>
            </div>
            <ul>
                <li>
                    <?=__('Paso 1- Pensar en momentos relevantes, lugares relevantes (de uso, de compra, donde ocurre…), formas de hacer las cosas, públicos objetivos (internos o externos)')?>
                </li>
                <li>
                    <?=__('Paso 2- Convertir estas respuestas en retos: ¿cómo podríamos…?')?>
                </li>
            </ul>
            <div class="row fs22 green">
                <div class="col">
                    <?=__('¿POR QUÉ?')?>
                </div>
                <div class="col">
                    <?=__('¿PARA QUÉ?')?>
                </div>
            </div>
            <ul>
                <li>
                    <?=__('Paso 1- Pensar en “¿por qué?/¿para qué?”  tenemos que trabajar este reto. Escribir estos “¿por qué?/¿para qué?” ')?>
                </li>
                <li>
                    <?=__('Paso 2- Convertirlos en reto: ¿Cómo podríamos…? ')?>
                </li>
            </ul>
        </section>
    </section>
</section>
<?php if ($admin) { ?>
    <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
    <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Iniciar Etapa 3') ?></button>
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

