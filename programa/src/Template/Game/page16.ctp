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
        <?= $this->Html->image("breadp28.svg", ['class' => 'img-fluid']); ?>
    </header>
    <section>
        <div class="d-flex align-items-end flex-column fs32 mb-5">


            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="<?= $url ?>" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="text-center mt-5">


                <?php if ($admin) { ?>
                    <!-- ONLY GM -->
                    <div>
                        <?= __('Pide a los Exploradores que observen con atención el siguiente vídeo') ?>
                        </br>
                        <b>
                            <?= __('Pausa el vídeo en el segundo 40') ?>
                        </b>
                        </br>
                        <?= __(' y pregunta si ha pasado algo') ?>
                        <ul>
                            <li>
                                <b>
                                    <?= __('Ganará 2 Bikles el primer equipo que haya detectado que algo en el decorado ha cambiado') ?>
                                </b>
                            </li>
                            <li>
                                <b>
                                    <?= __('Ganará 4 Bikles el primer equipo capaz de citar elementos que han cambiado') ?>
                                </b>
                            </li>
                        </ul>
                        <i><?= __('Si ningún equipo es capaz de decir que algo ha cambiado, puedes ayudar preguntando ¿habéis visto algún cambio? Y puedes dar ') ?><b><?= __('2 Bikles al primer equipo capaz de citar elementos que han cambiado') ?></b></i>
                    </div>
                    <!-- ONLY GM -->

                <?php } else { ?>
                    <!-- ONLY PLAYER -->
                    <div class="alert alert-danger d-inline-block" role="alert">
                        <b>
                            <?= __('¡Observar bien el video!') ?>
                        </b>
                        </br>
                        <?= __('El Jefe de Expedición hará preguntas al acabar…') ?>
                    </div>
                    <!-- ONLY PLAYER -->
                <?php } ?>
            </div>
    </section>
</section>
<?php if ($admin) { ?>
    <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
    <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Siguiente') ?></button>
    <button  id="otro" type="button" class="btn btn-primary mb-10"><?= __('Otro vídeo') ?></button>
<?php } ?>
</main>

<script>
    var page = 16;
    $(function () {
<?php if ($admin) { ?>

            $('#otro').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page16"
    ])
    ?>';
            });
            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page17"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page15"
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

