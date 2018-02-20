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
        
            <!-- ESTO VA EN OTRA PÁGINA -->

                <p>
                    <?= __('Ahora, espera que los equipos entren en la partida y:') ?>
                </p>
                <ul>
                    <li>
                        <?= __('en el caso de que hayas configurado previamente los equipos, simplemente confirmen el nombre de su equipo.') ?>
                    </li>
                    <li>
                        <?= __('si no se han configurado con anterioridad, cada equipo tiene que elegir un nombre de equipo y introducir los nombres de todos sus miembros') ?>
                    </li>
                </ul>
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
        }, 5000);
    </script>
    <?php
}
?>

