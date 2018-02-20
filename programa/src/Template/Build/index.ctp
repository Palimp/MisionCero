<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
echo $this->element('navbar');
?>

<main>
    <section style="background-color: #E3E3E3;">
        <div class="container py-5">
            <p>
                <?= __('Cada equipo podrá ganar o perder Bikles, la moneda de la expedición, en cada etapa, en función de 4 criterios: la cantidad de contenido generado, la calidad de estos contenidos, el ingenio en las paradas lúdicas y ... ¡la suerte que siempre tiene un papel en las aventuras!') ?>
                </br>
                </br>
                <?= __('Como Jefe de Expedición, puedes formar los equipos antes de la partida y así tener todo preparado.') ?>
                </br>
                </br>
                <?= __('Si no dispones todavía de toda la información para formar los equipos, no te preocupes porque lo podrás hacer al inicio de la partida con los Exploradores (jugadores). En este caso, pulsa abajo en “Crear equipos más tarde”') ?>
                </br>
                </br>
                <?= __('Si quieres formar los equipos ahora pulsa en ”Crear equipos”') ?>
            </p><?php
            echo $this->Html->link(
                    __('Crear equipos'), ['controller' => 'Build', 'action' => 'teams'], ['class' => 'btn btn-primary']);
            echo $this->Html->link(
                    __('Crear equipos más adelante'), ['controller' => 'Build', 'action' => 'landing'], ['class' => 'btn btn-primary']);
            ?>
            


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

