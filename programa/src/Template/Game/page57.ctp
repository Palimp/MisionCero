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
        <?= $this->Html->image("breadp78.svg", ['class' => 'img-fluid']); ?>
    </header>
    <div class="title_wrap text-center">
      <span class="title">
        <?=__('Problemática: '.$trouble)?>
      </span>
    </div>
    <section class="container text-center">
        <p class="h_green">
            <i class="fa fa-lightbulb-o"></i>
            <?= __('Convertir en retos basados en estados de ánimo') ?>
        </p>
        <div class="clock-c">
            <i class="fa fa-clock-o mr-2"></i><time>5'</time>
        </div>
        <div>
            <?= __('El Jefe de Expedición, puede ampliar, reducir o pausar el tiempo desde su cronómetro.') ?>
            <h1><time id="clock" class="clock-b"><?= $time ?></time></h1>
            <?php
            echo $this->Form->create('Begin', array(
                'url' => array('controller' => 'Game', 'action' => 'page57'), 'class' => 'd-inline-block'
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
                    'url' => array('controller' => 'Game', 'action' => 'page57'), 'class' => 'd-inline-block'
                ));
                ?>
                <input type="hidden" name="stop" value="1">
                <button class="btn btn-primary"><?= __('Parar tiempo') ?></button>
                <?php
            } else {
                echo $this->Form->create('Begin', array(
                    'url' => array('controller' => 'Game', 'action' => 'page57'), 'class' => 'd-inline-block'
                ));
                ?>
                <input type="hidden" name="start" value="1">
                <button class="btn btn-primary"><?= __('Activar tiempo') ?></button>
            <?php } ?>

            </form>
            <button id="finalizar" class="btn btn-primary"><?= __('Finalizar tiempo') ?></button>

            <?php
            echo $this->Form->create('Begin', array(
                'url' => array('controller' => 'Game', 'action' => 'page57'), 'class' => 'd-inline-block'
            ));
            ?>
            <input type="hidden" name="time" value="-30">
            <a href="#" onclick="$(this).closest('form').submit()" data-toggle="tooltip" title="<?= ('Haz click para restar tiempo') ?>" class="d-inline-block btn btn-primary btn-green">
                <i class="fa fa-minus"></i><time> 00:30</time>
            </a>
            </form>
        </div>

        <div>
            <!-- Button trigger modal_ex6 -->
            <div class="py-3">
                <a href="#" data-toggle="modal" data-target="#modal_ex6" class="grey_link">
                    <i class="fa fa-file-text-o fa-2x example_ic mr-2"></i>
                    <div class="fs12 d-inline-block"><?= __('click aquí para') ?><br><?= __(' ver ejemplo') ?>
                    </div>
                </a>
             
            </div>
            <!-- modal_ex6 -->
            <div>
                <div id="modal_ex6" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal_ex6LiveLabel" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header align-items-start">
                                <div class="example row">
                                    <i class="fa fa-file-text-o fa-3x example_ic align-top col-1"></i>
                                    <div class="example_wrapper col mr-4">
                                        <div class="example_inner text-left py-3 px-4">
                                            <?=__('Siguiendo nuestra simulación de partida sobre la problemática ficticia ')?></br>
                                            <?=__('“¿Cómo podríamos mejorar la comunicación interna?”,')?></br>
                                            <?=__('aquí tienes ejemplos de contenidos que se podrían haber generado en este paso')?>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                        <?= __('Para la Etapa 5, algunos ejemplos de ') ?><i><?= __('retos basados en estados de ánimo') ?></i> <?= __(' podrían ser:') ?> 
                                </p>
                                <table class="reduced table table-striped">
                                    <thead class="text-center">
                                        <tr>
                                            <th class="fs22 fw100 w30" style="position: relative;">
                                                <i class="fa fa-chevron-right " style="right: -0.8rem;position: absolute;bottom: 1.1rem;"></i>

                                                <?= __('ESTADO DE ÁNIMO') ?> 
                                            </th>
                                            <th class="fs22 fw100 w30" style="position: relative;">
                                                <?= __('PAINPOINTS') ?> 
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="fs16">
                                        <tr>
                                            <td scope="row"><?= __(' Motivado') ?></td>
                                            <td><?= __('¿Cómo conseguir que todo el equipo tenga nuestro nivel de motivación?') ?></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2"><?= __('Enfadado') ?></td>
                                            <td><?= __('¿Cómo conseguir que el enfado no se comunique?') ?></td>
                                        </tr>
                                        <tr>
                                            <td><?= __('¿Cómo pasar cuanto antes del enfado a un ánimo más constructivo?') ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="row" rowspan="2"><?= __('Pesimista') ?></td>
                                            <td><?= __('¿Cómo conseguir transformar nuestro pesimismo en optimismo?') ?></td>
                                        </tr>
                                        <tr>
                                            <td><?= __(' ¿Cómo conseguir que sea un éxito a pesar de nuestro pesimismo?') ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <?php if ($admin) { ?>
          <div class="my-4 text-right">
              <button  id="anterior" type="button" class="btn btn-primary"><?= __('Anterior') ?></button>
              <button  id="siguiente" type="button" class="btn btn-primary"><?= __('Continuar Etapa 5') ?></button>
          </div>
      <?php } ?>
    </section>
</main>


<script>
    var page = 57;
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
                            location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page58"
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
        "action" => "page58"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page56"
    ])
    ?>';
            });
<?php } ?>

    });
</script>

