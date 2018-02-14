<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
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
                <i class="fa fa-lightbulb-o"></i>
                <?= __('Introducir retos basados en momentos claves y en ') ?><i><?= __('pain points') ?></i>
            </p>
            <div class="clock-c">
                <i class="fa fa-clock-o mr-2"></i><time>10'</time>
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

        <div class="col fs32">
            <div class="d-flex align-items-end flex-column">
                <div>
                    <h1><time id="clock"><?= $time ?></time></h1>
                    <i class="fa fa-clock-o"></i>

                </div>

            </div>
        </div>
        <table class="table table-striped">
            <thead class="text-center">
                <tr>
                    <th class="fs22 fw100" style="position: relative;">
                        <span>1</span>
                        </br>
                        <i class="fa fa-chevron-right " style="right: -1.2rem; position: absolute;  bottom: 2.7rem;"></i>
                        <?= __('INTERACCIONES') ?>
                    </th>
                    <th class="fs22 fw100" style="position: relative;">
                        <span>2</span>
                        </br>
                        <i class="fa fa-chfa-2xevron-right " style="right: -1.2rem; position: absolute;  bottom: 2.7rem;"></i>
                        <?= __('PAINPOINTS') ?>
                    </th>
                    <th class="green fs22 fw100" style="position: relative;">
                        <span>3</span>
                        </br>
                        <?= __('RETOS') ?>
                    </th>
                </tr>
            </thead>
            <tbody class="fs16">
                <tr>
                    <td scope="row" class="align-top">
                        <i><?= __('Hay algo que comunicar') ?></i>
                    </td>
                    <td>
                        <i><?= __('Los cambios no se explican bien') ?></i>
                    </td>
                    <td class="green">
                        <i><?= __('¿cómo explicar mejor los cambios?') ?></i>
                    </td>
                </tr>
                <?php
                foreach ($comments as $comment) {
                    foreach ($comment->pain as $pain) {
                        ?>
                        <tr id="pain<?= $pain->id ?>"><td> <b><?= $comment->question ?></b></td><td><?= $pain->question ?><a href="#" id="delete<?= $pain->id ?>" onclick="delPain(<?= $pain->id ?>)" data-toggle="tooltip" title="<?= __('Haz click para borrar un momento clave') ?>" class="d-inline-block pull-right"><i class="fa fa-close fa-2x"></i></a></td><td>
                                <?php
                                foreach ($pain->ppchan as $chan) {
                                    ?>
                                    <div id="<?= $chan->id ?>"> <b><?= $chan->question ?></b><a href="#" id="delcha<?= $chan->id ?>" onclick="delPpcha(<?= $chan->id ?>)" data-toggle="tooltip" title="<?= __('Haz click para borrar un reto') ?>" class="d-inline-block pull-right"><i class="fa fa-close fa-2x"></i></a></div>
                                    <?php
                                }
                                ?>
                            </td></tr>
                        <?php
                    }
                }
                ?>
                <tr>
                    <td scope="row" class="align-top">
                        <input type="text" id="inter" class="form-control d-inline-block" placeholder="<?= __('Introduce aquí un momento clave') ?>" >
                        <a id="addinter" href="#" data-toggle="tooltip" title="<?= __('Haz click para añadir un momento clave') ?>" class="d-inline-block">
                            <i class="fa fa-plus fa-2x"></i>
                        </a>
                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                </tr>
            </tbody>
        </table>


        <div class="row justify-content-between mt-5 w-100">
            <div class="col">
                <!-- Button trigger modal_ex5 -->
                <a href="#" data-toggle="modal" data-target="#modal_ex5" class="grey_link">
                    <i class="fa fa-file-text-o fa-2x example_ic mr-3 mr-2"></i>
                    <div class="fs12 d-inline-block"><?= __('click aquí para') ?><br><?= __(' ver ejemplo') ?></div>
                </a>
            </div>

        </div>
        <div class="text-center mt-5">
            <div class="alert alert_bikles d-inline-block" role="alert">
                <img src="/img/bikles.png" class="float-left mr-3 img-fluid" alt="">
                <?= __('Escribe el máximo de comentarios posibles.') ?>
                </br>
                <?= __('¡Los equipos') ?>
                <b>
                    <?= __('ganarán o perderán Bikles!') ?>
                </b>
            </div>
        </div>
        <div class="col">
            <!-- Button trigger modal_ex5 -->
            <a href="#" data-toggle="modal" data-target="#modal_ex5" class="grey_link">
                <i class="fa fa-file-text-o fa-2x example_ic mr-3 mr-2"></i>
                <div class="fs12 d-inline-block"><?= __('click aquí para') ?><br><?= __(' ver ejemplo') ?>
                </div>
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
    </section>
</main>

