<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
?>

<!-- ** pag p15 ** -->
<main>
    <header class="text-center m-5 mb-10">
        <?= $this->Html->image("breadp15.svg", ['class' => 'img-fluid']); ?>
    </header>
    <section>
        <div class="col-12 col-md-auto">
            <p class="fs22">
                <?= __('El equipo escribe los retos') ?>
            </p>
        </div>
       
        <div class="col fs32">
            <div class="d-flex align-items-end flex-column">
                <div>
                    <h1><time id="clock"><?= $time ?></time></h1>
                    <i class="fa fa-clock-o"></i>

                </div>

            </div>
        </div>
        <?php
        foreach ($comments as $comment) {
            ?>
            <div id="bloque<?= $comment->id ?>" class="row form-group"><div class="col pl-0"><b><?= $comment->comment ?></b></div><div class="col col-md-auto"><a href="#" id="delete<?= $comment->id ?>" onclick="delComment(<?= $comment->id ?>)" data-toggle="tooltip" title="Haz click para borrar un comentario" class="d-inline-block pull-right"><i class="fa fa-close fa-2x"></i></a></div></div>
            <?php
        }
        ?>
        <div id="bloque" class="row form-group">
            <div class="col pl-0">
                <input type="text" name="comment" id="comment" class="form-control" placeholder="Introduzca aquí su reto">
            </div>
            <div class="col col-md-auto">
                <a id="addcomment" href="#" data-toggle="tooltip" title="Haz click para añadir un reto" class="d-inline-block">
                    <i class="fa fa-plus fa-2x"></i>
                </a>
            </div>
        </div>
        <div>
            <a href="#" data-toggle="modal" data-target="#modal_ex3" class="grey_link">
            <i class="fa fa-wpforms fa-2x example_ic mr-3 pull-left"></i>
            <p class="fs12">click aquí para<br> ver ejemplo
            </p>
          </a>
        </div>
        <div class="text-center mt-5">
            <div class="alert alert-danger d-inline-block" role="alert">
                <b>
                    ¡Ganarán Bikles los equipos con más comentarios!
                </b>
                </br>
                ¡Perderán Bikles los equipos con menos comentarios!
            </div>
        </div>
    </section>
   <div>
        <div id="modal_ex3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal_ex3LiveLabel" style="display: none;" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header align-items-start">
                <div class="example fs26">
                  <i class="fa fa-wpforms fa-3x example_ic align-top mr-3"></i>
                  <div class="example_wrapper d-inline-block">
                    <div class="example_inner text-left py-3 px-4">
                      <span>
                        <b>Ejemplo Problemática</b> 
                        ¿Cómo mejorar mi comunicación interna?
                      </span>
                    </div>
                  </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="text-center">
                  <div class="row">
                    <div class="col">
                      <p>
                        <i class="fa fa-user fa-2x"></i>
                        </br>
                        <b>
                          QUIÉN
                        </b>
                        </br>
                        El que manda la comunicación
                        </br>
                        <i class="fa fa-chevron-down"></i>
                        </br>
                        ¿cómo conseguir que el que manda la comunicación conozca el colectivo que la recibe?
                      </p>
                      <p>
                        Los que la reciben
                        </br>
                        <i class="fa fa-chevron-down"></i>
                        </br>
                        ¿cómo conseguir involucrar a la gente en la comunicación?
                      </p>
                    </div>
                    <div class="col">
                      <p>
                        <i class="fa fa-clock-o fa-2x"></i>
                        </br>
                        <b>
                          CUÁNDO
                        </b>
                        </br>
                        Cuando hay cambios
                        </br>
                        <i class="fa fa-chevron-down"></i>
                        </br>
                        ¿cómo comunicar bien cuando hay cambios importantes?
                      </p>
                      <p>
                        Cuando hay dudas
                        </br>
                        <i class="fa fa-chevron-down"></i>
                        </br>
                        ¿cómo comunicar cuándo hay incertidumbre?
                      </p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <p>
                        <i class="fa fa-map-pin fa-2x"></i>
                        </br>
                        <b>
                          DÓNDE
                        </b>
                        </br>
                        En la fábrica
                        </br>
                        <i class="fa fa-chevron-down"></i>
                        </br>
                        ¿cómo adecuar la comunicación al personal de fábrica?
                      </p>
                      <p>
                        En los espacios donde se comunica
                        </br>
                        <i class="fa fa-chevron-down"></i>
                        </br>
                        ¿cómo optimizar la comunicación en los paneles de los espacios comunes?
                      </p>
                      <p>
                        <i class="fa fa-crosshairs fa-2x"></i>
                        </br>
                        <b>
                          PARA QUÉ
                        </b>
                        </br>
                        Para que todos lo entiendan
                        </br>
                        <i class="fa fa-chevron-down"></i>
                        </br>
                        ¿cómo conseguir que se entienda a primera vista el objetivo de una comunicación?
                      </p>
                    </div>
                    <div class="col">
                      <p>
                        <i class="fa fa-question-circle fa-2x"></i>
                        </br>
                        <b>
                          POR QUÉ’S
                        </b>
                        </br>
                        porque nadie hace caso
                        </br>
                        <i class="fa fa-chevron-down"></i>
                        </br>
                        ¿Cómo conseguir que la genta haga caso a la comunicación?
                      </p>
                      <p>
                        porque no nos enteramos de nada
                        </br>
                        <i class="fa fa-chevron-down"></i>
                        </br>
                        ¿cómo conseguir que la comunicación interna nos ayude a conocer mejor lo que nos puede ayudar?
                      </p>
                      <p>
                        porque queremos que toda la empresa comparte la visión y los valores
                        </br>
                        <i class="fa fa-chevron-down"></i>
                        </br>
                        ¿cómo conseguir una comunicación que involucre a la gente en los valores?
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
 </main>

<script>
    var page = 20;
    function delComment(id) {
        $.get("<?=
        $this->Url->build([
            "controller" => "Game",
            "action" => "deletequestion"
        ])
        ?>", {'id': id}, function (data, status) {
            if (status == 'success') {

                $('#bloque' + id).remove();
            }
        });
    }
    $(function () {
<?php if (!$admin) { ?>

            $('#addcomment').click(function () {
                $('#addcomment').attr('style', 'display: none !important');
                $.get("<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "addquestion"
    ])
    ?>", {'comment': $('#comment').val()}, function (data, status) {
                    if (status == 'success') {
                        $('#addcomment').removeAttr('style');
                        $('#bloque').before('  <div id="bloque' + data + '" class="row form-group"><div class="col pl-0"><b>' + $('#comment').val() + '</b></div><div class="col col-md-auto"><a href="#" id="delete' + data + '" onclick="delComment(' + data + ')" data-toggle="tooltip" title="Haz click para borrar un reto" class="d-inline-block pull-right"><i class="fa fa-close fa-2x"></i></a></div></div>');
                        $('#comment').val('');

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
                        alert("Se acabó el tiempo");
                        location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "index"
    ])
    ?>';
                    }

                });

            }

<?php } ?>

    });
</script>

