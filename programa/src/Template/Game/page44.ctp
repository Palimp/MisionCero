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
        <?= $this->Html->image("breadp63.svg", ['class' => 'img-fluid mx-auto d-block head-img']); ?>
    </header>
    <div class="title_wrap text-center">
      <span class="title">
        <?=__('Problemática: '.$trouble)?>
      </span>
    </div>
    <section class="container">
            <p class="h_green">
                <i class="fa fa-lightbulb-o fa-lg"></i>
                <?= __('Introducir retos basados en momentos claves y en ') ?><i><?= __('pain points') ?></i>
            </p>
            <div class="clock-c">
                <i class="fa fa-clock-o mr-2"></i><time>13'</time>
            </div>
            <p>
                <?= __('Para ello, procederán en 3 fases:') ?>
                <br>
                <?=__('Identificar momentos claves con clientes internos/externos, usuarios/consumidores, otros actores claves en relación en nuestra problemática. Introducirlos en la columna izquierda.')?>
            </p>
            <p>
              <?=__('Después, para cada uno de estos momentos, listar los ') ?><i><?= __('pain points ') ?></i><?= __('(puntos dolorosos): puntos críticos o problemas. Introducir estos ') ?><i><?= __('pain points ') ?></i><?= __('en la segunda columna.') ?><br>
                  <?= __('Se puede introducir más de un ') ?><i><?= __('pain point ') ?></i><?= __('por interracción.')?>
            </p>
            <p>
                <?=__('Para acabar, lo más importante: transformar los ') ?><i><?= __('pain points ') ?></i><?= __('en retos (¿Cómo…?). Introducir los retos en la tercera columna.') ?><br>
                <?= __('Pueden introducir más de un reto por pain point')?>
            </p>

            <div class="text-center mt-5">
                <div class="alert alert_bikles d-inline-block" role="alert">
                    <img src="/img/bikles.png" class="float-left mr-3 img-fluid" alt="">
                    <?= __('Escribe el máximo de retos posibles.') ?>
                    </br>
                    <?= __('¡Los equipos') ?>
                    <b>
                        <?= __('ganarán o perderán Bikles!') ?>
                    </b>
                </div>
            </div>
            <div class="text-center">
                <?= __('El Jefe de Expedición, puede ampliar, reducir o pausar el tiempo desde su cronómetro.') ?>
                <h1><time id="clock" class="clock-b"><?= $time ?></time></h1>
                <?php
                echo $this->Form->create('Begin', array(
                    'url' => array('controller' => 'Game', 'action' => 'page44'), 'class' => 'd-inline-block'
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
                        'url' => array('controller' => 'Game', 'action' => 'page44'), 'class' => 'd-inline-block'
                    ));
                    ?>
                    <input type="hidden" name="stop" value="1">
                    <button class="btn btn-primary"><?= __('Parar tiempo') ?></button>
                    <?php
                } else {
                    echo $this->Form->create('Begin', array(
                        'url' => array('controller' => 'Game', 'action' => 'page44'), 'class' => 'd-inline-block'
                    ));
                    ?>
                    <input type="hidden" name="start" value="1">
                    <button class="btn btn-primary"><?= __('Activar tiempo') ?></button>
                <?php } ?>

                </form>
                <button id="finalizar" class="btn btn-primary"><?= __('Finalizar tiempo') ?></button>

                <?php
                echo $this->Form->create('Begin', array(
                    'url' => array('controller' => 'Game', 'action' => 'page44'), 'class' => 'd-inline-block'
                ));
                ?>
                <input type="hidden" name="time" value="-30">
                <a href="#" onclick="$(this).closest('form').submit()" data-toggle="tooltip" title="<?= ('Haz click para restar tiempo') ?>" class="d-inline-block btn btn-primary btn-green">
                    <i class="fa fa-minus"></i><time> 00:30</time>
                </a>
                </form>
            </div>


            <div class="col">
                <!-- Button trigger modal_ex5 -->
                <a href="#" data-toggle="modal" data-target="#modal_ex5" class="grey_link">
                    <i class="fa fa-file-text-o fa-2x example_ic mr-3 mr-2"></i>
                    <div class="fs12 d-inline-block"><?= __('click aquí para') ?><br><?= __(' ver ejemplo') ?></div>
                </a>
            </div>
            
            <div>
                <div id="modal_ex5" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal_ex5LiveLabel" style="display: none;" aria-hidden="true">
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
                                        <?=__('Para la Etapa 4, algunos ejemplos de ')?><i><?=__('retos basados en momentos clave y en pain points')?></i> <?=__(' podrían ser:')?> 
                                </p>


                                <table class="reduced table table-striped">
                                   <thead class="text-center">
                                      <tr>
                                         <th class="fs22 fw100 w30" style="position: relative;">
                                            <span><?=__('1') ?></span>
                                            <br>
                                            <i class="fa fa-chevron-right " style="right: -1.2rem; position: absolute;  bottom: 2.7rem;"></i>
                                            <?=__('INTERACCIONES') ?>
                                         </th>
                                         <th class="fs22 fw100 w30" style="position: relative;">
                                            <span><?=__('2') ?></span>
                                            <br>
                                            <i class="fa fa-chevron-right " style="right: -1.2rem; position: absolute;  bottom: 2.7rem;"></i>
                                            <?=__('PAINPOINTS') ?>
                                         </th>
                                         <th class="green fs22 fw100 w30" style="position: relative;">
                                            <span><?=__('3') ?></span>
                                            <br>
                                            <?=__('RETOS') ?>
                                         </th>
                                      </tr>
                                   </thead>
                                   <tbody class="fs16">
                                      <tr>
                                         <td scope="row" rowspan="2"><?=__('Hay algo que comunicar') ?></td>
                                         <td rowspan="2"><?=__('No se puede decir todo') ?></td>
                                         <td class="green"><?=__('¿Cómo comunicar cuando no se puede decir todo?') ?>
                                         </td>
                                      </tr>
                                      <tr>
                                         
                                         
                                         <td class="green"><?=__('¿Cómo conseguir que la gente entienda que no se puede decir todo?') ?>
                                         </td>
                                      </tr>
                                      <tr>
                                         <td><?=__('Hay algo que comunicar') ?></td>
                                         <td><?=__('No es una buena noticia') ?>
                                         </td>
                                         <td class="green"><?=__('¿Cómo comunicar malas noticias?') ?>
                                         </td>
                                      </tr>
                                      <tr>
                                         <td scope="row"><?=__('Se envía la comunicación') ?>
                                         </td>
                                         <td><?=__('No todos tienen mail') ?>
                                         </td>
                                         <td class="green"><?=__('¿Cómo hacer llegar la comunicación al mismo tiempo a los que no tienen mail?') ?>
                                         </td>
                                      </tr>
                                      <tr>
                                         <td><?=__('Se envía la comunicación') ?>
                                         </td>
                                         <td><?=__('Algunos se han enterado antes') ?></td>
                                         <td class="green"><?=__('¿Cómo comunicar cuando algunos ya se han enterado por otra vía?') ?></td>
                                      </tr>
                                      <tr>
                                         <td rowspan="2"><?=__('Se envía la comunicación') ?>
                                         </td>
                                         <td rowspan="2"><?=__('Hay rumores') ?></td>
                                         <td class="green"><?=__('¿Cómo comunicar cuando ha habido rumores?') ?></td>
                                      </tr>
                                      <tr>
                                         <td class="green"><?=__('¿Cómo comunicar antes de que haya rumores?') ?></td>
                                      </tr>
                                      <tr>
                                         <td><?=__('Se recibe la comunicación') ?></td>
                                         <td><?=__('Hay malentendidos') ?></td>
                                         <td class="green"><?=__('¿Cómo asegurarse de que no habrán malentendidos?') ?></td>
                                      </tr>
                                      <tr>
                                         <td><?=__('Se recibe la comunicación') ?></td>
                                         <td><?=__('La gente ni siquiera la abre') ?></td>
                                         <td class="green"><?=__('¿Cómo conseguir que la gente tenga ganas de abrirla?') ?></td>
                                      </tr>
                                      <tr>
                                         <td rowspan="2"><?=__('Se habla de la comunicación') ?></td>
                                         <td rowspan="2"><?=__('Hay comentarios negativos') ?></td>
                                         <td class="green"><?=__('¿Cómo contrarrestar los comentarios negativos?') ?></td>
                                      </tr>
                                      <tr>
                                         <td class="green"><?=__('¿Cómo conseguir que los comentarios negativos no hagan daño?') ?></td>
                                      </tr>
                                   </tbody>
                                </table>

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        
      <?php if ($admin) { ?>
          <div class="my-4 text-right">
              <button  id="anterior" type="button" class="btn btn-primary"><?= __('Anterior') ?></button>
              <button  id="siguiente" type="button" class="btn btn-primary"><?= __('Continuar Etapa 4') ?></button>
          </div>
      <?php } ?>
    </section>
</main>
<script>
    var page = 44;
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

