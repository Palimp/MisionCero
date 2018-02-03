<?php
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
        <div>
            <p class="title_first pb-4">
                <?=__('Etapa 3- Actores')?>                
            </p>
        </div>
        <p class="h_green">
            <?=__('¿Cómo ven los actores involucrados el problema, desde su punto de vista?')?>
        </p>
        <p>
            <b><?=__('Los 5 retos más votados por todos los equipos pasan al Final del Viaje')?></b>
        </p>


        <p>
            <i class="fa fa-comment-o"></i>
            <?=__('Pensar en los diferentes actores involucrados que intervienen en nuestra problemática.')?>
        </p>
        <p>
            <?=__('Un cliente interno/externo, un competidor, un proveedor, un distribuidor, la administración, otro departamento, un usuario, la familia de un usuario...)')?>
        </p>

        <div class="text-center green fs22">
            <p>
                <?=__('¿cómo ven el reto desde su punto de vista?')?>
                </br>
                <i class="fa fa-chevron-down"></i>
                </br>
                <b><?=__('Luego expresar las diferentes visiones en forma de reto:')?></b>
                </br>
                <em><?=__('¿cómo…?')?></em>
            </p>
        </div>
        
        <div>
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
                        <?=__('Para esta Etapa 3, algunos ejemplos de ')?><i><?=__('retos basados en puntos de vista')?></i> <?=__(' podrían ser:')?> 
                    </b>
                </p>
                <div class="text-center">
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

      <?php if ($admin) { ?>
          <div class="my-4 text-right">
              <button  id="anterior" type="button" class="btn btn-primary"><?= __('Anterior') ?></button>
              <button  id="siguiente" type="button" class="btn btn-primary"><?= __('Iniciar a Etapa 3') ?></button>
          </div>
      <?php } ?>
    </section>
</main>
<script>
    var page = 32;
    $(function () {
<?php if ($admin) { ?>


            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page33"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page31"
    ])
    ?>';
            });
<?php } else { ?>
            setTimeout(checkPage, 1000);

            function checkPage() {
                $.get("<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "pageactive"
    ])
    ?>", function (data, status) {

                    if (data == page) {
                        setTimeout(checkPage, 500);
                    } else {
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

