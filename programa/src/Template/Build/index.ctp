<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
echo $this->element('navbar');
?>

<main>
    <header class="text-center mb-10" style="padding-top: 10rem;">
        <div>
            <img src="img/logo_binnakle_es.png" alt="">
        </div>
        <div>
            <img src="img/logo_m0_es.svg" alt="">
        </div>
    </header>
    <section class="text-center">

        <div class="form-group">
            <p class="fs26"><?= __('Menú de administración') ?></p>

        </div>

        <!-- Button trigger modals -->

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

