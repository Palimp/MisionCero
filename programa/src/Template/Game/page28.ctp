<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
if ($admin) {
    echo $this->element('navbar');
}
?>

<main class="text-center">
    <header>
        <?= $this->Html->image("breadp45.svg", ['class' => 'img-fluid']); ?>
    </header>

    <div>
        <p class="title_first mt-3 pb-2">
            <?= __('Parada lúdica 2') ?>
        </p>
    </div>
    <section class="container">
        <p class="h_green">
            <?= __('Casos prácticos') ?>
        </p>
        <ul class="unstyled">
            <li>
                <i class="fa fa-comment-o"></i>
                <?= __('A continuación se presentará el caso de una empresa a los exploradores') ?><br>
                <?= __('Deberán seleccionar el reto que mejor podrá ayudarles a cumplir el objetivo planteado') ?>
            </li>
        </ul>

        <div class="text-center mt-5">
            <div class="alert alert_bikles d-inline-block" role="alert">
                <img src="/img/bikles.jpg" class="float-left mr-3 img-fluid" alt="">
                 <?= __('La distribución de Bikles dependerá de la respuesta elegida: si seleccionan retos que pueden abrir nuevas vías de trabajo, ganarán Bikles! (según el criterio de Binnakle ') ?><i class="fa fa-smile-o"></i><?= __('). En caso contrario, perderán Bikles.') ?>
            </div>
        </div>

      <?php if ($admin) { ?>
          <div class="my-4 text-right">
              <button  id="anterior" type="button" class="btn btn-primary"><?= __('Anterior') ?></button>
              <button  id="siguiente" type="button" class="btn btn-primary"><?= __('Iniciar Caso práctico') ?></button>
          </div>
      <?php } ?>
    </section>
</main>

<script>
    var page = 28;
    $(function () {
<?php if ($admin) { ?>


            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page29"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page27"
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

