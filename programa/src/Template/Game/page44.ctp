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
        <?= $this->Html->image("breadp63.svg", ['class' => 'img-fluid']); ?>
    </header>
    <section>
        <div class="row no-gutters mb-5">
            <div class="col-12 col-md-auto">
                <h4>
                    <?=__('Problemática: ¿Cómo…?')?>
                </h4>
                <p class="fs22 green">
                    <?= __('Retos basados en momentos claves de interacción y en ') ?><i><?= __('pain points') ?></i>
                </p>
                <p>
                    <?= __('Los equipos tienen 10 minutos para introducir todos los retos posibles, basados en basados en los ') ?><i><?= __('pain points ') ?></i><?= __('identificados') ?><br>
                    <?= __('Para ello, procederán en 3 fases:') ?>
                </p>
            </div>
            <div class="col fs32">
                <div class="d-flex align-items-end flex-column">
                    <div>
                        <h1><time id="clock"><?= $time ?></time></h1>
                        <i class="fa fa-clock-o"></i>
                        <?php
                        if ($stop) {
                            echo $this->Form->create('Begin', array(
                                'url' => array('controller' => 'Game', 'action' => 'page44'), 'class' => 'd-inline-block'
                            ));
                            ?>
                            <input type="hidden" name="stop" value="1">
                            <button class="btn btn-primary"><?=__('Parar tiempo')?></button>
                            <?php
                        } else {
                            echo $this->Form->create('Begin', array(
                                'url' => array('controller' => 'Game', 'action' => 'page44'), 'class' => 'd-inline-block'
                            ));
                            ?>
                            <input type="hidden" name="start" value="1">
                            <button class="btn btn-primary"><?=__('Reanudar tiempo')?></button>
                        <?php } ?>

                        </form>
                    </div>
                    <div>
                        <time>00:30</time>
                        <?php
                        echo $this->Form->create('Begin', array(
                            'url' => array('controller' => 'Game', 'action' => 'page44'), 'class' => 'd-inline-block'
                        ));
                        ?>
                        <input type="hidden" name="time" value="30">
                        <a href="#" onclick="$(this).closest('form').submit()" data-toggle="tooltip" title="<?=__('Haz click para añadir tiempo')?>" class="d-inline-block grey_link">
                            <i class="fa fa-plus"></i>
                        </a>
                        </form>
                        <?php
                        echo $this->Form->create('Begin', array(
                            'url' => array('controller' => 'Game', 'action' => 'page44'), 'class' => 'd-inline-block'
                        ));
                        ?>
                        <input type="hidden" name="time" value="-30">
                        <a href="#" onclick="$(this).closest('form').submit()" data-toggle="tooltip" title="<?=__('Haz click para restar tiempo')?>" class="d-inline-block grey_link">
                            <i class="fa fa-minus"></i>
                        </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <?php if ($admin) { ?>
        <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
        <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Continuar Etapa 7') ?></button>
    <?php } ?>
</main>

<script>
    var page = 44;
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
                            alert("<?=__('Se acabó el tiempo')?>");
                            location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page45"
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
        "action" => "page45"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page430"
    ])
    ?>';
            });
<?php } ?>

    });
</script>

