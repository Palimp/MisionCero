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
        <?= $this->Html->image("breadp49.svg", ['class' => 'img-fluid']); ?>
    </header>
    <div class="title_wrap text-center">
      <span class="title">
        <?=__('Problemática: '.$trouble)?>
      </span>
    </div>
    <section class="container text-center">
        <p class="h_green">
                <i class="fa fa-lightbulb-o"></i>
            <?= __('Introducir retos basados en actores') ?>
        </p>
        <div class="clock-c">
            <i class="fa fa-clock-o mr-2"></i><time>10'</time>
        </div>
        <p>
            <?= __('Cada equipo se pondrá en el punto de vista de varios de ellos (un cliente interno/externo, un competidor, un proveedor, un distribuidor, la administración, otro departamento, un usuario, la familia de un usuario...) para generar retos:') ?><br>
        <ol class="list-numbered">
            <li>
                <?= __('Pensar: ¿cómo ven el reto desde su punto de vista? ') ?>
            </li>
            <li>
                <?= __('Expresarlo en forma de reto:  ¿cómo…?') ?>
            </li>
        </ol>
        </p>

        <div>
            <?= __('El Jefe de Expedición, puede ampliar, reducir o pausar el tiempo desde su cronómetro.') ?>
            <h1><time id="clock" class="clock-b"><?= $time ?></time></h1>
            <?php
            echo $this->Form->create('Begin', array(
                'url' => array('controller' => 'Game', 'action' => 'page33'), 'class' => 'd-inline-block'
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
                    'url' => array('controller' => 'Game', 'action' => 'page33'), 'class' => 'd-inline-block'
                ));
                ?>
                <input type="hidden" name="stop" value="1">
                <button class="btn btn-primary"><?= __('Parar tiempo') ?></button>
                <?php
            } else {
                echo $this->Form->create('Begin', array(
                    'url' => array('controller' => 'Game', 'action' => 'page33'), 'class' => 'd-inline-block'
                ));
                ?>
                <input type="hidden" name="start" value="1">
                <button class="btn btn-primary"><?= __('Activar tiempo') ?></button>
            <?php } ?>

            </form>
            <button id="finalizar" class="btn btn-primary"><?= __('Finalizar tiempo') ?></button>

            <?php
            echo $this->Form->create('Begin', array(
                'url' => array('controller' => 'Game', 'action' => 'page33'), 'class' => 'd-inline-block'
            ));
            ?>
            <input type="hidden" name="time" value="-30">
            <a href="#" onclick="$(this).closest('form').submit()" data-toggle="tooltip" title="<?= ('Haz click para restar tiempo') ?>" class="d-inline-block btn btn-primary btn-green">
                <i class="fa fa-minus"></i><time> 00:30</time>
            </a>
            </form>
        </div>

        <div class="py-3">
          <a href="#" data-toggle="modal" data-target="#modal_ex4" class="grey_link">
            <i class="fa fa-file-text-o fa-2x example_ic mr-2"></i>
            <p class="fs12 d-inline-block"><?= __('click aquí para') ?><br><?= __(' ver ejemplo') ?>
            </p>
          </a>
        </div>
        <div id="modal_ex4" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal_ex4LiveLabel" style="display: none;" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header align-items-start">
                <div class="example row">
                    <i class="fa fa-file-text-o fa-3x example_ic align-top col-1"></i>
                    <div class="example_wrapper col mr-4">
                       <div class="example_inner text-left py-3 px-4">
                          <?=__('Siguiendo nuestra simulación de partida sobre la problemática ficticia ')?>
                          </br>
                          <?=__('“¿Cómo podríamos mejorar la comunicación interna?”,')?>
                          </br>
                          <?=__('aquí tienes ejemplos de contenidos que se podrían haber generado en este paso')?>
                    </div>
                  </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body text-center">
                <p>
                        <?=__('Para esta Etapa 3, algunos ejemplos de ')?><i><?=__('retos basados en puntos de vista')?></i> <?=__(' podrían ser:')?> 
                </p>
                <div>
                  <div class="row">
                    <div class="col">
                      <p class="fs26">
                        <b>
                          <?=__('Stakeholder')?>
                        </b>
                        </br>
                        <i class="fa fa-chevron-down"></i>
                        </br>
                            <?=__('reto visto desde su punto de vista')?>
                      </p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <p>
                        <i class="fa fa-shopping-cart fa-2x"></i>
                        </br>
                        <b>
                          <?=__('Mis clientes')?>
                        </b>
                        </br>
                        <i class="fa fa-chevron-down"></i>
                        </br>
                        <?=__('¿Cómo conseguir que mi comunicación ayude a la gente a conocer mejor a los clientes?')?>
                        </br>
                        </br>
                        <?=__('¿Cómo utilizar a mi comunicación interna para que los clientes nos conozcan mejor?')?>
                      </p>
                    </div>
                    <div class="col">
                      <p>
                        <i class="fa fa-user-o fa-2x"></i>
                        </br>
                        <b>
                          <?=__('Los jefes')?>
                        </b>
                        </br>
                        <i class="fa fa-chevron-down"></i>
                        </br>
                        <?=__('¿Cómo podríamos conseguir que los jefes ayuden a sus equipos a entender la comunicación?')?>
                        </br>
                        </br>
                        <?=__('¿Cómo podríamos informarles primero y que no digan nada hasta que sea oficial?')?>
                      </p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <p>
                        <i class="fa fa-handshake-o fa-2x"></i>
                        </br>
                        <b>
                          <?=__('Los responsables de comunicación')?>
                        </b>
                        </br>
                        <i class="fa fa-chevron-down"></i>
                        </br>
                        <?=__('¿Cómo podríamos conseguir que conozcan mejor los diferentes colectivos?')?>
                        </br>
                        </br>
                        <?=__('¿Cómo conseguir que formen a la gente en comunicación?')?>
                      </p>
                    </div>
                    <div class="col">
                      <p>
                        <i class="fa fa-crosshairs fa-2x"></i>
                        </br>
                        <b>
                          <?=__('El entorno de los trabajadores')?>
                        </b>
                        </br>
                        <i class="fa fa-chevron-down"></i>
                        </br>
                        </br>
                        <?=__('¿Cómo podríamos conseguir que parte de la comunicación corporativa pueda ayudar a mejorar nuestra imagen en el entorno?')?>
                      </p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <p>
                        <i class="fa fa-truck fa-2x"></i>
                        </br>
                        <?=__('Mis proveedores')?>
                        </br>
                        <i class="fa fa-chevron-down"></i>
                        </br>
                        <?=__('¿Cómo utilizar a mi comunicación interna para involucrar a los proveedores?')?>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="text-center">
            <div class="alert alert_bikles d-inline-block" role="alert">
                <img src="/img/bikles.jpg" class="float-left mr-3 img-fluid" alt="">
                <?= __('Escribe el máximo de retos posibles.') ?>
                </br>
                <?= __('¡Los equipos') ?>
                <b>
                    <?= __('ganarán o perderán Bikles!') ?>
                </b>
            </div>
        </div>
    
      <?php if ($admin) { ?>
          <div class="my-4 text-right">
              <button  id="anterior" type="button" class="btn btn-primary"><?= __('Anterior') ?></button>
              <button  id="siguiente" type="button" class="btn btn-primary"><?= __('Continuar a Etapa 3') ?></button>
          </div>
      <?php } ?>
    </section>
</main>

<script>
    var page = 33;
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
        "action" => "page34"
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
        "action" => "page34"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page32"
    ])
    ?>';
            });
<?php } ?>

    });
</script>

