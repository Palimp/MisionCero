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
                <p class="fs22">
                    <?=__('Los equipos disponen de 3’ para pensar cómo vender el objeto de la foto al otro equipo')?>
                </p>
                <p>
                    <b>Fase 1:')?></b>
                    <?=__('Se dividen los equipos en 2')?>
                    </br>
                    <?=__('- la mitad tendrá que tratar de vender el objeto que aparece en la foto (¡teniendo en cuenta la observación que incluye!)')?>
                    </br>
                    <?=__('- los otros equipos escucharán la presentación de sus compañeros e indicarán al final si les han convencido')?>
                    </br>
                    </br>
                    <b><?=__('Fase 2:')?></b>
                    <?=__('se repite el proceso: los equipos que escucharón ahora presentan y vice versa')?>
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
                                'url' => array('controller' => 'Game', 'action' => 'page36'), 'class' => 'd-inline-block'
                            ));
                            ?>
                            <input type="hidden" name="stop" value="1">
                            <button class="btn btn-primary"><?=__('Parar tiempo')?></button>
                            <?php
                        } else {
                            echo $this->Form->create('Begin', array(
                                'url' => array('controller' => 'Game', 'action' => 'page36'), 'class' => 'd-inline-block'
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
                            'url' => array('controller' => 'Game', 'action' => 'page36'), 'class' => 'd-inline-block'
                        ));
                        ?>
                        <input type="hidden" name="time" value="30">
                        <a href="#" onclick="$(this).closest('form').submit()" data-toggle="tooltip" title="<?=__('Haz click para añadir tiempo')?>" class="d-inline-block grey_link">
                            <i class="fa fa-plus"></i>
                        </a>
                        </form>
                        <?php
                        echo $this->Form->create('Begin', array(
                            'url' => array('controller' => 'Game', 'action' => 'page36'), 'class' => 'd-inline-block'
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
        <div class="text-center">
            <img class="img-fluid" style="width: 720px; height: 400px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22771%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20771%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15ddcba636d%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A39pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15ddcba636d%22%3E%3Crect%20width%3D%22771%22%20height%3D%22250%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22285.7421875%22%20y%3D%22143%22%3E771x250%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
        </div>
        <div class="text-center mt-5">
            <div class="alert alert-danger d-inline-block" role="alert">
                <b>
                    <?=__('nos han convencido + 2 Bikles')?>
                </b>
                </br><?=__(' neutro 0 Bikles')?>
                </br><?=__(' no nos convence nada - 2 Bikles')?>
            </div>
        </div>
    </section>
    <?php if ($admin) { ?>
        <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
        <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Acabar fase') ?></button>
    <?php } ?>
</main>

<script>
    var page = 41;
    $(function () {
<?php if ($admin) { ?>

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

                        alert("<?=__('Se acabó el tiempo')?>");
                        location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page42"
    ])
    ?>';
                    }
                });
            }
            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page42"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page40"
    ])
    ?>';
            });
<?php } ?>

    });
</script>

