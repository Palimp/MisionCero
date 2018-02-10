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

<main>
    <header>
        <?= $this->Html->image("breadp85.svg", ['class' => 'img-fluid']); ?>
    </header>
    <div class="title_wrap text-center">
        <span class="title">
            <?= __('Problemática: ' . $trouble) ?>
        </span>
    </div>
    <div class="text-center">
        <p class="title_first pb-4">
            <?= __('RESUMEN FINAL DE LA Binnakle Mission 0') ?>
        </p>
    </div>
    <section class="container">
        <div class="text-right">

            <?=
            $this->Html->link(
                    '<i class="fa fa-download"></i>', ['controller' => 'Game', 'action' => 'resumen.pdf'],
                    ['escape' => false,"class"=>"mr-2","data-toggle"=>"tooltip","title"=>"Haz click para descargar"]
            )
            ?>
            
            <p class="fs14">
<?= __('Descarga el resumen de la partida') ?>
            </p>
        </div>
        <p class="h_green">
<?= __('Tabla resumen de los retos') ?>
        </p>
        <article class="row mt-2">
            <div class="col mr-4 pz-4 t5_p">
                <h5 class><?= __('TOP 5 RETOS PRIORITARIOS') ?></h5>
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
                <h5><?= __('TOP 5 RETOS OPERATIVOS (QUICK WINS)') ?></h5>
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

<?php if ($admin) { ?>
            <div class="my-4 text-right">
                <button  id="anterior" type="button" class="btn btn-primary"><?= __('Anterior') ?></button>
                <button  id="siguiente" type="button" class="btn btn-primary"><?= __('Siguiente') ?></button>
            </div>
<?php } ?>
    </section>
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

    function save() {
        var htmlContent = ['<html><head>    <meta charset="utf-8"/> </head><body>' + $('section').html() + '</body></html>'];
        var bl = new Blob(htmlContent, {type: "text/html"});
        var a = document.createElement("a");
        a.href = URL.createObjectURL(bl);
        a.download = "top-retos.html";
        a.hidden = true;
        document.body.appendChild(a);
        a.innerHTML = "something random - nobody will see this, it doesn't matter what you put here";
        a.click();
    }
</script>