<script>
    var page = 44;
    var inter = '<tr><td scope="row" class="align-top"><input type="text" id="inter" class="form-control" placeholder="<?= __('Introduce aquí un momento clave') ?>"><a id="addinter" href="#" data-toggle="tooltip" title="<?= __('Haz click para añadir un momento clave') ?>" class="d-inline-block"><i class="fa fa-plus fa-2x"></i></a></td><td></td><td></td></tr>';
    var pain = '<input id="pain" type="text" class="form-control form-group" placeholder="<?= __('Introduce aquí el painpoint') ?>"><a id="addpain" href="#" data-toggle="tooltip" title="<?= __('Haz click para añadir un momento clave') ?>" class="d-inline-block"><i class="fa fa-plus fa-2x"></i></a>';
    var ppcha = '<input id="ppcha" type="text" class="form-control form-group" placeholder="<?= __('Introduce aquí un reto') ?>"><a id="addppcha" href="#" data-toggle="tooltip" title="<?= __('Haz click para añadir un momento clave') ?>" class="d-inline-block"><i class="fa fa-plus fa-2x"></i></a>';
    function delPpcha(id) {
        $.get("<?=
                                        $this->Url->build([
                                            "controller" => "Game",
                                            "action" => "deleteppcha"
                                        ])
                                        ?>", {'id': id}, function (data, status) {
            if (status == 'success') {

                $('#' + id).remove();
            }
        });
    }
    function delPain(id) {
        $.get("<?=
                                        $this->Url->build([
                                            "controller" => "Game",
                                            "action" => "deletepain"
                                        ])
                                        ?>", {'id': id}, function (data, status) {
            console.log(data);
            if (status == 'success') {

                $('#pain' + id).remove();
            }
        });
    }
    $(function () {
<?php if (!$admin) { ?>

            $('#addinter').click(function () {
                $('#addinter').attr('style', 'display: none !important');
                $.get("<?= $this->Url->build(["controller" => "Game", "action" => "addinter"]) ?>",
                        {'comment': $('#inter').val()}, function (data, status) {

                    if (status == 'success') {
                        $('#addinter').removeAttr('style');
                        $('#addpain').remove();
                        $('#pain').remove();
                        $('#addppcha').remove();
                        $('#ppcha').remove();
                        $('#addinter').closest('tr').before('<tr id="bloque' + data + '"><td> <b>' + $('#inter').val() + '</b><a href="#" id="delete' + data + '" onclick="delComment(' + data + ')" data-toggle="tooltip" title="Haz click para borrar un momento clave" class="d-inline-block pull-right"><i class="fa fa-close fa-2x"></i></a></td><td>' + pain + '</td><td></td></tr>');
                        $('#inter').val('');
                        $('#addpain').click(function () {
                            var id = $('#addpain').closest('tr').attr('id').replace('bloque', '');
                            console.log('pain1 ' + id);


                            $('#addpain').attr('style', 'display: none !important');
                            $.get("<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "addpain"
    ])
    ?>", {'comment': $('#pain').val(), 'inter_id': id}, function (data, status) {

                                if (status == 'success') {
                                    $('#addpain').removeAttr('style');
                                    $('#addppcha').remove();
                                    $('#ppcha').remove();

                                    $('#addpain').closest('tr').before('<tr id="pain' + data + '"><td> <b>' + $('#addpain').closest('tr').find("td:first").find("b").html() + '</b></td><td>' + $('#pain').val() + '<a href="#" id="delete' + data + '" onclick="delPain(' + data + ')" data-toggle="tooltip" title="Haz click para borrar un momento clave" class="d-inline-block pull-right"><i class="fa fa-close fa-2x"></i></a></td><td>' + ppcha + '</td></tr>');
                                    $('#pain').val('');
                                    $('#addppcha').click(function () {
                                        var id = $('#addppcha').closest('tr').attr('id').replace('pain', '');
                                        console.log(id);

                                        $('#addppcha').attr('style', 'display: none !important');
                                        $.get("<?= $this->Url->build(["controller" => "Game", "action" => "addppcha"]) ?>",
                                                {'comment': $('#ppcha').val(), 'inter_id': id}, function (data, status) {

                                            if (status == 'success') {
                                                $('#addppcha').removeAttr('style');
                                                $('#ppcha').before('<div id="' + data + '"> <b>' + $('#ppcha').val() + '</b><a href="#" id="delete' + data + '" onclick="delPpcha(' + data + ')" data-toggle="tooltip" title="<?= __('Haz click para borrar un momento clave') ?>" class="d-inline-block pull-right"><i class="fa fa-close fa-2x"></i></a></div>');
                                                $('#ppcha').val('');

                                            }
                                        });
                                    });
                                }
                            });
                        });

                    }
                });
            });

            $('#addpain').click(function () {
                var id = $('#addinter').closest('tr').attr('id');
                console.log('pain2 ' + id);

                return;
                $('#addpain').attr('style', 'display: none !important');
                $.get("<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "addpain"
    ])
    ?>", {'comment': $('#pain').val(), 'inter_id': id}, function (data, status) {

                    if (status == 'success') {
                        $('#addinter').removeAttr('style');
                        $('#addinter').closest('tr').before('<tr id="bloque' + data + '"><td> <b>' + $('#inter').val() + '</b><a href="#" id="delete' + data + '" onclick="delComment(' + data + ')" data-toggle="tooltip" title="Haz click para borrar un momento clave" class="d-inline-block pull-right"><i class="fa fa-close fa-2x"></i></a></td><td>' + pain + '</td><td></td></tr>');
                        $('#inter').val('');

                    }
                });
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
                        /* alert("<?= __('Se acabó el tiempo') ?>");
                         location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "index"
    ])
    ?>';
                         */
                    }

                });

            }

<?php } ?>

    });
</script>

