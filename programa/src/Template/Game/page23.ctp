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
        <?= $this->Html->image("breadp331.svg", ['class' => 'img-fluid']); ?>
    </header>
    <div class="title_wrap text-center">
      <span class="title">
        <?=__('Problemática: '.$trouble)?>
      </span>
    </div>
    <section class="container text-center">
        <p class="green">
            <i class="fa fa-lightbulb-o"></i>
            <?= __('Seleccionar a qué ÁMBITO pertenece cada uno de los 3 retos seleccionados por el equipo.') ?>
            <br> <?= __('Los equipos tienen 2 minutos') ?>
        </p>
        <div>
            <?= __('El Jefe de Expedición, puede ampliar, reducir o pausar el tiempo desde su cronómetro.') ?>
            <h1><time id="clock" class="clock-b"><?= $time ?></time></h1>
            <?php
            echo $this->Form->create('Begin', array(
                'url' => array('controller' => 'Game', 'action' => 'page23'), 'class' => 'd-inline-block'
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
                    'url' => array('controller' => 'Game', 'action' => 'page23'), 'class' => 'd-inline-block'
                ));
                ?>
                <input type="hidden" name="stop" value="1">
                <button class="btn btn-primary"><?= __('Parar tiempo') ?></button>
                <?php
            } else {
                echo $this->Form->create('Begin', array(
                    'url' => array('controller' => 'Game', 'action' => 'page23'), 'class' => 'd-inline-block'
                ));
                ?>
                <input type="hidden" name="start" value="1">
                <button class="btn btn-primary"><?= __('Activar tiempo') ?></button>
            <?php } ?>

            </form>
            <button id="finalizar" class="btn btn-primary"><?= __('Finalizar tiempo') ?></button>

            <?php
            echo $this->Form->create('Begin', array(
                'url' => array('controller' => 'Game', 'action' => 'page23'), 'class' => 'd-inline-block'
            ));
            ?>
            <input type="hidden" name="time" value="-30">
            <a href="#" onclick="$(this).closest('form').submit()" data-toggle="tooltip" title="<?= ('Haz click para restar tiempo') ?>" class="d-inline-block btn btn-primary btn-green">
                <i class="fa fa-minus"></i><time> 00:30</time>
            </a>
            </form>
        </div>


      <?php if ($admin) { ?>
          <div class="my-4 text-right">
              <button  id="anterior" type="button" class="btn btn-primary"><?= __('Anterior') ?></button>
              <button  id="siguiente" type="button" class="btn btn-primary"><?= __('Continuar etapa 3') ?></button>
          </div>
      <?php } ?>
    </section>
</main>

<script>
    var page = 23;
    var stop =<?= $stop ?>;

    $(function () {
<?php if ($admin) { ?>
            $('#finalizar').click(function () {
                $('#siguiente').click();
            });
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
                            alert("<?= __('Se acabó el tiempo') ?>");
                            location.href = '<?= $this->Url->build(["controller" => "Game", "action" => "page24"]) ?>';
                        }
                    }
                });
            }
            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page24"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page22"
    ])
    ?>';
            });
<?php } ?>

    });
</script>

