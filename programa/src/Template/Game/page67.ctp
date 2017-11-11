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
?>

<!-- ** pag p15 ** -->
<main>
    <header class="text-center m-5 mb-10">
        <?= $this->Html->image("breadp85.svg", ['class' => 'img-fluid']); ?>
    </header> 
    <section>

        <div class="text-right">
            <a href="#" class="mr-2"><i class="fa fa-download"></i></a>
            <a href="#" data-toggle="tooltip" title="Haz click para imprimir">
                <i class="fa fa-print"></i>
            </a>          
        </div>
        <p class="fs22">
            <?= __('Problemática inicial:') ?>
        </p>
        <h2 class="text-center green">
            <?= $trouble ?>
        </h2>
        <p class="fs22 mt-5">
            <?= __('Tabla resumen de los retos') ?>
        </p>
        <article class="row mt-2">
            <div class="col mr-4 pz-4 t5_p">
                <h4 class><?= __('TOP 5 RETOS PRIORITARIOS') ?></h4>
                <?php
                $cont = 0;
                $ant = 0;
                foreach ($ranking as $team) {
                    $cont++;
                    if ($cont <= 5 || $ant == $team['votes']) {
                        ?>
                        <p>                           <?= $team['question'] ?> </p>
                        <?php
                    }
                    if ($cont == 5) {
                        $ant = $team['votes'];
                    }
                }
                ?>
            </div>
            <div class="col ml-4 pz-4 t5_qw">
                <h4><?= __('TOP 5 RETOS OPERATIVOS (QUICK WINS)') ?></h4>
                <?php
                $cont = 0;
                $ant = 0;
                foreach ($quick as $team) {
                    $cont++;
                    if ($cont <= 5 || $ant == $team['votes']) {
                        ?>
                        <p>                           <?= $team['question'] ?> </p>
                        <?php
                    }
                    if ($cont == 5) {
                        $ant = $team['votes'];
                    }
                }
                ?>
            </div>
        </article>
    </section>





    <?php if ($admin) { ?>
        <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
        <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Siguiente') ?></button>
    <?php } ?>
</main>

<script>
    var page = 67;
    $(function () {
<?php if ($admin) { ?>


            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page68"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page66"
    ])
    ?>';
            });
<?php } else { ?>
            setTimeout(checkPage, 1000);

            function checkPage() {
                $.get("<?= $this->Url->build(["controller" => "Game", "action" => "pageactive"]) ?>", function (data, status) {

                    if (data == page) {
                        setTimeout(checkPage, 1000);
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

