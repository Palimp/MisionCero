<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
echo $this->element('navbar');
?>

<main class="text-center">
    <p class="title_first py-4"><?= __('El reto de la partida') ?></p>
    <header class="title_black py-2">
        <span><?= $game->trouble ?></span>
    </header>
    <div class="title_wrap">
        <span class="title">
            <?= ($game->active) ? __('Partida empezada') : __('Partida sin empezar') ?>
        </span>
    </div>
    <?php
    echo $this->Form->create('Begin', array(
        'url' => array('controller' => 'Build', 'action' => 'estado'),
    ));
    ?>
    <input type="hidden" name="begin" value="<?=$game->active?>"/>
    <button type="submit" class="btn btn-primary mb-2"><?= ($game->active) ? __('Detener partida') : __('Empezar partida') ?></button>
    </form>
    <section class="container">
        <p class="fs26"><?= __('Equipos') ?></p>
        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th><?= __('Número') ?></th>
                    <th><?= __('Equipo') ?></th>
                    <th><?= __('Miembros') ?></th>
                    <th><?= __('Estado') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($teams as $team) {
                    ?>
                    <tr>
                        <td><?= $team->team ?></td>
                        <td><?= $team->name ?></td>
                        <td><?= $team->members ?></td>
                        <td><?= $team->taken ? __("Cogido") : __("Libre") ?></td>

                    </tr>
                <?php } ?>
            </tbody>
        </table>
          <?php
        echo $this->Form->create('Teams', array(
            'url' => array('controller' => 'Build', 'action' => 'estado'),
        ));
        ?>
        <button type="submit" class="btn btn-primary mb-2"><?= __('Desbloquear equipos') ?></button>
        <p class="fs22"><?= __('Al desbloquear los equipos todos tendrán que volver a seleccionarlos') ?></p>
        <input type="hidden" name="ok" value="1">
        </form>
    </section>
</main>
