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
    <div class="text-center">
        <p class="title_first pb-4">
            <?= __('Etapa 4- Pain points')?></i>
        </p>
    </div>
    <section class="container">
        <p>
            <i class="fa fa-lightbulb-o"></i>
             <?= __('Identificar los momentos clave con los diferentes actores de la problemática y sus ')?><i><?= __('pain points')?></i><?= __(': puntos críticos o problemas que se presentan en cada momento.')?>
        </p>
        <p>
            <?= __('Convertir los pain points en retos: ')?><i><?= __('¿Cómo…?')?></i>
            <br>
            <i class="fa fa-comment-o"></i>
            <?= __('Para un momento clave se pueden identificar varios ')?><i><?= __('pain points')?></i>
            <br>
            <i class="fa fa-comment-o"></i>
            <?= __('Los Exploradores pueden introducir más de un reto por ')?><i><?= __('pain point')?></i>
        </p>
        
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
        
      <?php if ($admin) { ?>
          <div class="my-4 text-right">
              <button  id="anterior" type="button" class="btn btn-primary"><?= __('Anterior') ?></button>
              <button  id="siguiente" type="button" class="btn btn-primary"><?= __('Empezar Etapa 4') ?></button>
          </div>
      <?php } ?>
    </section>
</main>

<script>
    var page = 430;
    $(function () {
<?php if ($admin) { ?>


            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page44"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page43"
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

