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
    <section class="container">
        <div class="fs22 text-center py-4">
            <?=__('Se organizan multitud de reuniones para tratar estas problemáticas, pero…')?>
        </div>
        <div class="row">
            <div class="col-7">
                <p>
                    <?=__('Trabajar sobre temas tan genéricos no ayuda a generar soluciones nuevas, especialmente si son temas recurrentes sobre los que ya hemos trabajado con anterioridad')?>
                </p>
                <?= $this->Html->image("img2.jpg", ['class' => 'img-fluid']); ?>
            </div>
            <div class="col-5 pl-5">
                <p>
                    <?=__('Las reuniones suelen convertirse en tertulias y debates sin un output concreto')?>
                </p>
                <?= $this->Html->image("img3.jpg", ['class' => 'img-fluid']); ?>
            </div>
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
    var page = 2;
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
        "action" => "page3"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page1"
    ])
    ?>';
            });
<?php } ?>
          
    });
</script>

