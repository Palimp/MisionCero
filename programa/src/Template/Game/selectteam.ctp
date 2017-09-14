<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
?>

<main>
    <header class="text-center m-5 mb-10">

        <?= $this->Html->image('breadp12.svg'); ?>
    </header>
    <section class="text-center">

        <p></p>
        <p class="fs26"><?= __('Seleccione su equipo') ?></p>
        <p class="fs26"><?= __('Equipos') ?></p>

        <?php foreach ($teams as $team) {
            ?>
            <div class="row mx-5 form-group">
                <div class="col">
                    <b class="fs26"><?= $team->team . "- " . $team->name . " : " . $team->members ?></b>
                </div>
                <?php
                if (!$team->taken) {
                    echo $this->Form->create('Begin', array(
                        'url' => array('controller' => 'Game', 'action' => 'selectteam'),
                    ));
                    ?>
                    <input type="hidden" name="team" value="<?= $team->team ?>">
                    <button type="submit" class="btn btn-primary mb-5"><?= __('Seleccionar equipo') ?></button>
                    </form>
                    <?php
                } else {
                    ?>
                    <p><?= __('Ya seleccionado') ?></p>
                    <?php
                }
                ?>
            </div>
        <?php } ?>
        <p class="fs26"><?= __('Al seleccionar su equipo quedará inhabilitado para el resto. ¡Revisa todo bien!') ?></p>




    </section>
</main>

<script>
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
                    location='<?=
$this->Url->build([
    "controller" => "Game",
    "action" => "index"
])
?>';
                }

            });

        }

        setTimeout(checkTeams, 500);
    });
</script>