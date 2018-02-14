<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
if ($admin) {
    echo $this->element('navbar');
}
?>
<main class="text-center">
    <header>
        <?= $this->Html->image("breadp74.svg", ['class' => 'img-fluid mx-auto d-block head-img']); ?>
    </header>
    <section class="container">
        <p class="title_first pb-4">
            <?= __('Parada lúdica 4') ?>
        </p>
        <p class="h_green">
            <?= __('Enigmas') ?>
        </p>
        <p>
            <i class="fa fa-comment-o"></i>
            <?= __('A continuación se presentaran unos enigmas') ?>
            <br>
            <?= __('Debes averiguar la respuesta correcta') ?>
            <br>
            <?= __('Si el equipo acierta, ganarás Bikles') ?>
        </p>
        <div class="col fs32">
            <div class="d-flex align-items-end flex-column">
                <div>
                    <h1><time id="clock"><?= $time ?></time></h1>
                    <i class="fa fa-clock-o"></i>
                    <?php
                    if ($admin) {
                        if ($stop) {
                            echo $this->Form->create('Begin', array(
                                'url' => array('controller' => 'Game', 'action' => 'page53'), 'class' => 'd-inline-block'
                            ));
                            ?>
                            <input type="hidden" name="stop" value="1">
                            <button class="btn btn-primary"><?= __('Parar tiempo') ?></button>
                            <?php
                        } else {
                            echo $this->Form->create('Begin', array(
                                'url' => array('controller' => 'Game', 'action' => 'page53'), 'class' => 'd-inline-block'
                            ));
                            ?>
                            <input type="hidden" name="start" value="1">
                            <button class="btn btn-primary"><?= __('Reanudar tiempo') ?></button>
                            <?php
                        }
                    }
                    ?>

                    </form>
                </div>
                <div>

                    <?php
                    if ($admin) {

                        echo $this->Form->create('Begin', array(
                            'url' => array('controller' => 'Game', 'action' => 'page53'), 'class' => 'd-inline-block'
                        ));
                        ?>
                        <input type="hidden" name="time" value="30">
                        <a href="#" onclick="$(this).closest('form').submit()" data-toggle="tooltip" title="<?= __('Haz click para añadir tiempo') ?>" class="d-inline-block grey_link">
                            <i class="fa fa-plus"></i>
                        </a>
                        </form>
                        <?php
                        echo $this->Form->create('Begin', array(
                            'url' => array('controller' => 'Game', 'action' => 'page53'), 'class' => 'd-inline-block'
                        ));
                        ?>
                        <input type="hidden" name="time" value="-30">
                        <a href="#" onclick="$(this).closest('form').submit()" data-toggle="tooltip" title="<?= __('Haz click para restar tiempo') ?>" class="d-inline-block grey_link">
                            <i class="fa fa-minus"></i>
                        </a>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>
        <p>
            <?= __('El primer equipo en marcar la solución correcta gana Bikles') ?>
            </br>
            </br>
            <b><?= __('Enigma') ?></b>
            </br>
            <?= __('¿Por qué lo llamamos el pantano de lo imposible?') ?>
        </p>
        <?php if ($admin) { ?>
            <p>
                <?= __('RESPUESTA CORRECTA: “pensar en el problema”') ?>
            </p>
            <p>
                <?= __('El Jefe de Expedición sumará 3 bikles al primer equipo que responda correctamente') ?>
            </p>
        <?php } ?>
        <div class="text-center">
            <blockquote class="w-50 fs26 m-auto">
             <b><?= __('Enigma') ?></b>
            </br>
            <?= $puzzle->puzzle ?>
            </blockquote>
        </div>

        <div class="text-center mt-5">
            <div class="alert alert_bikles d-inline-block" role="alert">
                <img src="/img/bikles.png" class="float-left mr-3 img-fluid" alt="">
                <?= __('¡3 Bikles para el primer equipo que da la respuesta correcta!') ?>
            </div>
        </div>
    </section>
</main>

<script>
    var page = 53;
    var stop =<?= $stop ?>;

    $(function () {


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
                        location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page54"
    ])
    ?>';
                    }
                }
            });
        }
<?php if ($admin) { ?>
            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page54"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page52"
    ])
    ?>';
            });
<?php } ?>

    });
</script>

