<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 *  */
if ($admin) {
    echo $this->element('navbar');
}
?>
<main>
    <div class="text-center mb-5">
        <p class="message success fs26 py-4">
            <?=__('LA PARTIDA HA EMPEZADO')?>
        </p>
        <h4 class="title_alt"><?=__('Misión 0 -¿Por qué?')?></h4>
    </div>
    <section class="container">
        <div class="fs22 text-center">
            <?=__('¡Ganarán Bikles los equipos con más votos!')?>
        </div>
        <div class="text-center mb-4">
            <b>
                <?=__('Las empresas suelen plantearse problemáticas y necesidades de manera muy genérica')?>
            </b>
        </div>
        <div class="row">
            <div class="col">
                <p><?=__('Por ejemplo:')?></p>
                <ul class="list-green" style="line-height: 3rem;">
                    <li>
                        <?=__('Tengo un problema de comunicación interna')?>
                    </li>
                    <li>
                        <?=__('Tengo que integrar a los millenials')?>
                    </li>
                    <li>
                        <?=__('Quiero reducir costes')?>
                    </li>
                    <li>
                        <?=__('Quiero relanzar mi producto')?>
                    </li>
                    <li>
                        <?=__('Tengo que optimizar mi logística')?>
                    </li>
                    <li>
                        <?=__('Quiero impulsar la transformación digital')?>
                    </li>
                    <li>
                        <?=__('Quiero entrar en un nuevo mercado')?>
                    </li>
                    <li>
                        <?=__('Tengo que adaptar la estructura de ventas al nuevo entorno')?>
                    </li>
                </ul>
            </div>
            <div class="col">
                <?= $this->Html->image("img1.jpg", ['class' => 'img-fluid']); ?>
            </div>
        </div>
        <?php if ($admin) { ?>
            <button style="display:none" id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Siguiente') ?></button>
        <?php } ?>
    </section>
</main>

<script>
    var page = 1;
<?php if ($admin) { ?>
        $(function () {

            function checkTeams() {
                $.get("<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "teamsok"
    ])
    ?>", function (data, status) {

                    if (data == 0) {
                        setTimeout(checkTeams, 500);
                    } else {
                        $('#siguiente').show();
                        $('#siguiente').click(function () {
                            location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page2"
    ])
    ?>';
                        });
                    }

                });

            }

            setTimeout(checkTeams, 500);
        });
    <?php
} else {
    ?>
        $(function () {

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

            setTimeout(checkPage, 500);
        });
    <?php
}
?>
</script>

