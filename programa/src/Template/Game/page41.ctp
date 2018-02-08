<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
if ($admin) {
    echo $this->element('navbar');
}
?>
<main>
    <header>
        <?= $this->Html->image("breadp60.svg", ['class' => 'img-fluid']); ?>
    </header>
    <section class="container text-center">
        <p class="title_first mt-3 pb-2">
            <?= __('Parada lúdica 3') ?>
        </p>
        <p class="h_green">
            <?= __('2 equipos trabajan juntos: ') ?>
        </p>
        <div class="clock-c">
            <i class="fa fa-clock-o mr-2"></i><time>2'</time>
        </div>
        <p>
            <b><?= __('Fase 1-') ?></b>
            </br> 
            <?= __('Los equipos tienen 2 minutos para preparar la venta del objeto al otro equipo') ?>
            </br>
            <?= __('Finalizado el tiempo, un equipo dispondrá de 2 minutos para convencer al segundo equipo que le compre su objeto. El segundo equipo comunicará al Jefe de Expedición si le ha convencido la presentación.') ?> 
            </br>
            </br>
            <b><?= __('Fase 2-') ?></b>
            </br>
            <?= __('Los equipos intercambian los roles: el equipo 2 presenta al equipo 1') ?>
            </br>
            </br>
        </p>
        <p>
            <b><?= __('Prepara la venta: ¡El objeto no puede servir para su uso habitual!') ?></b>
        </p>
        <div>
            <h1><time id="clock" class="clock-b"><?= $time ?></time></h1>
            <?php
            echo $this->Form->create('Begin', array(
                'url' => array('controller' => 'Game', 'action' => 'page41'), 'class' => 'd-inline-block'
            ));
            ?>
            <input type="hidden" name="time" value="30">
            <a href="#" onclick="$(this).closest('form').submit()" data-toggle="tooltip" title="<?= ('Haz click para añadir tiempo') ?>" class="d-inline-block btn btn-primary btn-red">
                <i class="fa fa-plus"></i><time> 00:30</time>
            </a>
            </form>
            <?php
            if ($stop) {
                echo $this->Form->create('Begin', array(
                    'url' => array('controller' => 'Game', 'action' => 'page41'), 'class' => 'd-inline-block'
                ));
                ?>
                <input type="hidden" name="stop" value="1">
                <button class="btn btn-primary"><?= __('Parar tiempo') ?></button>
                <?php
            } else {
                echo $this->Form->create('Begin', array(
                    'url' => array('controller' => 'Game', 'action' => 'page41'), 'class' => 'd-inline-block'
                ));
                ?>
                <input type="hidden" name="start" value="1">
                <button class="btn btn-primary"><?= __('Activar tiempo') ?></button>
            <?php } ?>

            </form>
            <button id="finalizar" class="btn btn-primary"><?= __('Finalizar tiempo') ?></button>

            <?php
            echo $this->Form->create('Begin', array(
                'url' => array('controller' => 'Game', 'action' => 'page41'), 'class' => 'd-inline-block'
            ));
            ?>
            <input type="hidden" name="time" value="-30">
            <a href="#" onclick="$(this).closest('form').submit()" data-toggle="tooltip" title="<?= ('Haz click para restar tiempo') ?>" class="d-inline-block btn btn-primary btn-green">
                <i class="fa fa-minus"></i><time> 00:30</time>
            </a>
            </form>
        </div>

        <div class="mt-4">
            <!-- <p class="f22 green"><?= __('Para cada objeto sus limitaciones') ?></p> -->

            <?= $this->Html->image($image, ['class' => 'img-fluid']); ?>


        </div>
        <?php if ($admin) { ?>

            <div class="mt-5">
                <div class="alert alert_bikles d-inline-block" role="alert">
                    <img src="/img/bikles.jpg" class="float-left mr-3 img-fluid" alt="">
                    
                    <p><?= __('El Jefe de Expedición distribuirá Bikles:') ?></p>
                    <b>
                        <?= __('- Si la venta ha sido neutra, no ganarán ni perderán Bikles') ?>
                    </b>
                    </br>
                    <b>
                        <?= __('- Perderán 2 bikles los equipos que no hayan convencido en absoluto al equipo rival') ?>
                    </b>
                    </br>
                    <b>
                        <?= __('- Ganarán 2 Bikles los equipos capaces de convencer al equipo rival') ?>
                    </b>
                    </br>
                    <p>
                        <?= __('Apunta los Bikles ganados o perdidos por cada equipo: los distribuirás en la siguiente pantalla') ?>
                    </p>
                </div>
            </div>
              <div class="my-4 text-right">
                  <button  id="anterior" type="button" class="btn btn-primary"><?= __('Anterior') ?></button>
                  <button  id="siguiente" type="button" class="btn btn-primary"><?= __('Seguir etapa') ?></button>
                  <button  id="otro" type="button" class="btn btn-primary"><?= __('Cambiar de objeto') ?></button>
              </div>
          <?php } ?>
    </section>
</main>

<script>
    var page = 41;
    var stop =<?= $stop ?>;

    $(function () {
<?php if ($admin) { ?>
            $('#finalizar').click(function () {
                $('#siguiente').click();
            });
            setTimeout(checkTime, 1000);
            function checkTime() {

                $.get("<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "gettime"
    ])
    ?>", function (data, status) {
                    if (data != "0" && data != "00:00") {

                        $('#clock').html(data);
                        setTimeout(checkTime, 1000);
                    } else {

                        if (stop) {
                            alert("<?= __('Se acabó el tiempo') ?>");
                            location.href = '<?= $this->Url->build(["controller" => "Game", "action" => "page411"]) ?>';
                        }

                    }
                });
            }
            $('#otro').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page41"
    ])
    ?>';
            });
            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page411"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page401"
    ])
    ?>';
            });
<?php } ?>

    });
</script>

