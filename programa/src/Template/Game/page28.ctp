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

        <h4>
            Etapa 2- Parada lúdica
        </h4>
        <p class="fs22 green">
            ATENCIÓN exploradores! <i class="fa fa-smile-o"></i><br>
        </p>
        <p>
            <i class="fa fa-lightbulb-o"></i>
            En esta etapa los Exploradores deberán observar con atención video que se mostrará a continuación.<br> 
            El Jefe de Expedición realizará algunas preguntas al terminar…<br>
            ¡Los equipos que respondan correctamente ganarán Bikles!
        </p>
        <ul>
            <li>
                <i class="fa fa-comment-o"></i>
                No pierdas ningún detalle!
            </li>
        </ul>

        <p>
            <b>¡Los equipos con más comentarios ganarán Bikles, y los equipos con menos comentarios perderán Bikles!
        </p>
        <p>
            Sigue las instrucciones al pie del video para pausar y lanzar la pregunta en el momento adecuado
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

