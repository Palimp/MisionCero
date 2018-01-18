<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
if ($admin) {
    echo $this->element('navbar');
}
?>

<!-- ** pag p15 ** -->
<main>
    <header class="text-center m-5 mb-10">
        <?= $this->Html->image("breadp60.svg", ['class' => 'img-fluid']); ?>
    </header>
    <section>
        <div class="row no-gutters mb-5">
            <div class="col-12 col-md-auto">



                <?php if ($admin) { ?>
                    <p class="fs22">
                        <?= __('2 equipos trabajan juntos: ') ?>
                    </p>
                    <p>
                        <b>Fase 1-</b>
                        </br>
                        Los equipos tienen 2 minutos para preparar la venta del objeto al otro equipo
                        </br>
                        Finalizado el tiempo, un equipo dispondrá de 2 minutos para convencer al segundo equipo que le compre su objeto. El segundo equipo comunicará al Jefe de Expedición si le ha convencido la presentación. 
                        </br>
                        </br>
                        <b><?= __('Fase 2-') ?></b>
                        </br>
                        Fase 2- Los equipos intercambian los roles: el equipo 2 presenta al equipo 1. 
                        </br>
                        </br>
                    </p>
                    <p class="fs22">
                        <b>Prepara la venta: ¡El objeto no puede servir para su uso habitual!</b>
                    </p>
                <?php } ?>
            </div>
            <div class="col fs32">
                <div class="d-flex align-items-end flex-column">
                    <div>
                        <h1><time id="clock"><?= $time ?></time></h1>
                        <i class="fa fa-clock-o"></i>
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
                            <button class="btn btn-primary"><?= __('Reanudar tiempo') ?></button>
                        <?php } ?>

                        </form>
                        <button id="finalizar" class="btn btn-primary"><?= __('Finalizar tiempo') ?></button>

                    </div>
                    <div>
                        <time>00:30</time>
                        <?php
                        echo $this->Form->create('Begin', array(
                            'url' => array('controller' => 'Game', 'action' => 'page41'), 'class' => 'd-inline-block'
                        ));
                        ?>
                        <input type="hidden" name="time" value="30">
                        <a href="#" onclick="$(this).closest('form').submit()" data-toggle="tooltip" title="<?= __('Haz click para añadir tiempo') ?>" class="d-inline-block grey_link">
                            <i class="fa fa-plus"></i>
                        </a>
                        </form>
                        <?php
                        echo $this->Form->create('Begin', array(
                            'url' => array('controller' => 'Game', 'action' => 'page41'), 'class' => 'd-inline-block'
                        ));
                        ?>
                        <input type="hidden" name="time" value="-30">
                        <a href="#" onclick="$(this).closest('form').submit()" data-toggle="tooltip" title="<?= __('Haz click para restar tiempo') ?>" class="d-inline-block grey_link">
                            <i class="fa fa-minus"></i>
                        </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <!-- <p class="f22 green"><?= __('Para cada objeto sus limitaciones') ?></p> -->

            <?= $this->Html->image($image, ['class' => 'img-fluid']); ?>


        </div>
    </section>
    <?php if ($admin) { ?>
        <div class="mt-5">
            <div class="alert alert-danger d-inline-block" role="alert">
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
                <b>
                    <?= __('Apunta los Bikles ganados o perdidos por cada equipo: los distribuirás en la siguiente pantalla') ?>
                </b>
            </div>
        </div>
        <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
        <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Seguir etapa') ?></button>
        <button  id="otro" type="button" class="btn btn-primary mb-10"><?= __('Cambiar de objeto') ?></button>

    <?php } ?>
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

