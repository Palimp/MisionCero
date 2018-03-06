<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */

function getSelect($names,$namesall){
    
$select='<select class="webmenu" name="name"  style="width:300px;">';
 
for ($i = 0; $i < count($names); $i++) {
     $select.='<option  value="'.$i.'"  title="/img/exp'. sprintf('%02d', array_search($names[$i],$namesall)+1).'.png">'.$names[$i] .'</option>';
                    
                }
$select.='</select>';
return $select;
}


?>

<main class="text-center">
    <p class="title_first py-4">
        <?= __('Bienvenido a Misión 0, Explorador') ?>
    </p>
    <div class="title_band py-2 mb-3">
        <?= __('¡Competiremos por equipos!') ?>
    </div>

    <section class="container">

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
        <p><?= __('Si tu Jefe de Expedición ha formado los equipos con antelación, solo tienes que confirmar cuál es tu equipo pulsando “seleccionar equipo” al lado de tu equipo.')?>
            <br>
            <?= __('Aparecerá “Equipo seleccionado” y el equipo estará listo para esperar las instrucciones del Jefe de Expedición (¡no debes pulsar “guardar equipo abajo!)')?>
        </p>
        <p><?= __('Si no es el caso y los Exploradores forman ahora sus equipos, deberás seleccionar un nombre de equipo (¡no pierdas tiempo porque si otro equipo se adelanta y elije el nombre que querías deberás escoger otro!)  e indicar los nombres de todos sus miembros, separados por comas (¡importante!)')?>
            <br>
            <?= __('Una vez acabado, no te olvides de pulsar en “guardar equipo” para que el Jefe de Expedición pueda iniciar la partida')?>
            <br>
            <?= __('Si te has equivocado al introducir tu equipo puedes cambiarlo seleccionando otro nombre de explorador y añadiendo de nuevo los nombres de los participantes.')?>
        </p>

        <div class="row text-left">
            <div class="col pl-4">
                <p class="fs22 pl-2">
                    Equipo
                </p>

            </div>
            <div class="col-8 pl-0">
                <p class="fs22">
                    Jugadores
                </p>


            </div>
        </div>
        <?php
        echo $this->Form->create('Teams', array(
            'url' => array('controller' => 'Game', 'action' => 'selectteam'),
            "id" => 'team'
        ));
        ?>
        <div class="row bloque">
            <div class="col">

                <div class="d-inline">
                    <?php
                    
                    echo getSelect($names,$namesall);
                    ?>


                </div>
            </div>
            <div class="col-8">

                <div class="row form-group">
                    <div class="col pl-0">
                        <input name="member"  type="text" class="form-control" placeholder="Nombre de los jugadores separados por comas" >
                        <input name="names" type="hidden" value='<?= json_encode($names) ?>'>
                    </div>
                    <div class="col-12 col-md-auto">
                        <button type="submit" id="saveteam" class="btn btn-primary mb-10"><?= __('Guardar equipo') ?></button>
                    </div>
                </div>

            </div>
        </div>
        </form>


    </section>
</main>

<script>
    $(function () {
        $(".webmenu").msDropDown();

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
                    location = '<?=
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
