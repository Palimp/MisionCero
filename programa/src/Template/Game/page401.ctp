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
        <?= $this->Html->image("breadp60.svg", ['class' => 'img-fluid mx-auto d-block head-img']); ?>
    </header>
    <section class="container text-center">
        <p class="title_first mt-3 pb-2">
            <?= __('Parada lúdica 3') ?>
        </p>
                    <p class="h_green">
                        <?= __('Eres bueno vendiendo?') ?>
                        <i class="fa fa-smile-o"></i>
                    </p>
                    <p>
                        <i class="fa fa-comment-o"></i>
                        <?= __('En esta etapa los Exploradores tendrán que demostrar su ingenio tratando de vender el objeto que aparecerá en pantalla a otro equipo, teniendo en cuenta las limitaciones indicadas.') ?>
                        <br>
                        <?= __('2 equipos trabajan juntos: ') ?>
                    </p>
                    <ul class="unstyled">
                        <li>
                            <b><?= __('Fase 1- ') ?></b>
                            </br> 
                            <?= __('Los equipos tienen 2 minutos para preparar la venta del objeto al otro equipo') ?>
                            <br>
                            <?= __('Finalizado el tiempo, un equipo dispondrá de 2 minutos para convencer al segundo equipo que le compre su objeto. El segundo equipo comunicará al Jefe de Expedición si le ha convencido la presentación. ') ?>
                        </li>
                        <li>
                            <b><?= __('Fase 2- ') ?></b>
                            </br> 
                            <?= __('Los equipos intercambian los roles: el equipo 2 presenta al equipo 1. ') ?>
                        </li>
                    </ul>
                <?php if ($admin) { ?>
                    <p>
                        <?= __('Si el número de equipos es impar, el equipo con más bikles juega contra el Jefe de Expedición') ?>
                    </p>
                <?php } ?>
                <div class="text-center mt-5">
                    <div class="alert alert_bikles d-inline-block" role="alert">
                        <img src="/img/bikles.png" class="float-left mr-3 img-fluid" alt="">
                            <?= __('¡Los equipos que mejor vendan los objetos ganarán Bikles!') ?>
                            </br>
                            <?= __('Los equipos que no logren convencer al rival, perderán Bikles.') ?>
                    </div>
                </div>
        <?php if ($admin) { ?>
          <div class="my-4 text-right">
              <button  id="anterior" type="button" class="btn btn-primary"><?= __('Anterior') ?></button>
              <button  id="siguiente" type="button" class="btn btn-primary"><?= __('Pasar a objetos') ?></button>
          </div>
      <?php } ?>
    </section>
</main>


<script>
    var page = 401;
    $(function () {
<?php if ($admin) { ?>


            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page41"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page40"
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

