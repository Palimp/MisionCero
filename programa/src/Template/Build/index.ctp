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
            ?>
            <?php
            echo $this->Html->link(
                    __('“Siguiente”'), ['class' => 'btn btn-primary']);
            ?>
            <!-- ESTO VA EN OTRA PÁGINA -->

                <p>
                    <?= __('Para empezar la partida, los exploradores deberán acceder a la Misión 0 y seleccionar sus equipos:') ?>
                </p>
                <ul>
                    <li>
                        <?= __('Si has creado los equipos con anterioridad, sólo tienen que confirmar su nombre de equipo') ?>
                    </li>
                    <li>
                        <?= __('Si los equipos se van a formar el mismo día de la partida, cada equipo deberá:') ?>
                        <ol>
                            <li>
                                <?= __('Seleccionar el nombre del equipo con el que quieren jugar la Misión') ?>
                            </li>
                            <li>
                                <?= __('Introducir los nombres de los miembros del equipo, separados por comas') ?>
                            </li>
                        </ol>
                    </li>
                </ul>
                <p>
                    <?= __('¡Los Exploradores tendrán que ser rápidos en elegir con qué equipo quieren jugar la Misión, si no quieren que otro equipo rival se les adelante!') ?>
                </p>
                <p>
                    <?= __('Cuando todos los equipos hayan sido confirmados, aparecerá abajo “EMPEZAR PARTIDA”. ') ?>
                </p>

                <div>
                    <?php
                    if ($teams) {
                        echo $this->Html->link(
                                __('Empezar partida'), ['controller' => 'Build', 'action' => 'begin'], ['class' => 'btn btn-primary']);
                    }
                    ?>
                </div>
                <!-- end ESTO VA EN OTRA PÁGINA -->


                <!-- <div class="form-group">
                    <p class="fs26"><?= __('Menú de administración') ?></p>
        
                </div>
        
        
                <div>
                <?=
                $this->Html->link(
                        __('Introducir/Modificar problemática'), ['controller' => 'Build', 'action' => 'trouble']);
                ?>
                </div>
                <div>
                <?=
                $this->Html->link(
                        __('Crear equipos'), ['controller' => 'Build', 'action' => 'teams']);
                ?>
                </div>
                <div>
                <?php
                if ($teams) {
                    echo $this->Html->link(
                            __('Empezar partida'), ['controller' => 'Build', 'action' => 'begin']);
                }
                ?>
                </div> -->
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

