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
        <?= $this->Html->image("breadp15.svg", ['class' => 'img-fluid mx-auto d-block head-img']); ?>
    </header>
    <div class="title_wrap text-center">
      <span class="title">
        <?=__('Problemática inicial: '.$trouble)?>
      </span>
    </div>
    <section class="container">
        <div class="text-center">
            <p class="title_first pb-4">
              <?=__('Etapa 1- Insights espontáneos')?>
            </p>
        </div>
        <p class="green1back">
            <i class="fa fa-lightbulb-o fa-lg mr-1"></i>
            <?=__('Pensar en los comentarios internos más habituales sobre la problemática, positivos o negativos, expresados de forma natural')?>
        </p>
        <ul class="unstyled">
            <li>
                <i class="fa fa-comment-o"></i>
                <?=__('Es lo que se comenta en reuniones, en la máquina del café…')?>
            </li>
            <li>
                <i class="fa fa-comment-o"></i>
                <?=__('También pueden servir quejas de clientes o usuarios')?>
            </li>
        </ul>
        <ul class="green">
            <li>
                <?=__('Lo que no funciona es…')?>
            </li>
            <li>
                <?=__('Lo que deberíamos solucionar es…')?>
            </li>
            <li>
                <?=__('¿Por qué no hacemos…?')?>
            </li>
            <li>
                <?=__('etc')?>
            </li>
        </ul>
        
        <div>
            <a href="#" data-toggle="modal" data-target="#modal_ex1" class="grey_link">
                <i class="fa fa-file-text-o fa-2x example_ic mr-3 mr-2"></i>
                <div class="fs12 d-inline-block"><?= __('click aquí para') ?><br><?= __(' ver ejemplo') ?>
                </div>
            </a>
        </div>
        <div id="modal_ex1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal_ex1LiveLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header align-items-start">
                        <div class="example row">
                            <i class="fa fa-file-text-o fa-3x example_ic align-top col-1"></i>
                            <div class="example_wrapper col mr-4">
                                <div class="example_inner text-left py-3 px-4">
                                    <p>
                                        <b>
                                            <?=__('Podremos seguir una simulación de partida sobre la problemática ficticia ')?>
                                            <br>
                                            <i><?=__('“¿Cómo podríamos mejorar la comunicación interna?” ')?></i>
                                            <br>
                                            <?=__('para que los exploradores puedan comprender mejor el trabajo a realizar en cada etapa. ')?>
                                        </b>
                                    </p>
                                    <p>
                                        <?=__('Al abrir el cuadro ‘Ejemplo’ en cada una de las etapas los equipos podrán leer o consultar los contenidos que se podrían haber generado sobre esta problemática, en cada momento de la partida. Les ayudará a entender cómo aplicar lo mismo a su problemática')?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="green">
                                <?=__('Ejemplo: si nuestra problemática inicial fuera ')?><i><?=__('“¿Cómo podríamos mejorar la comunicación interna?"')?></i>
                        </p>
                        <p>
                                <?=__('Para esta Etapa 1, algunos ejemplos de ')?><i><?=__('comentarios informales')?></i> <?=__('sobre la problemática podrían ser:')?> 
                        </p>
                        <ul class="circle">
                            <li>
                                <?=__('Los rumores siempre van más rápido que la información interna')?>
                            </li>
                            <li>
                                <?=__('Nadie lee los mails de comunicación interna')?> 
                            </li>
                            <li>
                                <?=__('Mucha gente no entiende los mails de comunicación interna')?>
                            </li>
                            <li>
                                <?=__('No tocan lo que nos gustaría realmente saber')?>
                            </li>
                            <li>
                                <?=__('Para los de la fábrica, la información no es relevante')?>
                            </li>
                            <li>
                                <?=__('Los mails de comunicación son muy aburridos')?>
                            </li>
                            <li>
                                <?=__('Siempre presentan un mundo perfecto')?>
                            </li>
                            <li>
                                <?=__('Los que mandan comunicación están muy lejos y no saben lo que hacemos')?>
                            </li>
                            <li>
                                <?=__('Tendríamos que tener a personas de comunicación en cada área ')?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
      <?php if ($admin) { ?>
          <div class="my-4 text-right">
              <button  id="anterior" type="button" class="btn btn-primary"><?= __('Anterior') ?></button>
              <button  id="siguiente" type="button" class="btn btn-primary"><?= __('Iniciar etapa 1') ?></button>
          </div>
      <?php } ?>
    </section>
</main>

<script>
    var page = 7;
    $(function () {
<?php if (!$admin) { ?>
            setTimeout(checkPage, 500);

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
<?php } else { ?>
            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page8"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page6"
    ])
    ?>';
            });
<?php } ?>

    });
</script>

