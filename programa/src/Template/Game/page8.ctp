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
        <?= $this->Html->image("breadp15.svg", ['class' => 'img-fluid']); ?>
    </header>
    <section>
        <div class="col-12 col-md-auto">
            <h4>
                <?=__('Problemática: '.$trouble)?>
            </h4>
            <p class="fs22 green">
                <?= __('Comentarios espontáneos más relevantes sobre nuestra problemática:') ?>
            </p>
            <p>
                <?= __('Los equipos tienen 10 minutos para introducir todos los comentarios posibles.') ?><br>
                <b><?= __('¡Los equipos con más comentarios ganarán Bikles, y los equipos con menos comentarios perderán Bikles!') ?></b>
            </p>
        </div>
        <div class="col fs32">
            <div class="d-flex align-items-end flex-column">
                <div>
                    <?=__('Como Jefe de Expedición, puedes ampliar, reducir o pausar el tiempo desde tu cronómetro.')?>
                    <h1><time id="clock"><?= $time ?></time></h1>
                    <i class="fa fa-clock-o"></i>
                    <?php
                    if ($stop) {
                        echo $this->Form->create('Begin', array(
                            'url' => array('controller' => 'Game', 'action' => 'page8'), 'class' => 'd-inline-block'
                        ));
                        ?>
                        <input type="hidden" name="stop" value="1">
                        <button class="btn btn-primary"><?= __('Parar tiempo')?></button>
                        <?php
                    } else {
                        echo $this->Form->create('Begin', array(
                            'url' => array('controller' => 'Game', 'action' => 'page8'), 'class' => 'd-inline-block'
                        ));
                        ?>
                        <input type="hidden" name="start" value="1">
                        <button class="btn btn-primary"><?= __('Reanudar tiempo')?></button>
                    <?php } ?>

                    </form>
                </div>
                <div>
                    <time>00:30</time>
                    <?php
                    echo $this->Form->create('Begin', array(
                        'url' => array('controller' => 'Game', 'action' => 'page8'), 'class' => 'd-inline-block'
                    ));
                    ?>
                    <input type="hidden" name="time" value="30">
                    <a href="#" onclick="$(this).closest('form').submit()" data-toggle="tooltip" title="<?=('Haz click para añadir tiempo')?>" class="d-inline-block grey_link">
                        <i class="fa fa-plus"></i>
                    </a>
                    </form>
                    <?php
                    echo $this->Form->create('Begin', array(
                        'url' => array('controller' => 'Game', 'action' => 'page8'), 'class' => 'd-inline-block'
                    ));
                    ?>
                    <input type="hidden" name="time" value="-30">
                    <a href="#" onclick="$(this).closest('form').submit()" data-toggle="tooltip" title="<?=('Haz click para restar tiempo')?>" class="d-inline-block grey_link">
                        <i class="fa fa-minus"></i>
                    </a>
                    </form>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <div class="alert alert-danger d-inline-block" role="alert">
                <b>
                    <?=__('¡Ganarán Bikles los equipos con más comentarios!')?>
                </b>
                </br>
                <?=__('¡Perderán Bikles los equipos con menos comentarios!')?>
            </div>
        </div>
        <p>
            <?=__('Cuando todos los equipos hayan finalizado pulsa ”Continuar Etapa”')?>
        </p>
    </section>
    <?php if ($admin) { ?>
        <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
        <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Continuar Etapa 1') ?></button>
    <?php } ?>
</main>

<script>
    var page = 8;
    var stop =<?= $stop ?>;
    $(function () {
<?php if ($admin) { ?>

            setTimeout(checkTime, 500);
            function checkTime() {

                $.get("<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "gettime"
    ])
    ?>", function (data, status) {
                    if (data != "0" && data != "00:00") {
                        $('#clock').html(data);
                        setTimeout(checkTime, 500);
                    } else {
                        if (stop) {
                            alert("Se acabó el tiempo");
                            location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page9"
    ])
    ?>';
                        }
                    }
                });
            }
            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page9"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page7"
    ])
    ?>';
            });
<?php } ?>

    });
</script>

