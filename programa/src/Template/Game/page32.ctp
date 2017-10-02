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
        <?= $this->Html->image("breadp49.svg", ['class' => 'w-100']); ?>
    </header>
    <section>
        <p class="fs22">
            <?=__('Pensar cómo los diferentes actores del tema, los Stakeholders, ven el problema desde su punto de vista')?>
        </p>
        <p>
            <?=__('Un cliente interno/externo, un competidor, un proveedor, un distribuidor, la administración, otro departamento, un usuario, la familia de un usuario...)')?>
        </p>

        <div class="text-center green fs26">
            <p>
                <?=__('¿cómo ven el reto desde su punto de vista?')?>
                </br>
                <i class="fa fa-chevron-down"></i>
                </br>
                <?=__('expresarlos en forma de reto:')?>
                </br>
                <em><?=__('¿cómo podríamos…?')?></em>
            </p>
        </div>

    </section>
    <?php if ($admin) { ?>
        <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
        <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Siguiente') ?></button>
    <?php } ?>
</main>

<script>
    var page = 32;
    $(function () {
<?php if ($admin) { ?>


            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page33"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page31"
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

