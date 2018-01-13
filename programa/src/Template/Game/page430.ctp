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
    <section>
        <header class="text-center m-5 mb-10">
            <?= $this->Html->image("breadp63.svg", ['class' => 'img-fluid']); ?>
        </header>
        <h4>
            Etapa 7- <i>Pain points</i>
            <br>
            <?=__('Problemática: '.$trouble)?>
        </h4>

        <p class="fs22 green">
            <i class="fa fa-lightbulb-o"></i>
             Identificar los momentos clave de interacción con los diferentes actores de la problemática y sus <i>pain points</i>: puntos críticos o problemas que se presentan en cada momento.
        </p>
        <p>
            Convertir los pain points en retos: <i>¿Cómo…?</i>
            <br>
            <i class="fa fa-comment-o"></i>
            Para una interacción se pueden identificar varios <i>pain points</i>
            <br>
            <i class="fa fa-comment-o"></i>
            Los Exploradores pueden introducir más de un reto por <i>pain point</i>
        </p>
        
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
                                     <td scope="row" rowspan="2">Hay algo que comunicar</td>
                                     <td rowspan="2">No se puede decir todo</td>
                                     <td class="green">¿Cómo comunicar cuando no se puede decir todo?
                                     </td>
                                  </tr>
                                  <tr>
                                     
                                     
                                     <td class="green">¿Cómo conseguir que la gente entienda que no se puede decir todo?
                                     </td>
                                  </tr>
                                  <tr>
                                     <td>Hay algo que comunicar</td>
                                     <td>No es una buena noticia
                                     </td>
                                     <td class="green">¿Cómo comunicar malas noticias?
                                     </td>
                                  </tr>
                                  <tr>
                                     <td scope="row">Se envía la comunicación
                                     </td>
                                     <td>No todos tienen mail
                                     </td>
                                     <td class="green">¿Cómo hacer llegar la comunicación al mismo tiempo a los que no tienen mail?
                                     </td>
                                  </tr>
                                  <tr>
                                     <td>Se envía la comunicación
                                     </td>
                                     <td>Algunos se han enterado antes</td>
                                     <td class="green">¿Cómo comunicar cuando algunos ya se han enterado por otra vía?</td>
                                  </tr>
                                  <tr>
                                     <td rowspan="2">Se envía la comunicación
                                     </td>
                                     <td rowspan="2">Hay rumores</td>
                                     <td class="green">¿Cómo comunicar cuando ha habido rumores?</td>
                                  </tr>
                                  <tr>
                                     <td class="green">¿Cómo comunicar antes de que haya rumores?</td>
                                  </tr>
                                  <tr>
                                     <td>Se recibe la comunicación</td>
                                     <td>Hay malentendidos</td>
                                     <td class="green">¿Cómo asegurarse de que no habrán malentendidos?</td>
                                  </tr>
                                  <tr>
                                     <td>Se recibe la comunicación</td>
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
        
    </section>
<?php if ($admin) { ?>
    <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
    <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Empezar Etapa 7') ?></button>
<?php } ?>
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

