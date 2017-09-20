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
        <?= $this->Html->image("breadp45.svg", ['class' => 'w-100']); ?>
    </header>
    <section>
        <p class="fs22">
            En la siguiente página podrán leer una problemática de una empresa
        </p>
        <p>
            Deberán elegir qué reto (pregunta) piensan les ayudará mejor para cumplir lo que se pide
        </p>
        <div class="text-center mt-5">
            <div class="alert alert-danger d-inline-block" role="alert">
                ¡Se distribuirán Bikles en función de si eligen las preguntas que pueden abrir vías nuevas para cumplir lo que se pide! (según el criterio de Binnakle...)
            </div>
        </div>

    </section>
    <?php if ($admin) { ?>
        <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
        <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Siguiente') ?></button>
    <?php } ?>
</main>

<script>
    var page = 28;
    $(function () {
<?php if ($admin) { ?>


            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page29"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page27"
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

