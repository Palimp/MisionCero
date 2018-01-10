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
                    <?=__('Problemática: '.$trouble)?>
                </h4>
                <p class="fs22 green">
                    <?= __('Retos basados en momentos claves de interacción y en ') ?><i><?= __('pain points') ?></i>
                </p>
                <p>
                    <?= __('Los equipos tienen 10 minutos para introducir todos los retos posibles, basados en basados en los ') ?><i><?= __('pain points ') ?></i><?= __('identificados') ?><br>
                    <?= __('Para ello, procederán en 3 fases:') ?>
                </p>

                <p>
                    <?=__('Identificar momentos claves de interacción con clientes internos/externos, usuarios/consumidores, otros actores claves en relación en nuestra problemática. Introducirlos en la columna izquierda.')?>
                <p>
                </p>
                <?=__('Después, para cada uno de estos momentos, listar los ') ?><i><?= __('pain points ') ?></i><?= __('(puntos dolorosos): puntos críticos o problemas. Introducir estos ') ?><i><?= __('pain points ') ?></i><?= __('en la segunda columna.') ?><br>
                    <?= __('Se puede introducir más de un ') ?><i><?= __('pain point ') ?></i><?= __('por interracción.')?>
                </p>
                <p>
                    <?=__('Para acabar, lo más importante: transformar los ') ?><i><?= __('pain points ') ?></i><?= __('en retos (¿Cómo…?). Introducir los retos en la tercera columna.') ?><br>
                    <?= __('Pueden introducir más de un reto por pain point')?>
                </p>
            </div>
            <div class="text-center mt-5">
                <div class="alert alert-danger d-inline-block" role="alert">
                    <?=__('¡Los equipos con más retos ganarán Bikles, y los equipos con menos retos perderán Bikles!')?>
                </div>
            </div>
            <?php if ($admin) { ?>
                <p>
                    Como Jefe de Expedición, puedes ampliar, reducir o pausar el tiempo desde tu cronómetro.
                    <br>
                    Cuando todos los equipos hayan finalizado pulsa ”Continuar Etapa”
                </p>  
            <?php } ?>
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

            <div class="col">
                <!-- Button trigger modal_ex5 -->
                <a href="#" data-toggle="modal" data-target="#modal_ex5" class="grey_link">
                    <i class="fa fa-wpforms fa-2x example_ic mr-3 pull-left"></i>
                    <p class="fs12"><?= __('click aquí para') ?><br><?= __(' ver ejemplo') ?>
                    </p>
                </a>
            </div>
            
            <div>
                <div id="modal_ex5" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal_ex5LiveLabel" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header align-items-start">
                                <div class="example fs26">
                                    <i class="fa fa-wpforms fa-3x example_ic align-top mr-3"></i>
                                    <div class="example_wrapper d-inline-block">
                                        <div class="example_inner text-left py-3 px-4">
                                            <b><?=__('Siguiendo nuestra simulación de partida sobre la problemática ficticia ')?></b>
                                            <?=__('“¿Cómo podríamos mejorar la comunicación interna?”,')?>
                                            <b><?=__('aquí tienes ejemplos de contenidos que se podrían haber generado en este paso')?></b>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    <b>
                                        <?=__('Para la Etapa 7, algunos ejemplos de ')?><i><?=__('retos basados en momentos clave de interacción y en pain points')?></i> <?=__(' podrían ser:')?> 
                                    </b>
                                </p>
                                <table class="table table-striped">
                                    <thead class="text-center">
                                        <tr>
                                            <th class="fs32 fw100 w30" style="position: relative;">
                                                <span>1</span>
                                                <br>
                                                <i class="fa fa-chevron-right fa-2x" style="right: -1.6rem; position: absolute;  bottom: 1.6rem;"></i>
                                                INTERACCIONES
                                            </th>
                                            <th class="fs32 fw100 w30" style="position: relative;">
                                                <span>2</span>
                                                <br>
                                                <i class="fa fa-chevron-right fa-2x" style="right: -1.6rem; position: absolute;  bottom: 1.6rem;"></i>
                                                PAINPOINTS
                                            </th>
                                            <th class="green fs32 fw100 w30" style="position: relative;">
                                                <span>3</span>
                                                <br>
                                                RETOS
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="fs16">
                                        <tr>
                                            <td scope="row" class="align-top" rowspan="3">
                                                Hay algo que comunicar
                                            </td>
                                            <td rowspan="2">No se puede decir todo
                                            </td>
                                            <td class="green">¿Cómo comunicar cuando no se puede decir todo?
                                            </td>
                                        </tr>
                                        <tr>

                                            <td class="green">¿Cómo conseguir que la gente entienda que no se puede decir todo?
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>No es una buena noticia
                                            </td>
                                            <td class="green">¿Cómo comunicar malas noticias?
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row" class="align-top" rowspan="4">Se envía la comunicación
                                            </td>
                                            <td>No todos tienen mail
                                            </td>
                                            <td class="green">¿Cómo hacer llegar la comunicación al mismo tiempo a los que no tienen mail?
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Algunos se han enterado antes</td>
                                            <td class="green">¿Cómo comunicar cuando algunos ya se han enterado por otra vía?</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2">Hay rumores</td>
                                            <td class="green">¿Cómo comunicar cuando ha habido rumores?</td>
                                        </tr>
                                        <tr>
                                            <td class="green">¿Cómo comunicar antes de que haya rumores?</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="3">Se recibe la comunicación</td>
                                            <td rowspan="2">Hay malentendidos</td>
                                            <td class="green">¿Cómo asegurarse de que no habrán malentendidos?</td>
                                        </tr>
                                        <tr>
                                            <td class="green"> ¿Cómo enterarse de los malentendidos para poder contrarrestarlos?</td>
                                        </tr>
                                        <tr>
                                            <td>La gente ni siquiera la abre</td>
                                            <td class="green">¿Cómo conseguir que la gente tenga ganas de abrirla?</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2">Se habla de la comunicación</td>
                                            <td rowspan="2">Hay comentarios negativos</td>
                                            <td class="green">¿Cómo contrarrestar los comentarios negativos?</td>
                                        </tr>
                                        <tr>
                                            <td class="green">¿Cómo conseguir que los comentarios negativos no hagan daño?</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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

