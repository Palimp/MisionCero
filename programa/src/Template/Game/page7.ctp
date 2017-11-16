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
        <?= $this->Html->image("breadp15.svg", ['class' => 'img-fluid']); ?>
    </header>
    <section>
        <h4>
            <?=__('Etapa 1- Insights espontáneos')?><br><?=__('Problemática inicial: ¿Cómo…?')?>
        </h4>
        <p class="fs22 green">
            <?=__('¿Cómo hablamos de la problemática de manera espontánea e informal?')?>
        </p>
        <p>
            <i class="fa fa-lightbulb-o"></i>
            <?=__('Pensar en los comentarios internos más habituales sobre la problemática, positivos o negativos, expresados de forma natural')?>
        </p>
        <ul>
            <li>
                <i class="fa fa-comment-o"></i>
                <?=__('Es lo que se comenta en reuniones, en la máquina del café…')?>
            </li>
            <li>
                <i class="fa fa-comment-o"></i>
                <?=__('También pueden servir quejas de clientes o usuarios')?>
            </li>
        </ul>
        <ul class="green">
            <li>
                <?=__('Lo que no funciona es…')?>
            </li>
            <li>
                <?=__('Lo que deberíamos solucionar es…')?>
            </li>
            <li>
                <?=__('¿Por qué no hacemos…?')?>
            </li>
            <li>
                <?=__('etc')?>
            </li>
        </ul>
    </section>
    <?php if ($admin) { ?>
        <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
        <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Iniciar etapa 1') ?></button>
    <?php } ?>
</main>

<script>
    var page = 7;
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
        "action" => "page8"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page6"
    ])
    ?>';
            });
<?php } ?>

    });
</script>

