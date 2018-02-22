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
        <?= $this->Html->image("breadp33.svg", ['class' => 'img-fluid mx-auto d-block head-img']); ?>
    </header>
    <div class="title_wrap text-center">
      <span class="title">
        <?=__('Problemática: '.$trouble)?>
      </span>
    </div>
    <section class="container">
        <div class="text-center">
            <p class="title_first pb-4">
              <?=__('Etapa 2- Preguntas Básicas')?>
            </p>
        </div>
        <p class="green1back">
            <i class="fa fa-lightbulb-o fa-lg mr-1"></i>
            <?=__('Utilizar las preguntas básicas para identificar retos más concretos y, si es posible, no habituales, sobre la problemática.')?>
        </p>
        <p>
            <?=__('Pensar en las preguntas más básicas para identificar retos:')?>
        </p>
        <div class="text-left">
            <div class="pr-3 d-inline-block" style="background-color: #ebfa94;">
                <span class="mx-2">
                    <?=__('¿QUIÉN?')?>
                </span>
                <span class="mr-2">
                    <?=__('¿DÓNDE?')?>
                </span>
                <span>
                    <?=__('¿CUÁNDO?')?>
                </span>
            </div>
        </div>
        <ol class="mt-2 list-numbered text-left">
            <li>
                <?=__('Pensar en públicos objetivos (internos o externos), lugares y momentos relevantes asociados con la problemática')?>
            </li>
            <li>
                <?=__('Convertir estas respuestas en retos: ¿cómo…?')?>
            </li>
        </ol>
        <div class="text-left">
            <div class="pr-3 d-inline-block" style="background-color: #f3ed48;">
                <span class="mx-2">
                    <?=__('¿POR QUÉ? · ')?>
                </span>
                <span>
                    <?=__('¿PARA QUÉ?')?>
                </span>
            </div>
        </div>
        <ol class="mt-2 list-numbered text-left">
            <li>
                <?=__('Pensar en “¿por qué?/¿para qué?”  tenemos que trabajar este reto.')?>
            </li>
            <li>
                <?=__('Convertirlos en reto: ¿Cómo…? ')?>
            </li>
        </ol>
            
        <div>
            <!-- Button trigger modal_ex -->

            <div class="py-3">
                <a href="#" data-toggle="modal" data-target="#modal_ex" class="grey_link">
                    <i class="fa fa fa-file-text-o fa-2x example_ic mr-2"></i>
                    <div class="fs12 d-inline-block"><?= __('click aquí para') ?><br><?= __(' ver ejemplo') ?>
                    </div>
                </a>
            </div>

            <!-- modal_ex -->
            <div>
                <div id="modal_ex" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal_exLiveLabel" style="display: none;" aria-hidden="true">
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
                                        <?=__('Para esta Etapa 2, algunos ejemplos de ')?><i><?=__('“retos basados en preguntas básicas”')?></i> <?=__(' podrían ser:')?> 
                                </p>
                                <div>
                                    <div class="row">
                                        <div class="col">
                                            <p>
                                                <i class="fa fa-user fa-2x"></i>
                                                </br>
                                                <b>
                                                    <?= __('QUIÉN:') ?>
                                                </b>
                                                </br>
                                                <span class="h_green">
                                                    <?= __(' pensar en actores relevantes de la problemática y cómo estos expresarían el reto') ?>
                                                </span>
                                                </br>
                                                <?= __('El que manda la comunicación') ?>
                                                </br>
                                                <i class="fa fa-chevron-down"></i>
                                                </br>
                                                <?= __('¿Cómo conseguir que el que manda la comunicación conozca el colectivo que la recibe?') ?>
                                            </p>
                                            <p>
                                                <?= __('Los que la reciben') ?>
                                                </br>
                                                <i class="fa fa-chevron-down"></i>
                                                </br>
                                                <?= __('¿Cómo involucrar a la gente en la comunicación?') ?>
                                            </p>
                                        </div>
                                        <div class="col">
                                            <p>
                                                <i class="fa fa-clock-o fa-2x"></i>
                                                </br>
                                                <b>
                                                    <?= __('CUÁNDO:') ?>
                                                </b>
                                                </br>
                                                <span class="h_green">
                                                    <?= __(' pensar en momentos relevantes de la problemática y en posibles retos relacionados con estos momentos') ?>
                                                </span>
                                                </br>
                                                <?= __('Cuando hay cambios') ?>
                                                </br>
                                                <i class="fa fa-chevron-down"></i>
                                                </br>
                                                <?= __('¿Cómo comunicar bien cuando hay cambios importantes?') ?>
                                            </p>
                                            <p>
                                                <?= __('Cuando hay dudas') ?>
                                                </br>
                                                <i class="fa fa-chevron-down"></i>
                                                </br>
                                                <?= __('¿Cómo comunicar mejor en momentos de incertidumbre?') ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p>
                                                <i class="fa fa-map-pin fa-2x"></i>
                                                </br>
                                                <b>
                                                    <?= __('DÓNDE: ') ?>
                                                </b>
                                                </br>
                                                <span class="h_green">
                                                    <?= __('PENSAR EN LUGARES RELEVANTES RELACIONADOS CON LA PROBLEMÁTICA Y EN POSIBLES RETOS RELACIONADOS CON ESTOS LUGARES') ?>
                                                </span>
                                                </br>
                                                <?= __('En la fábrica') ?>
                                                </br>
                                                <i class="fa fa-chevron-down"></i>
                                                </br>
                                                <?= __('¿Cómo adecuar la comunicación al personal de fábrica?') ?>
                                            </p>
                                            <p>
                                                <?= __('En los espacios físicos donde se comunica') ?>
                                                </br>
                                                <i class="fa fa-chevron-down"></i>
                                                </br>
                                                <?= __('¿Cómo optimizar la comunicación en los paneles de los espacios comunes?') ?>
                                            </p>
                                            <p>
                                                <i class="fa fa-question-circle fa-2x"></i>
                                                </br>
                                                <b>
                                                    <?= __('POR QUÉ’S: ') ?>
                                                </b>
                                                </br>
                                                <span class="h_green">
                                                    <?= __('pensar en las razones que nos llevan a querer encontrar soluciones a nuestro problemática y transformarlas en retos') ?>
                                                </span>
                                                </br>
                                                <?= __('Porque nadie hace caso') ?>
                                                </br>
                                                <i class="fa fa-chevron-down"></i>
                                                </br>
                                                <?= __('¿Cómo podríamos conseguir que la genta haga caso a la comunicación?') ?>
                                            </p>
                                            <p>
                                                <?= __('Porque no nos enteramos de nada') ?>
                                                </br>
                                                <i class="fa fa-chevron-down"></i>
                                                </br>
                                                <?= __(' ¿Cómo conseguir que la comunicación interna nos ayude a entender mejor los objetivos?') ?>
                                            </p>
                                            <p>
                                                <?= __('Porque queremos que toda la empresa comparta la visión y los valores') ?>
                                                </br>
                                                <i class="fa fa-chevron-down"></i>
                                                </br>
                                                <?= __('¿Cómo conseguir una comunicación que involucre a la gente en los valores?') ?>
                                            </p>
                                        </div>
                                        <div class="col">
                                            <p>
                                                <i class="fa fa-crosshairs fa-2x"></i>
                                                </br>
                                                <b>
                                                    <?= __('PARA QUÉ: ') ?>
                                                </b>
                                                </br>
                                                <span class="h_green">
                                                    <?= __(' pensar en los objetivos que nos llevan a querer encontrar soluciones a nuestro problemática y transformarlos en retos') ?>
                                                </span>
                                                </br>
                                                <?= __('Para que todos lo entiendan') ?>
                                                </br>
                                                <i class="fa fa-chevron-down"></i>
                                                </br>
                                                <?= __('¿Cómo podríamos conseguir que se entienda a primera vista el mensaje clave de una comunicación?') ?>
                                            </p>
                                            <p>
                                                <?= __('Para que la comunicación ayude a la gente en su trabajo ') ?>
                                                </br>
                                                <i class="fa fa-chevron-down"></i>
                                                </br>
                                                <?= __('¿cómo conseguir que la gente perciba que la comunicación les ayuda?') ?>
                                            </p>
                                        </div>
                                    </div>
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
              <button  id="siguiente" type="button" class="btn btn-primary"><?= __('Continuar Etapa 2') ?></button>
          </div>
      <?php } ?>
    </section>
</main>

<script>
    var page = 19;
    $(function () {
<?php if ($admin) { ?>


            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page20"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page18"
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

