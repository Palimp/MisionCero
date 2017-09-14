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
    <header class="mb-5">
        <div class="text-center">
            <img src="img/logo_m0_es_sm.svg" alt="">
        </div>
    </header>
    <section>
        <p>Misión cero ¿por qué?</p>
        <p class="fs22">Las empresas suelen plantearse problemáticas y necesidades de manera muy genérica</p>
        <img src="img/img1.jpg" alt="" class="float-right">
        <div>
            <p>Por ejemplo:</p>
            <ul style="line-height: 3rem;">
                <li>
                    Tengo un problema de comunicación interna
                </li>
                <li>
                    Tengo que integrar a los millenials
                </li>
                <li>
                    Quiero reducir costes
                </li>
                <li>
                    Quiero relanzar mi producto
                </li>
                <li>
                    Tengo que optimizar mi logística
                </li>
                <li>
                    Quiero impulsar la transformación digital
                </li>
                <li>
                    Quiero entrar en un nuevo mercado
                </li>
                <li>
                    Tengo que adaptar la estructura de ventas al nuevo entorno
                </li>
                <li>
                    …
                </li>
            </ul>
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

                    if (data === page) {
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

