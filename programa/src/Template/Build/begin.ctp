<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
echo $this->element('navbar');
?>

<main>
    <div class="text-center">
        <p class="title_first py-4"><?= __('El reto de la partida') ?></p>
        <header class="title_black py-2">
            <span><?= $trouble ?></span>
        </header>
        <div class="title_wrap">
            <span class="title">
                <?= __('Aquí tienes los datos de la partida:') ?>
            </span>
        </div>
    </div>
    <section class="text-center container">
        <?php
        echo $this->Form->create('Begin', array(
            'url' => array('controller' => 'Build', 'action' => 'begin'),
        ));
        ?>
        <p class="fs26"><?= __('Equipos') ?></p>

        <?php foreach ($teams as $team) {
            ?>
            <div>
                <b class="fs26"><?= $team[0] . "- " . $team[1] . " : " . $team[2] ?></b>
            </div>
        <?php } ?>
        <p class="fs22 mt-4"><?= __('Al empezar la partida ya no podrás editar los equipos ni la problemática. ¡Revisa todo bien!') ?></p>
        <p><?= __('Si necesitas modificar algo, puedes utilizar el MenÚ Jefe de Expedición arriba:') ?></p>
        <input type="hidden" name="ok" value="1">
        <button type="submit" class="btn btn-primary mb-10"><?= __('Empezar partida') ?></button>
        </form>



    </section>
</main>
