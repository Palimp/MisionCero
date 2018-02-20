<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
echo $this->element('navbar');
?>

<main>
    <section>
        <div class="container py-5">
            <div class="text-center">
                <div class="alert alert_bikles d-inline-block" role="alert">
                    <img src="/img/bikles.png" class="float-left mr-3 img-fluid" alt="">
                    <?= __('Cada equipo podrá ganar o perder Bikles, la moneda de la expedición, en cada etapa, en función de 4 criterios: la cantidad de contenido generado, la calidad de estos contenidos, el ingenio en las paradas lúdicas y ... ¡la suerte que siempre tiene un papel en las aventuras!') ?>
                </div>
            </div>
            <p>
                <?= __('Si no dispones de toda la información para formar los equipos ahora no te preocupes porque podrás hacerlo al inicio de la partida con los Exploradores (jugadores), o en cualquier momento desde el Menú del Jefe de Expedición.') ?>
                </br>
                </br>
                <?= __('Si quieres formar los equipos ahora pulsa en ”Crear equipos”. En caso contrario, pulsa “Siguiente”') ?>
            </p><?php
            echo $this->Html->link(
                    __('Crear equipos'), ['controller' => 'Build', 'action' => 'teams'], ['class' => 'btn btn-primary']);
            echo $this->Html->link(
                    __('Siguiente'), ['controller' => 'Build', 'action' => 'landing'], ['class' => 'btn btn-primary']);
            ?>

        </div>
    </section>

</main>
<?php
if (!$teams) {
    ?>
    <script>
        setTimeout(function () {
            location.reload()
        }, 30000);
    </script>
    <?php
}
?>

